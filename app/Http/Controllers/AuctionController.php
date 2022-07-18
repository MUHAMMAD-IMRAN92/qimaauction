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
use App\Models\WinningCofees;
use App\Models\Newsletter;
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

    public function auctionProducts($id)
    {

        $auctionId = base64_decode($id);
       $auction_products = AuctionProduct::where('auction_id',$auctionId)
                       ->with('products')
                       ->get();
        $products = Product::with('region','village','governorate','reviews')->get();
      return view('admin.auction.auction_products',compact('auction_products','products','auctionId'));
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
     public function getUser(Request $request)
     {
        $user = User::where('id',$request->userId)
                        ->first();
         return response()->json($user);
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
        $auction->product_detail = $request->product_detail;
        $auction->startDate = $request->startDatetime;
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
        $user                   =   Auth::user()->id;
        $auction                =   Auction::first();
        if($auction->auctionStatus() == 'ended'){
            $auction->is_hidden = 1;
            $auction->save(); 
        }
        $auctionProducts        =   AuctionProduct::with('products','singleBids')->get();
        $singleBids             =   AuctionProduct::doesnthave('singleBids')->get();
        $agreement              =   AcceptAgreement::where('user_id',$user)->first();
        return view('customer.auction_pages.auction_home3',compact('auctionProducts','auction','agreement','singleBids'));
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

            // if autobid
            $autoBidsData                       =   AutoBid::where('auction_product_id',$request->id)->where('is_active','1')->first();
            // foreach($autoBidsData as $autoBids)
            // {
                if(isset($autoBidsData))
                {
                $singleBidStartPrice          =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
                $bidLimit                     =   Bidlimit::where('min','<',$singleBidStartPrice)->orderBy('min','desc')->limit(1)->get();
                $bidIncrement                 =   $bidLimit[0]->increment;
                $autoBid                      =   new SingleBid();
                $autoBid->auction_id          =   $autoBidsData->auction_id;
                $autoBid->user_id             =   $autoBidsData->user_id;
                $autoBid->auction_product_id  =   $request->id;
                $newbidPrice                  =   $bidIncrement + $singleBidStartPrice;
                if($newbidPrice >= $autoBidsData->bid_amount)
                {
                    $currentAutoBid             =   AutoBid::where('auction_product_id',$request->id)->where('user_id',$autoBidsData->user_id)->update([
                        'is_active'=>'0'
                    ]);
                    $latestAutoBid                   =   AutoBid::where('auction_product_id',$request->id)->where('user_id',$autoBidsData->user_id)->orderBy('created_at','desc')->first();
                    $isActive                        =   $latestAutoBid->is_active;
                    $singleBid->outAutobid       =   $isActive;
                    $singleBid->autoBidUser      =   $autoBidsData->user_id;
                }
                else
                {
                    $autoBid->bid_amount          =   $newbidPrice;
                    $autoBid->save();
                }
            }

            $singleBid->bid_amountNew       =   $newbidPrice;
            $singleBidStartPrice            =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first();
            $bidAmount                      =   $singleBidStartPrice->bid_amount;
            $bidLimit                       =   Bidlimit::where('min','<',$bidAmount)->orderBy('min','desc')->limit(1)->get();
            $bidIncrementNew                =   $bidLimit[0]->increment;
            $singleBid->bidIncrement        =   $bidIncrementNew;
            $userPaddleNum                  =   User::where('id',$singleBidStartPrice->user_id)->first()->paddle_number;
            // $singleBid->user_paddleNo       =   $userPaddleNum;
            $userPaddleNum                  =   User::where('id',$singleBidStartPrice->user_id)->first()->paddle_number;
            $singleBid->userPaddleNo        =    $userPaddleNum;

            // $singleBidMaxpriceUser          =   SingleBid::where('auction_product_id',$request->id)->where('user_id',Auth::user()->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $auctionProduct                 =   AuctionProduct::where('id',$request->id)->first()->weight;
            $liabilty                       =   $bidAmount * $auctionProduct;
            $singleBid->liability           =   $liabilty;
            $singleBid->bidderMaxAmount     =   $bidAmount;
            $inc                            =   $bidAmount + $bidIncrementNew;
            $totalLiabilty                  =   $inc * $auctionProduct;
            $singleBid->liablityInc         =   $totalLiabilty;
            $singleBid->liabiltyUser        =   $singleBidStartPrice->user_id;
            $singleBids                     =   AuctionProduct::doesnthave('singleBids')->get();
            $isEmpty                        =   sizeof($singleBids);
            $singleBid->timerCheck          =   $isEmpty;
            if($isEmpty==0){
                date('Y-M-d H:i:s',strtotime('+3 minutes'));
            }
            $userBid                        =   SingleBid::where('auction_product_id',$request->id)->where('user_id',Auth::user()->id)->orderBy('bid_amount','desc')->first();
            $userBidAmount                  =   $userBid->bid_amount;
            $singleBid->bidAmountUser       =   $userBid->user_id;
            $singleBid->userBidAmount       =   $userBidAmount;
            $singleBid->winningBidder       =   $singleBidStartPrice->user_id;
            $singleBid->checkStartTimer     =   "starttimer";
            //total liablity of user all winning bids
            // $data           =   SingleBid::select('auction_product_id as id')->groupBy('auction_product_id')->get()->map(function($data){
            // $v              =   SingleBid::where('auction_product_id',$data->id)->orderBy('bid_amount','desc')->first();
            // $v->productWeight  =   AuctionProduct::where('id',$data->id)->first()->weight;
            // return $v;
            // });
            // $userTotalliability =   $data->where('user_id',Auth::user()->id)->('bid_amount');
            // $userFinalLiability =   $userTotalliability*$data->productWeight;
            // dd($data);
            $latestSingleBid                    =   SingleBid::where('auction_product_id',$request->id)->orderBy('created_at','desc')->first();
            $singleBid->latestSingleBidUser     =   $latestSingleBid->user_id;
            return response()->json($singleBid);
        }
        else
        {
            $auctionPStartPrice                 =   AuctionProduct::where('id',$request->id)->first();
            $singleBidStartPrice                =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $bidLimit                           =   Bidlimit::where('min','<',$singleBidStartPrice)->orderBy('min','desc')->limit(1)->get();
            $bidIncrement                       =   $bidLimit[0]->increment;
            $singleBidData                      =   new SingleBid();
            // $singleBidData->bid_amount          =   $auctionPStartPrice->start_price;
            $singleBidData->auction_id          =   $auctionPStartPrice->auction_id;
            $singleBidData->user_id             =   Auth::user()->id;
            $singleBidData->auction_product_id  =   $request->id;
            $newbidPrice                        =   $bidIncrement + $singleBidStartPrice;
            $singleBidData->bid_amount          =   $newbidPrice;
            $singleBidData->save();
            $autoBidsData                       =   AutoBid::where('auction_product_id',$request->id)->where('is_active','1')->first();
            // foreach($autoBidsData as $autoBids)
            // {
                if(isset($autoBidsData))
                {
                $singleBidStartPrice          =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
                $bidLimit                     =   Bidlimit::where('min','<',$singleBidStartPrice)->orderBy('min','desc')->limit(1)->get();
                $bidIncrement                 =   $bidLimit[0]->increment;
                $autoBid                      =   new SingleBid();
                $autoBid->auction_id          =   $autoBidsData->auction_id;
                $autoBid->user_id             =   $autoBidsData->user_id;
                $autoBid->auction_product_id  =   $request->id;
                $newbidPrice                  =   $bidIncrement + $singleBidStartPrice;
                if($newbidPrice >= $autoBidsData->bid_amount)
                {
                    $currentAutoBid             =   AutoBid::where('auction_product_id',$request->id)->where('user_id',$autoBidsData->user_id)->update([
                        'is_active'=>'0'
                    ]);
                    $latestAutoBid                   =   AutoBid::where('auction_product_id',$request->id)->where('user_id',$autoBidsData->user_id)->orderBy('created_at','desc')->first();
                    $isActive                        =   $latestAutoBid->is_active;
                    $singleBidData->outAutobid       =   $isActive;
                    $singleBidData->autoBidUser      =   $autoBidsData->user_id;
                }
                else
                {
                    $autoBid->bid_amount          =   $newbidPrice;
                    $autoBid->save();
                }
            }
            // }
            $singleBidPricelatest               =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first();
            // dd($singleBidPricelatest);
            $bidAmountL                         =   $singleBidPricelatest->bid_amount;
            $bidLimit                           =   Bidlimit::where('min','<',$bidAmountL)->orderBy('min','desc')->limit(1)->get();
            // dd($bidAmountL);
            $bidIncrementLatest                 =   $bidLimit[0]->increment;
            $singleBidData->bidIncrement        =   $bidIncrementLatest;
            $singleBidData->bid_amountNew       =   $bidAmountL;
            $autoBidmax                         =   AutoBid::where('auction_product_id',$request->id)->where('is_active','1')->orderBy('bid_amount','desc')->first();
            if(isset($autoBidmax))
            {
                $autoBidmaxAmount                   =  $autoBidmax->bid_amount;
                $singleBidData->autoBidmaxData      =   $autoBidmaxAmount;
            }
            $userPaddleNum                      =   User::where('id',$singleBidPricelatest->user_id)->first()->paddle_number;
            $singleBidData->userPaddleNo        =    $userPaddleNum;

            // $singleBidMaxpriceUser              =   SingleBid::where('auction_product_id',$request->id)->where('user_id',Auth::user()->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $auctionProduct                     =   AuctionProduct::where('id',$request->id)->first()->weight;
            $liabiltyNew                        =   $bidAmountL * $auctionProduct;
            $singleBidData->liability           =   $liabiltyNew;
            $inc                                =   $bidAmountL + $bidIncrementLatest;
            $totalLiabilty                      =   $inc * $auctionProduct;
            // $singleBidData->bidderMaxAmount  =   $bidIncrementLatest;
            $singleBidData->liablityInc         =   $totalLiabilty;
            $singleBidData->liabiltyUser        =   $singleBidPricelatest->user_id;
            $singleBids                         =   AuctionProduct::doesnthave('singleBids')->get();
            $isEmpty                            =   sizeof($singleBids);
            $singleBidData->timerCheck          =   $isEmpty;
            $userBid                            =   SingleBid::where('auction_product_id',$request->id)->where('user_id',Auth::user()->id)->orderBy('bid_amount','desc')->first();
            $userBidAmount                      =   $userBid->bid_amount;
            $singleBidData->bidAmountUser       =   $userBid->user_id;
            $singleBidData->userBidAmount       =   $userBidAmount;
            $singleBidData->winningBidder       =   $singleBidPricelatest->user_id;
            $singleBidData->checkStartTimer     =   "starttimer";
            $latestSingleBid                    =   SingleBid::where('auction_product_id',$request->id)->orderBy('created_at','desc')->first();
            $singleBidData->latestSingleBidUser =   $latestSingleBid->user_id;
            return response()->json($singleBidData);
        }
    }
    public function autoBidData(Request $request)
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

            $singleBid->bid_amountNew       =   $newbidPrice;
            $singleBidStartPrice            =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first();
            $bidAmount                      =   $singleBidStartPrice->bid_amount;
            $bidLimit                       =   Bidlimit::where('min','<',$bidAmount)->orderBy('min','desc')->limit(1)->get();
            $bidIncrementNew                =   $bidLimit[0]->increment;
            $singleBid->bidIncrement        =   $bidIncrementNew;
            $userPaddleNum                  =   User::where('id',$singleBidStartPrice->user_id)->first()->paddle_number;
            // $singleBid->user_paddleNo       =   $userPaddleNum;
            $userPaddleNum                  =   User::where('id',$singleBidStartPrice->user_id)->first()->paddle_number;
            $singleBid->userPaddleNo        =    $userPaddleNum;

            // $singleBidMaxpriceUser          =   SingleBid::where('auction_product_id',$request->id)->where('user_id',Auth::user()->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $auctionProduct                 =   AuctionProduct::where('id',$request->id)->first()->weight;
            $totalLiabilty                  =   $bidAmount * $auctionProduct;
            $singleBid->bidderMaxAmount     =   $bidAmount;
            $inc                            =   $bidAmount + $bidIncrementNew;
            $totalLiabilty                  =   $inc * $auctionProduct;
            $singleBid->liablity            =   $totalLiabilty;
        }
            $autoBidData                      =   new AutoBid();
            $autoBidData->auction_id          =   $request->auctionid;
            $autoBidData->user_id             =   Auth::user()->id;
            $autoBidData->auction_product_id  =   $request->id;
            $autoBidData->bid_amount          =   $request->autobidamount;
            $autoBidData->save();
            $autobids                         =   AutoBid::where('auction_product_id',$request->id)->where('is_active','1')->orderBy('created_at','desc')->first();
            $singleBidPricelatest             =   SingleBid::where('auction_product_id',$request->id)->where('user_id',$autobids->user_id)->orderBy('bid_amount','desc')->first();
            if(!isset($singleBidPricelatest))
            {
                $singleBidStartPrice            =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first()->bid_amount;
                $bidLimit                       =   Bidlimit::where('min','<',$singleBidStartPrice)->orderBy('min','desc')->limit(1)->get();
                $bidIncrement                   =   $bidLimit[0]->increment;
                $singleBid                      =   new SingleBid();
                $singleBid->auction_id          =   $autobids->auction_id;
                $singleBid->user_id             =   $autobids->user_id;
                $singleBid->auction_product_id  =   $request->id;
                $newbidPrice                    =   $bidIncrement + $singleBidStartPrice;
                $singleBid->bid_amount          =   $newbidPrice;
                $singleBid->save();
            }
            $singleBidPricelatest               =   SingleBid::where('auction_product_id',$request->id)->orderBy('bid_amount','desc')->first();
            // dd($singleBidPricelatest);
            $bidAmountL                         =   $singleBidPricelatest->bid_amount;
            $bidLimit                           =   Bidlimit::where('min','<',$bidAmountL)->orderBy('min','desc')->limit(1)->get();
            $bidIncrementLatest                 =   $bidLimit[0]->increment;
            $autoBidData->bidIncrement        =   $bidIncrementLatest;
            $autoBidData->bid_amountNew       =   $bidAmountL;
            $userPaddleNum                      =   User::where('id',$singleBidPricelatest->user_id)->first()->paddle_number;
            $autoBidData->userPaddleNo        =    $userPaddleNum;

            // $singleBidMaxpriceUser              =   SingleBid::where('auction_product_id',$request->id)->where('user_id',Auth::user()->id)->orderBy('bid_amount','desc')->first()->bid_amount;
            $auctionProduct                     =   AuctionProduct::where('id',$request->id)->first()->weight;
            $inc                                =   $bidAmountL + $bidIncrementLatest;
            $totalLiabilty                      =   $inc * $auctionProduct;
            // $singleBidData->bidderMaxAmount     =   $bidIncrementLatest;
            $autoBidData->liablity            =   $totalLiabilty;
            return response()->json($autoBidData);
    }

    public function removeAutoBid(Request $request)
    {
        $userID                     =   Auth::user()->id;
        $currentAutoBid             =   AutoBid::where('auction_product_id',$request->id)->where('user_id',$userID)->update([
            'is_active'=>'0'
        ]);
        $latestAutoBid                  =   AutoBid::where('auction_product_id',$request->id)->where('user_id',$userID)->orderBy('updated_at','desc')->first();
        $isActive                       =   $latestAutoBid->is_active;
        $latestAutoBid->outAutobid      =   $isActive;
        return response()->json($latestAutoBid);
    }
    public function autoBids()
    {
               $autobids = AutoBid::all();
               return view('admin.auction.autobids',compact('autobids'));
    }
    public function updateAutoBids($id)
    {
        $autobids = AutoBid::where('id',$id)->first();
        return view('admin.auction.updateAutoBid',compact('autobids'));
    }
    public function prductBiddingDetail($id)
    {
            $auctionId = base64_decode($id);
            $auction_products = AuctionProduct::with('products')->get();
           $products = Product::with('region','village','governorate','reviews')->get();
         return view('admin.auction.productBiddingDetail',compact('auction_products','products','auctionId'));
    }

    public function prductBiddingDashboard()
    {
          $auction_products = AuctionProduct::with('products')->get();
           $products = Product::with('region','village','governorate','reviews')->get();
         return view('admin.auction.productBiddingDashboard',compact('auction_products','products'));
    }
    public function updateSaveAutoBids(Request $request)
    {
        AutoBid::where('id',$request->autobidId)->update([
            'bid_amount' => $request->autobidamount,
        ]);
     return response()->json();
    }

    public function auctionHome()
    {
        // $user                   =   Auth::user()->id;
        $auction                =   Auction::first();
        $auctionProducts        =   AuctionProduct::with('products')->get();
        // dd($auctionProducts);
        // $agreement              =   AcceptAgreement::where('user_id',$user)->first();
        return view('customer.auction_pages.auction_home',compact('auctionProducts','auction'));
    }
    public function auctionHomeLoggedIn()
    {
        // $user                   =   Auth::user()->id;
        $auction                =   Auction::first();
        $auctionProducts        =   AuctionProduct::with('products')->get();
        // dd($auctionProducts);
        // $agreement              =   AcceptAgreement::where('user_id',$user)->first();
        return view('customer.auction_pages.auction_home2',compact('auctionProducts','auction'));
    }
    public function winningCoffee()
    {
        $winningCoffees =   WinningCofees::all();
        return view('customer.dashboard.index-new',compact('winningCoffees'));
    }
    public function winningCoffeeProducts($id)
    {
        $winningCoffeesData =   WinningCofees::where('code',$id)->with('images')->first();
        return view('customer.dashboard.products-landing',compact('winningCoffeesData'));
    }

    public function newslettersignup(Request $request){
        $news = new Newsletter();
        $news->name = $request->name;
        $news->email = $request->email;
        $news->save();
        return redirect('/');
    }
}
