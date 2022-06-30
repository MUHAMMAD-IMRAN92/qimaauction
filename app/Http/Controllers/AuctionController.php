<?php

namespace App\Http\Controllers;

use App\Models\AcceptAgreement;
use App\Models\Auction;
use App\Models\AuctionProduct;
use App\Models\AutoBid;
use App\Models\Bidlimit;
use App\Models\Genetic;
use App\Models\Product;
use App\Models\Process;
use App\Models\Image;
use App\Models\SingleBid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function prductBiddingDetail($id)
    {
        $auctionId = base64_decode($id);
          $auction_products = AuctionProduct::where('auction_id',$auctionId)
                          ->with('products')
                          ->get();
           $products = Product::with('region','village','governorate','reviews')->get();

         return view('admin.auction.productBiddingDetail',compact('auction_products','products','auctionId'));
    }
    public function auctionProducts($id)
    {

        $auctionId = base64_decode($id);
       $auction_products = AuctionProduct::where('auction_id',$auctionId)
                       ->with('products')
                       ->get();
        $products = Product::with('region','village','governorate','reviews')->get();
      return view('admin.auction.auction_products',compact('auction_products','products','auctionId'));
    }
    public function bidHistory($id)
    {
        //   $auction_products = AuctionProduct::where('id',$id)
        //                   ->with('products')
        //                   ->get();
             $bidhistory = SingleBid::join('users','users.id','single_bids.user_id')
                         ->where('auction_product_id',$id)
                         ->select('users.paddle_number','users.name as name','single_bids.bid_amount')
                         ->orderBy('single_bids.bid_amount','desc')
                         ->get();
        //    $products = Product::with('region','village','governorate','reviews')->get();
        //  $auctionId =$id;
         return view('admin.auction.bidHistory',compact('bidhistory'));
    }

    public function saveAuctionProduct(Request $request)
    {
        if(isset($request->auction_product_id))
        {
            $auctionproduct = AuctionProduct::where('id',$request->auction_product_id)->update(
                [
                    'product_id' => $request->productId,
                    'auction_id' => $request->auctionId,
                    'weight' => $request->weight,
                    'size' => $request->size,
                    'rank' => $request->rank,
                    'start_price' => $request->start_price,
                    'reserve_price' => $request->reserve_price,
                    'packing_cost' => $request->packing_cost,
                ]
             );
             $auction_products = AuctionProduct::where('id',$request->auction_product_id)
             ->with('products')
             ->first();
        }
        else
        {
            $auctionproduct = AuctionProduct::create(
                [
                    'product_id' => $request->productId,
                    'auction_id' => $request->auctionId,
                    'weight' => $request->weight,
                    'size' => $request->size,
                    'rank' => $request->rank,
                    'start_price' => $request->start_price,
                    'reserve_price' => $request->reserve_price,
                    'packing_cost' => $request->packing_cost,
                ]
             );
             $auction_products = AuctionProduct::where('id',$auctionproduct->id)
             ->with('products')
             ->first();
        }


         return response()->json($auction_products);
    }
    public function getAuctionProduct(Request $request)
    {
        $auction_products = AuctionProduct::where('id',$request->auctioProductId)
                        ->with('products')
                        ->first();
         return response()->json($auction_products);
    }
    public function deleteAuctionProduct(Request $request)
    {
        $auction_products = AuctionProduct::where('id',$request->auctioProductId)->delete();
        //  $data = $auction_products->delete();
return response()->json($auction_products);
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
        $request->validate([
            'title' => 'required||max:255',
            'startDatetime' => 'required',
        ]);
        $auction = new Auction();
        $auction->title = $request->title;
        // $auction->lottitle = $request->lottitle;
        // $auction->lotnumber = $request->lotnumber;
        $auction->product_detail = $request->product_detail;
        // $auction->product_id = $request->product_id;
        // $auction->process_id = $request->process_id;
        // $auction->genetic_id = $request->genetic_id;
        $auction->startDate = $request->startDatetime;
        // $auction->startTime = $request->startTime;
        // $auction->endDate = $request->endDate;
        // $auction->endTime = $request->endTime;
        // $auction->weight = $request->weight;
        // $auction->size = $request->size;
        // $auction->start_bid_price =12;
        // $auction->reserved_bid_price = $request->reserved_bid_price;
        // $auction->increment_bid_price = 12;
        // $auction->farm = $request->farm;
        // $auction->score = $request->score;
        // $auction->rank = $request->rank;
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


        return redirect('/auction/index')->with('success','Auction saved successfully.');
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
            'title'      => 'required',
            'startDatetime'  => 'required',
            // 'startTime'  => 'required',
        ]);

        $auction = Auction::find($request->id);
        $auction->title = $request->title;
        // $auction->lottitle = $request->lottitle;
        // $auction->lotnumber = $request->lotnumber;
        $auction->product_detail = $request->product_detail;
        // $auction->product_id = $request->product_id;
        // $auction->process_id = $request->process_id;
        // $auction->genetic_id = $request->genetic_id;
        $auction->startDate = $request->startDatetime;
        // $auction->startTime = $request->startTime;
        // $auction->endDate = $request->endDate;
        // $auction->endTime = $request->endTime;
        // $auction->weight = $request->weight;
        // $auction->size = $request->size;
        // $auction->farm = $request->farm;
        // $auction->start_bid_price = $request->start_bid_price;
        // $auction->reserved_bid_price = $request->reserved_bid_price;
        // $auction->increment_bid_price = $request->increment_bid_price;
        // $auction->score = $request->score;
        // $auction->rank = $request->rank;
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

        return redirect('/auction/index')->with('success','Auction updated successfully.');
    }
    public function delete(Request $request, $id)
    {
        $jury = Auction::find(base64_decode($id));
        $jury->delete();
        return redirect('/auction/index')->with('msg', 'Auction Deleted Successfully');
    }
    public function auctionFrontend()
    {
        $user               =   Auth::user()->id;
        $auction            =   Auction::first();
        $auctionProducts    =   AuctionProduct::with('products')->get();
        $agreement          =   AcceptAgreement::where('user_id',$user)->first();

        return view('customer.dashboard.upcomingauction',compact('auctionProducts','auction','agreement'));
    }
    public function singleBidData(Request $request)
    {
        $checkSingleBid                     =   SingleBid::where('auction_product_id',$request->id)->first();
        if(!isset($checkSingleBid,$checkSingleBid->bid_amount))
        {
            $auctionPData                   =   AuctionProduct::where('id',$request->id)->first();
            $auctionProductPrice            =   $auctionPData->start_price;
            $bidLimit                       =   Bidlimit::where('min','<',$auctionProductPrice)->orderBy('min','desc')->limit(1)->get();
            $bidIncrement                   =   $bidLimit[0]->increment;
            $newbidPrice                    =   $bidIncrement + $auctionProductPrice;
            $singleBid                      =   new SingleBid();
            $singleBid->bid_amount          =   $newbidPrice;
            $singleBid->auction_id          =   $auctionPData->auction_id;
            $singleBid->user_id             =   Auth::user()->id;
            $singleBid->auction_product_id  =   $request->id;
            $singleBid->save();
            $singleBidStartPrice            =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $bidLimit                       =   Bidlimit::where('min','<',$singleBidStartPrice)->orderBy('min','desc')->limit(1)->get();
            $bidIncrementNew                =   $bidLimit[0]->increment;
            $singleBid->bidIncrement        =   $bidIncrementNew;
            $userPaddleNum                  =   Auth::user()->paddle_number;
            $singleBid->user_paddleNo       =   $userPaddleNum;
            return response()->json($singleBid);
        }
        else
        {
            $singleBidStartPrice                =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $auctionPStartPrice                 =   AuctionProduct::where('id',$request->id)->first();
            $bidLimit                           =   Bidlimit::where('min','<',$singleBidStartPrice)->orderBy('min','desc')->limit(1)->get();
            $bidIncrement                       =   $bidLimit[0]->increment;
            $singleBidData                      =   new SingleBid();
            $singleBidData->bid_amount          =   $auctionPStartPrice->start_price;
            $singleBidData->auction_id          =   $auctionPStartPrice->auction_id;
            $singleBidData->user_id             =   Auth::user()->id;
            $singleBidData->auction_product_id  =   $request->id;
            $newbidPrice                        =   $bidIncrement + $singleBidStartPrice;
            $singleBidData->bid_amount          =   $newbidPrice;
            $singleBidData->save();
            $autoBidsData                       =   AutoBid::where('auction_product_id',$request->id)->get();
            foreach($autoBidsData as $autoBids)
            {
                $singleBidStartPrice          =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
                $bidLimit                     =   Bidlimit::where('min','<',$singleBidStartPrice)->orderBy('min','desc')->limit(1)->get();
                $bidIncrement                 =   $bidLimit[0]->increment;
                $autoBid                      =   new SingleBid();
                $autoBid->auction_id          =   $autoBids->auction_id;
                $autoBid->user_id             =   $autoBids->user_id;
                $autoBid->auction_product_id  =   $request->id;
                $newbidPrice                  =   $bidIncrement + $singleBidStartPrice;
                $autoBid->bid_amount          =   $newbidPrice;
                $autoBid->save();
            }

            $singleBidPricelatest            =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $singleBidData->bid_amount       =  $singleBidPricelatest;
            // $bidAmoutLatest                     =   $singleBidPricelatest->bid_amount;
            $bidLimit                       =   Bidlimit::where('min','<',$singleBidPricelatest)->orderBy('min','desc')->limit(1)->get();
            $bidIncrementLatest              =   $bidLimit[0]->increment;
            $latestBidIncrement             =   $bidIncrementLatest + $singleBidPricelatest;
            $singleBidData->bidIncrement    =   $latestBidIncrement;
            // $userPaddleNum                  =   User::where('id',$singleBidPricelatest->user_id)->first()->paddle_number;
            //  dd( $userPaddleNum );
            // $singleBidData->bidIncrement        =   $bidIncrement;
            // $singleBidData->user_paddleNo       =   $userPaddleNum;
            return response()->json($singleBidData);
        }




    }
    public function autoBidData(Request $request)
    {
            $autoBidData                      =   new AutoBid();
            $autoBidData->auction_id          =   $request->auctionid;
            $autoBidData->user_id             =   Auth::user()->id;
            $autoBidData->auction_product_id  =   $request->id;
            $autoBidData->bid_amount          =   $request->autobidamount;
            $autoBidData->save();
            return response()->json($autoBidData);
    }

}
