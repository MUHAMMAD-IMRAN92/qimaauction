<?php

namespace App\Http\Controllers;

use App\Mail\JuryMail;
use App\Models\Jury;
use App\Models\Product;
use App\Models\Auction;
use App\Models\SentToJury;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use DB;
class JuryController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }
    public function index()
    {
        // return $this->user;   
        return view('admin.jury.index');
    }
    public function alljury(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $jury_count = Jury::when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%");
        })->where('is_hidden', '0')->count();
        $juries = Jury::when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%");
        });

        $juries = $juries->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->orderBy('created_at','desc')->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $jury_count,
            'recordsFiltered' => $jury_count,
            'data' => $juries,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.jury.create');
    }
    public function sampleSearch(Request $request)
    {
            $isExists = SentToJury::where('samples',$request->sample)->first();
            if($isExists){
                return response()->json(array("exists" => true));
            }else{
                return response()->json(array("exists" => false));
            }
    }
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:juries,email'
            // 'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:12'
        ]);
        $jury = new  Jury();
        $jury->name = $request->name;
        $jury->email = $request->email;
        $jury->phone = $request->phone;
        $jury->company = $request->company;
        $jury->address = $request->address;
        $jury->save();
        return redirect('/jury/index');
    }
    public function delete(Request $request, $id)
    {
        $jury = Jury::find(base64_decode($id));
        $jury->is_hidden = '1';
        $jury->save();
        return redirect('/jury/index')->with('msg', 'jury Deleted Successfully');
    }
    // public function edit(Request $request, $id)
    // {
    //     $jury = Jury::find(base64_decode($id));
    //      $data=SentToJury::where('jury_id',base64_decode($id))->get();
    //     return view('admin.jury.edit', [
    //         'jury' =>  $jury,
    //     ]);
    // }
    public function edit(Request $request, $id)
    {
        $selectedjury = Jury::find(base64_decode($id));
        $juries = Jury::all();
        $products = Product::all();
        $auctions = Auction::all();
         $senttojury=SentToJury::join('products','products.id','sample_sent_to_jury.product_id')
                               ->select('products.*','sample_sent_to_jury.*')
                              ->where('jury_id',base64_decode($id))
                              ->get();
                             
         return view('admin.jury.edit_sent_to_jury', [
            'senttojury' =>  $senttojury,
            'juries' =>  $juries,
            'selectedjury' =>  $selectedjury,
            'products' => $products,
            'auctions' => $auctions
        ]);
    }
   
    public function update(Request $request)
    {
        $jury = Jury::find($request->id);
        $jury->name = $request->name;
        $jury->email = $request->email;
        $jury->phone = $request->phone;
        $jury->company = $request->company;
        $jury->address = $request->address;
        $jury->save();
        return redirect('/jury/index');
    }

    public function sendToJury()
    {
        $juries = Jury::all();
        $products = Product::all();
        $auctions = Auction::all();
        return view('admin.jury.send_to_jury', [
            'juries' =>  $juries,
            'products' => $products,
            'auctions' => $auctions
        ]);
       
    }
    public function ajaxSendToJuryPost(Request $request)
    {
        $request->validate([
            'juries' => 'required|array',
            'auction_id' => 'required',
            'productId' => 'required',
        ]);
        $tempLink = base64_encode(url('jury/link/give_review/' . rand()));
       foreach ($request->juries as $key => $jury) {
            $sampleSent = new SentToJury();
            $sampleSent->jury_id = $jury;
            $sampleSent->tables = $request->table;
            $sampleSent->product_id = $request->productId;
            $sampleSent->auction_id = $request->auction_id;
            $sampleSent->temporary_link = $tempLink;
            $sampleSent->samples = $request->samples;
            $sampleSent->save();
            $jury =    Jury::find($sampleSent->jury_id);
            Mail::to($jury->email)->send(new JuryMail($jury));
        }

            return response()->json(array("exists" => true));
    }
    public function sendToJuryPost(Request $request)
    { 
        $request->validate([
            'juries' => 'required|array',
            'products' => 'required|array',
            'auction_id' => 'required'
        ]);
        $tempLink = base64_encode(url('jury/link/give_review/' . rand()));
        foreach ($request->juries as $jury1) {
            foreach ($request->products as $key => $product) {
                  
                $sampleSent=SentToJury::where('product_id',$product)->where('jury_id',$jury1)->where('samples',$request->samples[$key])->first();
                   Product::where('id',$product)->update([
                       'postion' =>  $request->postion[$key],
                       'table'  =>    $request->$key,
                       'sample'  => $request->samples[$key],
                   ]);

                if(isset($sampleSent))
                {
                   $sampleSent->jury_id = $jury1;
                   $sampleSent->tables = $request->$key;
                   $sampleSent->product_id = $product;
                   $sampleSent->postion = $request->postion[$key];
                   $sampleSent->auction_id = $request->auction_id;
                   $sampleSent->temporary_link = $tempLink;
                   $sampleSent->samples = $request->samples[$key];
                   $sampleSent->save();  
                }
               else
               {
                   $sampleSent = new SentToJury();
                   $sampleSent->jury_id = $jury1;
                   $sampleSent->tables = $request->$key;
                   $sampleSent->product_id = $product;
                   $sampleSent->postion = $request->postion[$key];
                   $sampleSent->auction_id = $request->auction_id;
                   $sampleSent->temporary_link = $tempLink;
                   $sampleSent->samples = $request->samples[$key];
                   $sampleSent->save();  
               }  
            }
            $jury =    Jury::find($sampleSent->jury_id);
            Mail::to($jury->email)->send(new JuryMail($jury));
        }
        return redirect('/jury/index')->with('success','Samples Successfully Emailed  to Jury Members');
    }
    public function updateSentToJury(Request $request){
        // dd($request->all());
        $request->validate([
            'juries' => 'required|array',
            'products' => 'required|array',
            'auction_id' => 'required'
        ]);
        $tempLink = base64_encode(url('jury/link/give_review/' . rand()));
        foreach ($request->juries as $jury1) {
            foreach ($request->products as $key => $product) {
                $sampleSent=SentToJury::where('product_id',$product)->where('jury_id',$jury1)->where('samples',$request->samples[$key])->first();
                Product::where('id',$product)->update([
                    'postion' =>  $request->postion[$key],
                    'table'  =>    $request->$key,
                    'sample'  => $request->samples[$key],
                ]);      
                 if(isset($sampleSent))
                 {
                    $sampleSent->jury_id = $jury1;
                    $sampleSent->tables = $request->$key;
                    $sampleSent->product_id = $product;
                    $sampleSent->auction_id = $request->auction_id;
                    $sampleSent->temporary_link = $tempLink;
                    $sampleSent->samples = $request->samples[$key];
                    $sampleSent->save();  
                 }
                else
                {
                    $sampleSent = new SentToJury();
                    $sampleSent->jury_id = $jury1;
                    $sampleSent->tables = $request->$key;
                    $sampleSent->product_id = $product;
                    $sampleSent->auction_id = $request->auction_id;
                    $sampleSent->temporary_link = $tempLink;
                    $sampleSent->samples = $request->samples[$key];
                    $sampleSent->save();  
                }
            }
        }
        return redirect('/jury/index')->with('success','Samples Successfully Emailed  to Jury Members');
 }

    public function juryLinks(Request $request, $id)
    {
        $juryId = decrypt($id);
        $jury = Jury::find($juryId);
        if ($jury) {
            $samples= SentToJury::groupBy('tables')
            ->select('tables', DB::raw('count(*) as total'))
            // ->where('sample_sent_to_jury.is_hidden','=','0')
            ->where('sample_sent_to_jury.jury_id',$juryId)
            ->where('sample_sent_to_jury.tables','!=',null)
            // ->orderBy('created_at','desc')
             ->get();

                $juryName = Jury::where('id', $juryId)->first();
                $firstsample =   $samples->first();
               return view('admin.jury.jury_links', [
                   'samples' => $samples,
                   'firstsample' => $firstsample,
                   'juryName' => $juryName->name,
                   'juryId' => $juryId,
               ]);
            
          
        } else {
            return view('admin.404');
        }
    }
}
