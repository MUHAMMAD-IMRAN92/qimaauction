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

        $juries = $juries->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
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
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:juries,email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
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
        $jury->delete();
        return redirect('/jury/index')->with('msg', 'jury Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $jury = Jury::find(base64_decode($id));

        return view('admin.jury.edit', [
            'jury' =>  $jury,
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
    public function sendToJuryPost(Request $request)
    {

        $request->validate([
            'products' => 'required|array',
            'juries' => 'required|array',
            'samples' => 'required|array',
        ]);
        $tempLink = base64_encode(url('jury/link/give_review/' . rand()));
        foreach ($request->juries as $jury) {
            foreach ($request->products as $key => $product) {

                $sampleSent = new SentToJury();
                $sampleSent->jury_id = $jury;
                $sampleSent->product_id = $product;
                $sampleSent->temporary_link = $tempLink;
                $sampleSent->samples = $request->samples[$key];
                $sampleSent->save();
            }
            $jury =    Jury::find($sampleSent->jury_id);
            Mail::to($jury->email)->send(new JuryMail($jury));
        }
        return redirect('/jury/index')->with('success','Emailed Successfully to Juries');
        ;
    }

    public function juryLinks(Request $request, $id)
    {
        $juryId = decrypt($id);
        $jury = Jury::find($juryId);
        if ($jury) {
            $samples = SentToJury::join('products','products.id','sample_sent_to_jury.product_id')
             ->select('products.*','sample_sent_to_jury.*')
            ->where('sample_sent_to_jury.jury_id', $juryId)->where('sample_sent_to_jury.is_hidden', '0')
            ->get();
               $juryName = Jury::where('id', $juryId)->first();
            return view('admin.jury.jury_links', [
                'samples' => $samples,
                'juryName' => $juryName->name,
            ]);
        } else {
            return view('admin.404');
        }
    }
}
