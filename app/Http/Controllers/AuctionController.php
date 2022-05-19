<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Genetic;
use App\Models\Product;
use App\Models\Process;
use App\Models\Image;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.auction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::all();
        $genetics=Genetic::all();
        $process=Process::all();
        return view('admin.auction.create',compact('products','genetics','process'));
    }
    public function save(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required||max:255',
            'startDate' => 'required',
            'endDate' => 'required',
        ]);
        $auction = new Auction();
        $auction->title = $request->title;
        $auction->lottitle = $request->lottitle;
        $auction->lotnumber = $request->lotnumber;
        $auction->product_detail = $request->product_detail;
        $auction->product_id = $request->product_id;
        $auction->process_id = $request->process_id;
        $auction->genetic_id = $request->genetic_id;
        $auction->startDate = $request->startDate;
        $auction->startTime = $request->startTime;
        $auction->endDate = $request->endDate;
        $auction->endTime = $request->endTime;
        $auction->weight = $request->weight;
        $auction->size = $request->size;
        $auction->start_bid_price = $request->start_bid_price;
        $auction->reserved_bid_price = $request->reserved_bid_price;
        $auction->increment_bid_price = $request->increment_bid_price;
        $auction->farm = $request->farm;
        $auction->score = $request->score;
        $auction->rank = $request->rank;
        $auction->save();
        if ($request->image) {
        foreach ($request->image as $img) {
            $fileName = $img->getClientOriginalName();
            $img->storeAs(
                'auction',
                $fileName,
                'public'
            );
            $productImage = new Image();
            $productImage->auction_id =  $auction->id;
            $productImage->image_name = $fileName;
            $productImage->save();
        }
    }


        return redirect('/auction/index');
    }

    public function allauction(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $jury_count = Auction::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->where('is_hidden', '0')->count();
        $juries = Auction::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        });

        $juries = $juries->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->orderBy('id','desc')->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $jury_count,
            'recordsFiltered' => $jury_count,
            'data' => $juries,
        );
        return response()->json($data);
    }
    public function edit(Request $request, $id)
    {
        $auction = Auction::find(base64_decode($id));
        $auctionimages=Auction::where('id', base64_decode($id))->with('images')->first();
        $products = Product::all();
        $genetics=Genetic::all();
        $process=Process::all();
        return view('admin.auction.edit', [
            'genetics' =>  $genetics, 'process' =>  $process, 'auction' =>  $auction,'auctionimages' =>  $auctionimages,'products' =>  $products,
        ]);
    }
    public function deleteImage($id)
    {
        Image::where('id', $id)->delete();

        return back()->with('msg', 'Image Has Deleted');
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required||max:255',
            'startDate' => 'required',
            'endDate' => 'required',
        ]);
        $auction = Auction::find($request->id);
        $auction->title = $request->title;
        $auction->lottitle = $request->lottitle;
        $auction->lotnumber = $request->lotnumber;
        $auction->product_detail = $request->product_detail;
        $auction->product_id = $request->product_id;
        $auction->process_id = $request->process_id;
        $auction->genetic_id = $request->genetic_id;
        $auction->startDate = $request->startDate;
        $auction->startTime = $request->startTime;
        $auction->endDate = $request->endDate;
        $auction->endTime = $request->endTime;
        $auction->weight = $request->weight;
        $auction->size = $request->size;
        $auction->farm = $request->farm;
        $auction->start_bid_price = $request->start_bid_price;
        $auction->reserved_bid_price = $request->reserved_bid_price;
        $auction->increment_bid_price = $request->increment_bid_price;
        $auction->score = $request->score;
        $auction->rank = $request->rank;
        $auction->save();
        if ($request->image) {
            foreach ($request->image as $img) {
                $fileName = $img->getClientOriginalName();
                $img->storeAs(
                    'auction',
                    $fileName,
                    'public'
                );
                $productImage = new Image();
                $productImage->auction_id =  $auction->id;
                $productImage->image_name = $fileName;
                $productImage->save();
            }
        }

        return redirect('/auction/index');
    }
    public function delete(Request $request, $id)
    {
        $jury = Auction::find(base64_decode($id));
        $jury->delete();
        return redirect('/auction/index')->with('msg', 'Auction Deleted Successfully');
    }
}
