<?php

namespace App\Http\Controllers;

use App\Models\AcceptAgreement;
use App\Models\Auction;
use App\Models\AuctionProduct;
use App\Models\AuctionWinners;
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
use App\Models\Offers;
use App\Models\ShipmentTrackingStatus;
use App\Models\UserOffers;
use App\Models\UserScore;
use App\Models\WinningCofeeImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class AuctionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.auction.index');
    }

    public function auctionProducts($id) {

        $auctionId = base64_decode($id);
        $auction_products = AuctionProduct::where('auction_id', $auctionId)
                ->with('products')
                ->get();
        $products = Product::with('region', 'village', 'governorate', 'reviews')->orderBy('product_title', 'asc')->get();
        return view('admin.auction.auction_products', compact('auction_products', 'products', 'auctionId'));
    }

    public function saveAuctionProduct(Request $request) {
        if (isset($request->auction_product_id)) {
            $auctionproduct = AuctionProduct::where('id', $request->auction_product_id)->update(
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
            $auction_products = AuctionProduct::where('id', $request->auction_product_id)
                    ->with('products')
                    ->first();
        } else {
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
            $auction_products = AuctionProduct::where('id', $auctionproduct->id)
                    ->with('products')
                    ->first();
        }


        return response()->json($auction_products);
    }

    public function getAuctionProduct(Request $request) {
        $auction_products = AuctionProduct::where('id', $request->auctioProductId)
                ->with('products')
                ->first();
        return response()->json($auction_products);
    }

    public function getUser(Request $request) {
        $user = User::where('id', $request->userId)
                ->first();
        return response()->json($user);
    }

    public function deleteAuctionProduct(Request $request) {
        $auction_products = AuctionProduct::where('id', $request->auctioProductId)->delete();
        return response()->json($auction_products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $products = Product::all();
        $genetics = Genetic::all();
        $process = Process::all();
        return view('admin.auction.create', compact('products', 'genetics', 'process'));
    }

    public function save(Request $request) {
        $request->validate([
            'title' => 'required||max:255',
            'startDatetime' => 'required',
            'is_active' => 'required',
        ]);
        $auction = new Auction();
        $auction->title = $request->title;
        $auction->product_detail = $request->product_detail;
        $auction->startDate = $request->startDatetime;
        $auction->is_active = $request->is_active;
        if($request->is_active == 1)
        {
            Auction::where('id','!=', $request->id)->update([
                'is_active' => '0'
            ]);
        }
        $auction->save();
        if ($request->image) {
            foreach ($request->image as $img) {
                $fileName = $img->getClientOriginalName();
                $img->storeAs(
                        'auction', $fileName, 'public'
                );
                $productImage = new Image();
                $productImage->auction_id = $auction->id;
                $productImage->image_name = $fileName;
                $productImage->save();
            }
        }
        return redirect('/auction/index')->with('success', 'Auction saved successfully.');
    }

    public function allauction(Request $request) {
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
        $juries = $juries->skip((int) $start)->take((int) $length)->orderBy('id', 'desc')->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $jury_count,
            'recordsFiltered' => $jury_count,
            'data' => $juries,
        );
        return response()->json($data);
    }

    public function edit(Request $request, $id) {
        $auction = Auction::find(base64_decode($id));
        $auctionimages = Auction::where('id', base64_decode($id))->with('images')->first();
        $products = Product::all();
        $genetics = Genetic::all();
        $process = Process::all();
        return view('admin.auction.edit', [
            'genetics' => $genetics, 'process' => $process, 'auction' => $auction, 'auctionimages' => $auctionimages, 'products' => $products,
        ]);
    }

    public function deleteImage($id) {
        Image::where('id', $id)->delete();

        return back()->with('msg', 'Image Has Deleted');
    }

    public function update(Request $request) {
        $request->validate([
            'title' => 'required',
            'startDatetime' => 'required',
            'is_active' => 'required',
        ]);
        $auction = Auction::find($request->id);
        $auction->title = $request->title;
        $auction->product_detail = $request->product_detail;
        $auction->startDate = $request->startDatetime;
        $auction->is_active = $request->is_active;
        if($request->is_active == 1)
        {
            Auction::where('id','!=', $request->id)->update([
                'is_active' => '0'
            ]);
        }
        $auction->save();
        if ($request->image) {
            foreach ($request->image as $img) {
                $fileName = $img->getClientOriginalName();
                $img->storeAs(
                        'auction', $fileName, 'public'
                );
                $productImage = new Image();
                $productImage->auction_id = $auction->id;
                $productImage->image_name = $fileName;
                $productImage->save();
            }
        }

        return redirect('/auction/index')->with('success', 'Auction updated successfully.');
    }

    public function delete(Request $request, $id) {
        $jury = Auction::find(base64_decode($id));
        $jury->delete();
        return redirect('/auction/index')->with('msg', 'Auction Deleted Successfully');
    }

    public function auctionFrontend(Request $request) {
        $user = Auth::user()->id;
        $auction = Auction::where('is_active','1')->first();
        if ($auction->is_hidden == 1) {
            return redirect('auction-winners');
        }
        if ($request->ended == 1) {
           $auction->is_hidden = 1;
            $auction->endDate = date('Y-m-d H:i:s');

            $auction->save();
            return redirect('auction-winners');
        }
        $auctionProducts = AuctionProduct::where('auction_id',$auction->id)->with('products', 'singleBids', 'winningImages')->get();
        $singleBids = AuctionProduct::doesnthave('singleBids')->get();
        $agreement = AcceptAgreement::where('user_id', $user)->first();
        $results = $auctionProducts->map(function($e) {

            $e->openCheck = SingleBid::where('auction_product_id', $e->id)->first();
            $e->userscore = UserScore::where('auction_product_id', $e->id)->where('user_id', Auth::user()->id)->first();

            $e->openCheck = SingleBid::where('auction_product_id', $e->id)->first();
            $e->openCheckautobid = AutoBid::where('auction_product_id', $e->id)->first();
            $e->singleBidPricelatest = SingleBid::where('auction_product_id', $e->id)
                    ->orderBy('bid_amount', 'desc')
                    ->first();
            $e->userBid = SingleBid::where('auction_product_id', $e->id)
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('bid_amount', 'desc')
                    ->first();
            $e->latestSingleBid = SingleBid::where('auction_product_id', $e->id)
                    ->orderBy('id', 'desc')
                    ->first();
            $e->offerComplete = Offers::where('auction_product_id',$e->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
            $e->groupAutobid = AutoBid::where('auction_product_id',$e->id)->where('is_active','1')->where('is_group','1')->orderBy('bid_amount', 'desc')->first();

            return $e;
        });

        return view('customer.auction_pages.auction_home3', compact('auctionProducts', 'auction', 'agreement', 'singleBids'));
    }

    public function singleBidData(Request $request) {
        $checkSingleBid = SingleBid::where('auction_product_id', $request->id)->first();
        $currentDate = date('Y-m-d H:i:s');
        $loser = '';
        $convertedTime = date('Y-m-d H:i:s', strtotime('+3 minutes', strtotime($currentDate)));
        $auction = Auction::where('is_active','1')->first();
        $auction->endTime = $convertedTime;
        $auction->save();
        $current_id = Auth::user()->id;
        if (!isset($checkSingleBid, $checkSingleBid->bid_amount)) {
            $auctionPData = AuctionProduct::where('id', $request->id)->first();
            $auctionProductPrice = $auctionPData->start_price;
            $bidLimit = Bidlimit::where('min', '<', $auctionProductPrice)->orderBy('min', 'desc')->limit(1)->get();
            $bidIncrement = $bidLimit[0]->increment;
            $newbidPrice = $bidIncrement + $auctionProductPrice;
            $singleBid = new SingleBid();
            $singleBid->bid_amount = $newbidPrice;
            $singleBid->auction_id = $auctionPData->auction_id;
            $singleBid->user_id = Auth::user()->id;
            $singleBid->auction_product_id = $request->id;
            $singleBid->save();

            // if autobid
            $autoBidsData = AutoBid::where('auction_product_id', $request->id)->where('is_active', '1')->first();

            if (isset($autoBidsData)) {
                $singleBidStartPrice = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first()->bid_amount;
                $bidLimit = Bidlimit::where('min', '<', $singleBidStartPrice)->orderBy('min', 'desc')->limit(1)->get();
                $bidIncrement = $bidLimit[0]->increment;
                $autoBid = new SingleBid();
                $autoBid->auction_id = $autoBidsData->auction_id;
                $autoBid->user_id = $autoBidsData->user_id;
                $autoBid->auction_product_id = $request->id;
                $newbidPrice = $bidIncrement + $singleBidStartPrice;
                if ($newbidPrice <= $autoBidsData->bid_amount) {
                    $autoBid->bid_amount = $newbidPrice;
                    $singleBid->outAutobid = '1';
                    $autoBid->save();
                } else {
                    AutoBid::where('auction_product_id', $request->id)->where('user_id', $autoBidsData->user_id)->update([
                        'is_active' => '0'
                    ]);
                    $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('user_id', $autoBidsData->user_id)->orderBy('created_at', 'desc')->first();
                    $isActive = $latestAutoBid->is_active;
                    $singleBid->outAutobid = $isActive;
                    $autoBidLatest = AutoBid::where('auction_product_id', $request->id)->where('is_group','1')->orderBy('bid_amount', 'desc')->first();
                    if(isset($autoBidLatest))
                    {
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
                        $i=0;
                        $offerUser=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        // $singleBid->isgroup='1';
                        $singleBid->groupusers = $offerUser;
                    }
                    else
                    {
                        $singleBid->autoBidUser = $autoBidsData->user_id;
                    }
                }
            } else {
                $singleBid->outAutobid = '1';
            }

            $singleBid->bid_amountNew = $newbidPrice;
            $singleBidStartPrice = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
            $bidAmount = $singleBidStartPrice->bid_amount;
            $bidLimit = Bidlimit::where('min', '<', $bidAmount)->orderBy('min', 'desc')->limit(1)->get();
            $bidIncrementNew = $bidLimit[0]->increment;
            $singleBid->bidIncrement = $bidIncrementNew;

            $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('is_active','1')->orderBy('bid_amount', 'desc')->first();
            if(isset($latestAutoBid) && $latestAutoBid->is_group == 1)
            {
                $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
                $offerpaddleNumber  = $offerComplete->paddle_number;
                $singleBid->userPaddleNo = $offerpaddleNumber;
            }
            else
            {
                $userPaddleNum = User::where('id', $singleBidStartPrice->user_id)->first()->paddle_number;
                $singleBid->userPaddleNo = $userPaddleNum;
            }

            $auctionProduct = AuctionProduct::where('id', $request->id)->first()->weight;
            $liabilty = $bidAmount * $auctionProduct;
            $singleBid->liability = $liabilty;
            $singleBid->bidderMaxAmount = $bidAmount;
            $inc = $bidAmount + $bidIncrementNew;
            $totalLiabilty = $inc * $auctionProduct;
            $singleBid->liablityInc = $totalLiabilty;
            $singleBid->liabiltyUser = $singleBidStartPrice->user_id;
            $singleBids = AuctionProduct::where('auction_id',$auction->id)->doesnthave('singleBids')->get();
            $isEmpty = sizeof($singleBids);
            $singleBid->timerCheck = $isEmpty;
            if ($isEmpty == 0 && $auction->startTime == '') {
                $updateEndTime = Auction::where('id', $auctionPData->auction_id)->update([
                    'startTime' => $currentDate]);
            }
            $userBid = SingleBid::where('auction_product_id', $request->id)->where('user_id', Auth::user()->id)->orderBy('bid_amount', 'desc')->first();
            $userBidAmount = $userBid->bid_amount;
            $singleBid->bidAmountUser = $userBid->user_id;
            $singleBid->userBidAmount = $userBidAmount;
            $singleBid->winningBidder = $singleBidStartPrice->user_id;
            $singleBid->checkStartTimer = "starttimer";
            $latestSingleBid = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();

            $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('is_active','1')->orderBy('bid_amount', 'desc')->first();
            if(isset($latestAutoBid) && $latestAutoBid->is_group == 1)
            {
                $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
                $i=0;
                $offerUser=[];
                foreach($offerUsersData->allOfferUsers as $offerUsers)
                {
                    $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                    $offerUser[$i]['weight'] = $offerUsers->weight;
                    $i++;
                }
                $singleBid->isgroup='1';
                $singleBid->latestSingleBidUser = $offerUser;
            }
            else
            {
                $singleBid->isgroup='0';
                $singleBid->latestSingleBidUser = $latestSingleBid->user_id;
            }
            $data = SingleBid::select('auction_product_id as id')->groupBy('auction_product_id')->get()->map(function($data) {
                $v = SingleBid::where('auction_product_id', $data->id)->where('user_id', auth()->user()->id)->orderBy('bid_amount', 'desc')->first();
                return $v;
            });
            $total = 0;
            foreach ($data as $amount) {
                if (isset($amount->auction_product_id)) {
                    $auctionProduct = AuctionProduct::where('id', $amount->auction_product_id)->first()->weight;
                    if (isset($auctionProduct)) {
                        $v = $amount->bid_amount * $auctionProduct;
                        $total += $v;
                    }
                }
            }
            $singleBid->finaltotalliability = $total;

            return response()->json($singleBid);
        } else {
            $autoBidsData = AutoBid::where('auction_product_id', $request->id)->where('is_active', '1')->first();
            $auctionPStartPrice = AuctionProduct::where('id', $request->id)->first();
            $singleBidStartPrice = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first()->bid_amount;
            $bidLimit = Bidlimit::where('min', '<', $singleBidStartPrice)->orderBy('min', 'desc')->limit(1)->get();
            $bidIncrement = $bidLimit[0]->increment;
            $singleBidData = new SingleBid();
            $singleBidData->auction_id = $auctionPStartPrice->auction_id;

            $singleBidData->auction_product_id = $request->id;
            $newbidPrice = $bidIncrement + $singleBidStartPrice;
            $singleBidData->bid_amount = $newbidPrice;
            if (isset($autoBidsData) && $newbidPrice == $autoBidsData->bid_amount) {
                $loser = $current_id;
                $singleBidData->user_id = $autoBidsData->user_id;
            } else {
                $singleBidData->user_id = Auth::user()->id;
            }
            $singleBidData->save();
            $autoBidsData = AutoBid::where('auction_product_id', $request->id)->where('is_active', '1')->first();

            if (isset($autoBidsData)) {
                $singleBidStartPrice = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first()->bid_amount;
                $bidLimit = Bidlimit::where('min', '<', $singleBidStartPrice)->orderBy('min', 'desc')->limit(1)->get();
                $bidIncrement = $bidLimit[0]->increment;
                $autoBid = new SingleBid();
                $autoBid->auction_id = $autoBidsData->auction_id;
                $autoBid->user_id = $autoBidsData->user_id;
                $autoBid->auction_product_id = $request->id;
                $newbidPrice = $bidIncrement + $singleBidStartPrice;
                if ($newbidPrice <= $autoBidsData->bid_amount) {
                    $autoBid->bid_amount = $newbidPrice;
                    $singleBidData->outAutobid = '1';
                    $autoBid->save();
                } else {
                    $currentAutoBid = AutoBid::where('auction_product_id', $request->id)->where('user_id', $autoBidsData->user_id)->update([
                        'is_active' => '0'
                    ]);
                    $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('user_id', $autoBidsData->user_id)->orderBy('bid_amount', 'desc')->first();
                    $isActive = $latestAutoBid->is_active;
                    $singleBidData->outAutobid = $isActive;
                    $autoBidLatest = AutoBid::where('auction_product_id', $request->id)->where('is_group','1')->orderBy('bid_amount', 'desc')->first();
                    if(isset($autoBidLatest))
                    {
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
                        $i=0;
                        $offerUser=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        // $singleBid->isgroup='1';
                        $singleBidData->groupusers = $offerUser;
                    }
                    else
                    {
                        $singleBidData->autoBidUser = $autoBidsData->user_id;
                    }
                }
            } else {
                $singleBidData->outAutobid = '1';
            }
            $singleBidPricelatest = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
            $bidAmountL = $singleBidPricelatest->bid_amount;
            $bidLimit = Bidlimit::where('min', '<', $bidAmountL)->orderBy('min', 'desc')->limit(1)->get();
            $bidIncrementLatest = $bidLimit[0]->increment;
            $singleBidData->bidIncrement = $bidIncrementLatest;
            $singleBidData->bid_amountNew = $bidAmountL;
            $autoBidmax = AutoBid::where('auction_product_id', $request->id)->where('is_active', '1')->orderBy('bid_amount', 'desc')->first();
            if (isset($autoBidmax)) {
                $autoBidmaxAmount = $autoBidmax->bid_amount;
                $singleBidData->autoBidmaxData = $autoBidmaxAmount;
            }

            $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('is_active','1')->orderBy('bid_amount', 'desc')->first();
            if(isset($latestAutoBid) && $latestAutoBid->is_group == 1)
            {
                $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
                $offerpaddleNumber  = $offerComplete->paddle_number;
                $singleBidData->userPaddleNo = $offerpaddleNumber;
            }
            else
            {
                $userPaddleNum = User::where('id', $singleBidPricelatest->user_id)->first()->paddle_number;
                $singleBidData->userPaddleNo = $userPaddleNum;
            }

            $data = SingleBid::select('auction_product_id as id')->groupBy('auction_product_id')->get()->map(function($data) {
                $v = SingleBid::where('auction_product_id', $data->id)->where('user_id', auth()->user()->id)->orderBy('bid_amount', 'desc')->first();
                return $v;
            });
            $total = 0;
            $auctionProduct = AuctionProduct::where('id', $request->id)->first()->weight;

            foreach ($data as $amount) {
                if (isset($amount->auction_product_id)) {
                    $auctionProduct_lib = AuctionProduct::where('id', $amount->auction_product_id)->first()->weight;
                    if (isset($auctionProduct_lib)) {
                        $v = $amount->bid_amount * $auctionProduct_lib;
                        $total += $v;
                    }
                }
            }
            $singleBidData->finaltotalliability = $total;
            $liabiltyNew = $bidAmountL * $auctionProduct;
            $singleBidData->liability = $liabiltyNew;
            $inc = $bidAmountL + $bidIncrementLatest;
            $totalLiabilty = $inc * $auctionProduct;
            $singleBidData->liablityInc = $totalLiabilty;
            $singleBidData->liabiltyUser = $singleBidPricelatest->user_id;
            $singleBids = AuctionProduct::where('auction_id',$auction->id)->doesnthave('singleBids')->get();
            $isEmpty = sizeof($singleBids);
            $singleBidData->timerCheck = $isEmpty;
            $auctionPData = AuctionProduct::where('id', $request->id)->first();
            if ($isEmpty == 0 && $auction->startTime == '') {
                $updateEndTime = Auction::where('id', $auctionPData->auction_id)->update([
                    'startTime' => $currentDate]);
            }
            $userBid = SingleBid::where('auction_product_id', $request->id)->where('user_id', Auth::user()->id)->orderBy('bid_amount', 'desc')->first();
            if (!$userBid && isset($autoBidsData) && $newbidPrice == $autoBidsData->bid_amount) {
                $userBid = SingleBid::where('auction_product_id', $request->id)->where('user_id', $autoBidsData->user_id)->orderBy('bid_amount', 'desc')->first();
            }
            $userBidAmount = $userBid->bid_amount;
            $singleBidData->bidAmountUser = $userBid->user_id;
            $singleBidData->userBidAmount = $userBidAmount;
            $singleBidData->winningBidder = $singleBidPricelatest->user_id;
            $singleBidData->checkStartTimer = "starttimer";
            $latestSingleBid = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
            if (!$loser) {
                $lose_user = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->skip(1)->first();
                if ($lose_user) {
                    $loser = $lose_user->user_id;
                }
            }
            $singleBidData->loser_user = $loser;
            if(isset($latestAutoBid) && $latestAutoBid->is_group == 1)
            {
                $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
                $i=0;
                $offerUser=[];
                foreach($offerUsersData->allOfferUsers as $offerUsers)
                {
                    $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                    $offerUser[$i]['weight'] = $offerUsers->weight;
                    $i++;
                }
                $singleBidData->isgroup='1';
                $singleBidData->latestSingleBidUser = $offerUser;
            }
            else
            {
                $singleBidData->isgroup='0';
                $singleBidData->latestSingleBidUser = $latestSingleBid->user_id;
            }
            return response()->json($singleBidData);
        }
    }

    public function autoBidData(Request $request) {
        $currentDate = date('Y-m-d H:i:s');
        $convertedTime = date('Y-m-d H:i:s', strtotime('+3 minutes', strtotime($currentDate)));
        $auction = Auction::where('is_active','1')->first();
        $auction->endTime = $convertedTime;
        $auction->save();
        $user = Auth::user()->id;
        $auctionProductsData = AuctionProduct::where('id', $request->id)->with(['singleBids', 'autoBidActive', 'latestBidPrice'])
                ->first();
        $winner = $user;
        $startprice = $auctionProductsData->start_price;
        if ($request->autobidamount <= $startprice) {

            return response()->json(['message' => 'Enter amount greater than product price']);
        }
        $singleBid = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
        if ($singleBid && $singleBid->user_id == $user) {
            $autoBidData = new AutoBid();
            $autoBidData->auction_id = $request->auctionid;
            $autoBidData->user_id = $user;
            $autoBidData->auction_product_id = $request->id;
            $autoBidData->is_active = '1';
            $autoBidData->bid_amount = $request->autobidamount;
            if($request->isgroup == 1)
            {
                $autoBidData->is_group = $request->isgroup;
            }
            $autoBidData->save();
            if($request->isgroup != 1)
            {
                return response()->json(['success' => 'Bid Added Successfully']);
            }
            $loser = '';
            $autoBidData->loser_user = $loser;
        }
        // $loser = '';
        // if ($singleBid && $request->isgroup == 1 ) {
        //     // echo 'helo2';
        //     $autoBidData = new AutoBid();
        //     $autoBidData->auction_id = $request->auctionid;
        //     $autoBidData->user_id = $user;
        //     $autoBidData->auction_product_id = $request->id;
        //     $autoBidData->is_active = '1';
        //     $autoBidData->bid_amount = $request->autobidamount;
        //     if($request->isgroup == 1)
        //     {
        //         $autoBidData->is_group = $request->isgroup;
        //     }
        //     $autoBidData->save();
        //     $autoBidData->loser_user = $loser;
        // }

        //If Already have another Autobid on this product
        if (isset($auctionProductsData->autoBidActive)) {

            if ($request->autobidamount == $auctionProductsData->autoBidActive->bid_amount) {

                $loser = $user;
                $autoBidData = new AutoBid();
                $autoBidData->auction_id = $request->auctionid;
                $autoBidData->user_id = $user;
                $autoBidData->auction_product_id = $request->id;
                $autoBidData->is_active = '0';
                $autoBidData->bid_amount = $request->autobidamount;
                if($request->isgroup == 1)
                {
                    $autoBidData->is_group = $request->isgroup;
                }
                $autoBidData->save();
                $other_id = $auctionProductsData->autoBidActive->user_id;
                $get_last_bid = $auctionProductsData->latestBidPriceAmount;
                $singleBidData = new SingleBid();
                $singleBidData->bid_amount = $request->autobidamount - .5;
                $singleBidData->auction_id = $request->auctionid;
                $singleBidData->user_id = $user;
                $singleBidData->auction_product_id = $request->id;
                $singleBidData->autobid_id = $auctionProductsData->autoBidActive->id;
                if($request->isgroup == 1)
                {
                    $singleBidData->is_group = $request->isgroup;
                }
                $singleBidData->save();

                $singleBidData = new SingleBid();
                $singleBidData->bid_amount = $request->autobidamount;
                $singleBidData->auction_id = $request->auctionid;
                $singleBidData->user_id = $other_id;
                $singleBidData->auction_product_id = $request->id;
                $singleBidData->autobid_id = $auctionProductsData->autoBidActive->id;
                if($request->isgroup == 1)
                {
                    $singleBidData->is_group = $request->isgroup;
                }
                $singleBidData->save();
                $autoBidData = $auctionProductsData->autoBidActive;
                $winner = $other_id;
                $autoBidData->loser_user = $loser;
                // $autoBidforcheck = AutoBid::where('auction_product_id', $request->id)->where('user_id', '!=', $user)->where('is_active', '1')->orderBy('bid_amount', 'desc')->first();
                    // dd($autoBidforcheck);
                    // if (isset($autoBidforcheck) && $autoBidforcheck->is_group == 1)
                    // {
                    //     $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
                    //     $offerpaddleNumber  = $offerComplete->paddle_number;
                    //     $autoBidData->groupPaddleNo = $offerpaddleNumber;
                    // }
                    // else
                    // {
                    //     $autoBidData->groupPaddleNo = null;
                    // }
                    if($request->isgroup == 1 && isset($auctionProductsData->autoBidActive) && $auctionProductsData->autoBidActive->is_group==0 && $request->autobidamount == $auctionProductsData->autoBidActive->bid_amount)
                    {
                        // $autoBidData->winneruser = null;
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('amount', 'asc')->first();
                        $i=0;
                        $offerUser=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        $autoBidData->groupUsers = $offerUser;
                        $loser = '';
                        $autoBidData->loser_user = $loser;
                        $userPaddleNum = User::where('id', $auctionProductsData->autoBidActive->user_id )->first()->paddle_number;
                        $autoBidData->userPaddleNo = $userPaddleNum;

                    }
                    elseif($request->isgroup == 1 && isset($auctionProductsData->autoBidActive) && $auctionProductsData->autoBidActive->is_group==1 && $request->autobidamount == $auctionProductsData->autoBidActive->bid_amount)
                    {

                        // losers
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('amount', 'asc')->first();
                        $i=0;
                        $offerUser=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        $autoBidData->groupUsers = $offerUser;
                        //winners
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
                        $i=0;
                        $offerWinner=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        $autoBidData->isgroup    = '1';
                        $autoBidData->winneruser = $offerWinner;
                        $loser = '';
                        $autoBidData->loser_user = $loser;
                        //paddlenumber
                        $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
                        $offerpaddleNumber  = $offerComplete->paddle_number;
                        $autoBidData->userPaddleNo = $offerpaddleNumber;

                    }
            } else {
                if ($request->autobidamount < $auctionProductsData->autoBidActive->bid_amount) {
                    $loser = $user;
                    $userID = null;
                    $bidLimit = Bidlimit::where('min', '<', $singleBid->bid_amount)->orderBy('min', 'desc')->first();
                    $singleBidData = new SingleBid();
                    $bidIncrement = $bidLimit->increment;
                    $singleBidData->bid_amount = $request->autobidamount;
                    $singleBidData->auction_id = $request->auctionid;
                    $request->auctionid;
                    $singleBidData->user_id = $user;
                    $singleBidData->auction_product_id = $request->id;
                    $singleBidData->autobid_id = $auctionProductsData->autoBidActive->id;
                    if($request->isgroup == 1)
                    {
                        $singleBidData->is_group = $request->isgroup;
                    }
                    $singleBidData->save();

                    $singleBidData = new SingleBid();
                    $singleBidData->bid_amount = $request->autobidamount + $bidIncrement;
                    $singleBidData->auction_id = $request->auctionid;
                    $singleBidData->user_id = $auctionProductsData->autoBidActive->user_id;
                    $singleBidData->auction_product_id = $request->id;
                    $singleBidData->autobid_id = $auctionProductsData->autoBidActive->id;
                    if($request->isgroup == 1)
                    {
                        $singleBidData->is_group = $request->isgroup;
                    }
                    $singleBidData->save();

                    $autoBidData = new AutoBid();
                    $autoBidData->auction_id = $request->auctionid;
                    $autoBidData->user_id = $user;
                    $autoBidData->auction_product_id = $request->id;
                    $autoBidData->is_active = '0';
                    $autoBidData->bid_amount = $request->autobidamount;
                    $autoBidData->save();
                    if($request->isgroup == 1)
                    {
                        $autoBidData->is_group = $request->isgroup;
                    }
                    if($request->isgroup == 1 && isset($auctionProductsData->autoBidActive) && $auctionProductsData->autoBidActive->is_group==0 && $request->autobidamount < $auctionProductsData->autoBidActive->bid_amount)
                    {
                        // $autoBidData->winneruser = null;
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('amount', 'asc')->first();
                        $i=0;
                        $offerUser=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        $autoBidData->groupUsers = $offerUser;
                        $loser = '';
                        $autoBidData->loser_user = $loser;
                        $userPaddleNum = User::where('id', $auctionProductsData->autoBidActive->user_id )->first()->paddle_number;
                        $autoBidData->userPaddleNo = $userPaddleNum;

                    }
                    elseif($request->isgroup == 1 && isset($auctionProductsData->autoBidActive) && $auctionProductsData->autoBidActive->is_group==1 && $request->autobidamount < $auctionProductsData->autoBidActive->bid_amount)
                    {

                        // losers
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('amount', 'asc')->first();
                        $i=0;
                        $offerUser=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        $autoBidData->groupUsers = $offerUser;
                        //winners
                        $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
                        $i=0;
                        $offerWinner=[];
                        foreach($offerUsersData->allOfferUsers as $offerUsers)
                        {
                            $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                            $offerUser[$i]['weight'] = $offerUsers->weight;
                            $i++;
                        }
                        $autoBidData->isgroup    = '1';
                        $autoBidData->winneruser = $offerWinner;
                        $loser = '';
                        $autoBidData->loser_user = $loser;
                        //paddlenumber
                        $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
                        $offerpaddleNumber  = $offerComplete->paddle_number;
                        $autoBidData->userPaddleNo = $offerpaddleNumber;

                    }
                    $latestAutoBid = $autoBidData;
                } elseif ($request->autobidamount > $auctionProductsData->autoBidActive->bid_amount) {
                    $userID = null;
                    $loser = $auctionProductsData->autoBidActive->user_id;
                    $singleBid = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
                    $bidLimit = Bidlimit::where('min', '<', $singleBid->bid_amount)->orderBy('min', 'desc')->first();
                    $bidLimit = Bidlimit::where('min', '<', $singleBid->bid_amount)->orderBy('min', 'desc')->first();
                    $bidIncrement = $bidLimit->increment;
                    $newbidPrice = $bidIncrement + $singleBid->bid_amount;
                    $singleBid = new SingleBid();
                    $singleBid->bid_amount = $auctionProductsData->autoBidActive->bid_amount;
                    $singleBid->auction_id = $request->auctionid;

                    $singleBid->user_id = $loser;
                    $singleBid->auction_product_id = $request->id;
                    $singleBid->autobid_id = $auctionProductsData->autoBidActive->id;
                    if($request->isgroup == 1)
                    {
                        $singleBid->is_group = $request->isgroup;
                    }
                    $singleBid->save();

                    $singleBid = new SingleBid();
                    $singleBid->bid_amount = $auctionProductsData->autoBidActive->bid_amount + .5;
                    $singleBid->auction_id = $request->auctionid;
                    $singleBid->user_id = $user;
                    $singleBid->autobid_id = $auctionProductsData->autoBidActive->id;
                    $singleBid->auction_product_id = $request->id;
                    if($request->isgroup == 1)
                    {
                        $singleBid->is_group = $request->isgroup;
                    }
                    $singleBid->save();
                    AutoBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->update([
                        'is_active' => '0'
                    ]);
                    $autoBidData = new AutoBid();
                    $autoBidData->auction_id = $request->auctionid;
                    $autoBidData->user_id = $user;
                    $autoBidData->auction_product_id = $request->id;
                    $autoBidData->is_active = '1';
                    $autoBidData->bid_amount = $request->autobidamount;
                    if($request->isgroup == 1)
                    {
                        $autoBidData->is_group = $request->isgroup;
                    }
                    $autoBidData->save();
                    // $autobidlosercheck = Autobid::where('auction_product_id', $request->id)->where('is_active', '1')->orderBy('bid_amount', 'desc')->first();
                    // if (isset($autobidlosercheck)  && $request->isgroup==1 )
                    // {
                    //     $loser = '';
                    //     $autoBidData->loser_user = $loser;
                    // }

                    $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('user_id', '!=', $user)->where('is_active', '0')->orderBy('bid_amount', 'desc')->first();
                }
            }
        } else {

                $autoBidData = new AutoBid();
                $autoBidData->auction_id = $request->auctionid;
                $autoBidData->user_id = $user;
                $autoBidData->auction_product_id = $request->id;
                $autoBidData->is_active = '1';
                $autoBidData->bid_amount = $request->autobidamount;
                if($request->isgroup == 1)
                {
                    $autoBidData->is_group = $request->isgroup;
                }
                $autoBidData->save();

            //If no Autobid on this product
            $singleBid = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
            $auctionProductPrice = isset($singleBid) ? $singleBid->bid_amount : $auctionProductsData->start_price;
            $bidLimit = Bidlimit::where('min', '<', $auctionProductPrice)->orderBy('min', 'desc')->first();
            $bidIncrement = $bidLimit->increment;
            $newbidPrice = $bidIncrement + $auctionProductPrice;
            $singleBid = new SingleBid();
            $singleBid->bid_amount = $newbidPrice;
            $singleBid->auction_id = $request->auctionid;
            $singleBid->user_id = $user;
            $singleBid->autobid_id = $autoBidData->id;
            $singleBid->auction_product_id = $request->id;
            if($request->isgroup == 1)
            {
                $singleBid->is_group = $request->isgroup;
            }
            $singleBid->save();

            //save timer start time
            $auctionPData = AuctionProduct::where('id', $request->id)->first();
            $singleBids = AuctionProduct::where('auction_id',$auction->id)->doesnthave('singleBids')->get();
            $isEmpty = sizeof($singleBids);
            $singleBid->timerCheck = $isEmpty;
            if ($isEmpty == 0 && $auction->startTime == '') {
                $updateEndTime = Auction::where('id', $auctionPData->auction_id)->update([
                    'startTime' => $currentDate]);
            }

        }
        $singleBids = AuctionProduct::where('auction_id',$auction->id)->doesnthave('singleBids')->get();
        $isEmpty = sizeof($singleBids);
        $singleBid->timerCheck = $isEmpty;
        $isActive = isset($latestAutoBid) ? $latestAutoBid->is_active : '1';
        $autoBidData->outAutobid = $isActive;
        $autoBidData->totalAutoBidLiability = ($auctionProductsData->weight * $autoBidData->bid_amount);
        $autoBidData->message = null;
        if(isset($latestAutoBid) && $latestAutoBid->is_group == 1)
        {
            $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('amount', 'asc')->first();
            $i=0;
            $offerUser=[];
            foreach($offerUsersData->allOfferUsers as $offerUsers)
            {
                $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                $offerUser[$i]['weight'] = $offerUsers->weight;
                $i++;
            }
            $autoBidData->groupUsers = $offerUser;
        }
        else
        {
            $autoBidData->bidder_user_id = isset($latestAutoBid) ? $latestAutoBid->user_id : null;
        }
        $singleBidPricelatest = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
        $bidAmountL = $singleBidPricelatest->bid_amount;
        $bidLimit = Bidlimit::where('min', '<', $bidAmountL)->orderBy('min', 'desc')->limit(1)->get();
        $bidIncrementLatest = $bidLimit[0]->increment;
        $autoBidData->bidIncrement = $bidIncrementLatest;
        $autoBidData->bid_amountNew = $bidAmountL;
        $userPaddleNum = User::where('id', $singleBidPricelatest->user_id)->first()->paddle_number;
        if($request->isgroup == 1 && !isset($auctionProductsData->autoBidActive))
        {
            $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
            $offerpaddleNumber  = $offerComplete->paddle_number;
            $autoBidData->userPaddleNo = $offerpaddleNumber;
        }
        else
        {
            $autoBidData->userPaddleNo = $userPaddleNum;
        }
        if($request->isgroup == 1 && !isset($auctionProductsData->autoBidActive))
        {

            $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
            $i=0;
            $offerUser=[];
            foreach($offerUsersData->allOfferUsers as $offerUsers)
            {
                $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                $offerUser[$i]['weight'] = $offerUsers->weight;
                $i++;
            }
            $autoBidData->isgroup    = '1';
            $autoBidData->winneruser = $offerUser;
        }
        else if($request->isgroup == 1 && isset($auctionProductsData->autoBidActive)&& $auctionProductsData->autoBidActive->is_group == 0  && $request->autobidamount > $auctionProductsData->autoBidActive->bid_amount)
        {

            $loser = '';
            $autoBidData->loser_user = $loser;
            $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
            $offerpaddleNumber  = $offerComplete->paddle_number;
            $autoBidData->userPaddleNo = $offerpaddleNumber;
            $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
            $i=0;
            $offerUser=[];
            foreach($offerUsersData->allOfferUsers as $offerUsers)
            {
                $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                $offerUser[$i]['weight'] = $offerUsers->weight;
                $i++;
            }
            $autoBidData->isgroup    = '1';
            $autoBidData->winneruser = $offerUser;

        }
        else if($request->isgroup == 1 && isset($auctionProductsData->autoBidActive)&& $auctionProductsData->autoBidActive->is_group == 1 && $request->autobidamount > $auctionProductsData->autoBidActive->bid_amount)
        {

            $loser = '';
            $autoBidData->loser_user = $loser;
            //losers
            $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('amount', 'asc')->first();
            $i=0;
            $offerUser=[];
            foreach($offerUsersData->allOfferUsers as $offerUsers)
            {
                $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                $offerUser[$i]['weight'] = $offerUsers->weight;
                $i++;
            }
            $autoBidData->groupUsers = $offerUser;
            //winners
            $offerComplete = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('useroffers')->orderBy('created_at', 'desc')->first();
            $offerpaddleNumber  = $offerComplete->paddle_number;
            $autoBidData->userPaddleNo = $offerpaddleNumber;
            $offerUsersData = Offers::where('auction_product_id',$request->id)->where('is_active','=',2)->with('allOfferUsers')->orderBy('created_at', 'desc')->first();
            $i=0;
            $offerUser=[];
            foreach($offerUsersData->allOfferUsers as $offerUsers)
            {
                $offerUser[$i]['bidwinner'] = $offerUsers->user_id;
                $offerUser[$i]['weight'] = $offerUsers->weight;
                $i++;
            }
            $autoBidData->isgroup    = '1';
            $autoBidData->winneruser = $offerUser;

        }
        else if(!isset($autoBidData->winneruser))
        {
            $autoBidData->isgroup    = '0';
            $autoBidData->winneruser = $singleBidPricelatest->user_id;
        }
        $inc = $bidAmountL + $bidIncrementLatest;
        $totalLiabilty = $inc * $auctionProductsData->weight;
        $autoBidData->liablity = $totalLiabilty;
        $singleBidPricelatest = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
        $bidAmountL = $singleBidPricelatest->bid_amount;
        $bidLimit = Bidlimit::where('min', '<', $bidAmountL)->orderBy('min', 'desc')->limit(1)->get();
        $bidIncrementLatest = $bidLimit[0]->increment;
        $autoBidData->bidIncrement = $bidIncrementLatest;
        $autoBidData->bid_amountNew = $bidAmountL;
        $autoBidData->id = $winner;
        $autoBidData->timerCheck = $isEmpty;

        if (!isset($loser)) {
            $loser = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->skip(1)->first();
            if ($loser) {
                $loser = $loser->user_id;
            }
        }
        // dd($autoBidData->loser_user);
        $autoBidData->loser_user = $loser;
        return response()->json($autoBidData);
    }

    public function removeAutoBid(Request $request) {
        $userID = Auth::user()->id;
        $currentAutoBid = AutoBid::where('auction_product_id', $request->id)->where('user_id', $userID)->update([
            'is_active' => '0'
        ]);
        $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('user_id', $userID)->orderBy('updated_at', 'desc')->first();
        $isActive = $latestAutoBid->is_active;
        $latestAutoBid->outAutobid = $isActive;
        $single_bid = SingleBid::where('auction_product_id', $request->id)->orderBy('id', 'desc')->first();
        if ($single_bid) {
            $latestAutoBid->winner_id = $single_bid->user_id;
        } else {
            $latestAutoBid->winner_id = '';
        }
        return response()->json($latestAutoBid);
    }

    public function autoBids() {
        $autobids = AutoBid::all();
        return view('admin.auction.autobids', compact('autobids'));
    }

    public function updateAutoBids($id) {
        $autobids = AutoBid::where('id', $id)->first();
        return view('admin.auction.updateAutoBid', compact('autobids'));
    }

    public function prductBiddingDetail($id) {
        $auctionId = base64_decode($id);
        $auction = Auction::where('id',$auctionId)->first();
        $singleBids = AuctionProduct::where('auction_id',$auction->id)->doesnthave('singleBids')->get();
        $isEmpty = sizeof($singleBids);
        $auction_products = AuctionProduct::where('auction_id',$auction->id)->with('products', 'latestBidPrice.user')->get();
        $products = Product::with('region', 'village', 'governorate', 'reviews')->get();
        return view('admin.auction.productBiddingDetail', compact('auction_products', 'products', 'auctionId','auction','isEmpty'));
    }

    public function prductBiddingDashboard() {
        $auction = Auction::where('is_active','1')->first();
        $auction_products = AuctionProduct::where('auction_id',$auction->id)->with('products')->get();
        $products = Product::with('region', 'village', 'governorate', 'reviews')->get();
        return view('admin.auction.productBiddingDashboard', compact('auction_products', 'products'));
    }

    public function updateSaveAutoBids(Request $request) {
        AutoBid::where('id', $request->autobidId)->update([
            'bid_amount' => $request->autobidamount,
        ]);
        return response()->json();
    }

    public function auctionHome(Request $request) {
        $auction = Auction::where('is_active','1')->first();
        if ($request->ended == 1) {
            $auction->save();
            return redirect('auction');
        }
        if ($auction->is_hidden == 1) {
            return redirect('auction-winners');
        }
        $auctionProducts = AuctionProduct::where('auction_id',$auction->id)->with('products', 'singleBids', 'winningImages')->get();
        $singleBids = AuctionProduct::doesnthave('singleBids')->get();
        $results = $auctionProducts->map(function($e) {

            $e->openCheck = SingleBid::where('auction_product_id', $e->id)->first();

            $e->openCheck = SingleBid::where('auction_product_id', $e->id)->first();
            $e->openCheckautobid = AutoBid::where('auction_product_id', $e->id)->first();
            $e->singleBidPricelatest = SingleBid::where('auction_product_id', $e->id)
                    ->orderBy('bid_amount', 'desc')
                    ->first();

            $e->latestSingleBid = SingleBid::where('auction_product_id', $e->id)
                    ->orderBy('created_at', 'desc')
                    ->first();
            return $e;
        });
        return view('customer.auction_pages.auction_home', compact('auctionProducts', 'auction', 'singleBids'));
    }

    public function winningCoffee() {
        $winningCoffees = WinningCofees::all();
        return view('customer.dashboard.index-new', compact('winningCoffees'));
    }

    public function winningCoffeeProducts($id) {
        $winningCoffeesData = WinningCofees::where('code', $id)->with('images')->first();
        return view('customer.dashboard.products-landing', compact('winningCoffeesData'));
    }

    public function newslettersignup(Request $request) {
        $news = new Newsletter();
        $news->name = $request->name;
        $news->email = $request->email;
        $news->save();
        return redirect('/');
    }

    public function openSideBar(Request $request) {
        $auctionProducts = AuctionProduct::where('id', $request->id)->with('products')->first();
        return response()->json($auctionProducts);
    }

    public function winningProductsSidebar($id) {
        $winningCoffeesData = WinningCofees::where('rank', $id)->with('images')->first();
        return view('customer.dashboard.products-landing', compact('winningCoffeesData'));
    }

    public function saveYourScore(Request $request) {
        $userScore = UserScore::updateOrCreate(
                        ['auction_product_id' => $request->id], ['your_score' => $request->value, 'user_id' => Auth::user()->id]
        );
        return response()->json($userScore);
    }

    public function auctionWinners(Request $request) {
        $auction = Auction::where('is_active','1')->first();
        if ($request->ended == 1) {

            $auction->save();
            return redirect('auction-winners');
        }
        if ($auction && $auction->is_hidden == 1) {
            //save data in auction winners
            $auctionWinners = AuctionWinners::where('auction_id', $auction->id)->get();
                if($auctionWinners->isEmpty())
                {
                $auctions=Auction::all();
                $auctionProducts = AuctionProduct::where('auction_id', $auction->id)->with('products', 'singleBids', 'winningImages')->get();
                $results = $auctionProducts->map(function ($e) {
                    $e->highestbid = SingleBid::where('auction_product_id', $e->id)
                        ->orderBy('bid_amount', 'desc')
                        ->first();
                    return $e;
                });
                        foreach($auctionProducts as $products)
                        {
                            $auctionWinners= new AuctionWinners;
                            $auctionWinners->auction_id         =   $products->auction_id;
                            $auctionWinners->auction_product_id =   $products->highestbid->auction_product_id;
                            $auctionWinners->product_id         =   $products->product_id;
                            $auctionWinners->user_id            =   $products->highestbid->user_id;
                            $auctionWinners->bid_amount         =   $products->highestbid->bid_amount;
                            $auctionWinners->total_value        =   $products->highestbid->bid_amount*$products->weight;
                            $auctionWinners->is_hidden          =   '0';
                            $auctionWinners->delivery_status    =   'Pending';
                            $auctionWinners->save();

                            //save dat in statsues table
                            $trackData = new ShipmentTrackingStatus;
                            $trackData->auction_winner_id = $auctionWinners->id;
                            $trackData->delivery_status = 'Pending';
                            $trackData->save();
                        }

                }

            $auctionProducts = AuctionProduct::where('auction_id',$auction->id)->with('products', 'singleBids', 'winningImages')->get();
            $singleBids = AuctionProduct::doesnthave('singleBids')->get();
            $results = $auctionProducts->map(function($e) {

                $e->openCheck = SingleBid::where('auction_product_id', $e->id)->first();

                $e->openCheck = SingleBid::where('auction_product_id', $e->id)->first();
                $e->openCheckautobid = AutoBid::where('auction_product_id', $e->id)->first();
                $e->singleBidPricelatest = SingleBid::where('auction_product_id', $e->id)
                        ->orderBy('bid_amount', 'desc')
                        ->first();
                $e->latestSingleBid = SingleBid::where('auction_product_id', $e->id)
                        ->orderBy('created_at', 'desc')
                        ->first();
                $e->highestbid = SingleBid::where('auction_product_id', $e->id)
                        ->orderBy('bid_amount', 'desc')
                        ->first();
                return $e;
            });
            return view('customer.auction_pages.auction_winners', compact('auctionProducts', 'auction', 'singleBids'));
        } else {
            return redirect('auction');
        }
    }
    public function auctionEnd(Request $request)
    {
        $auctionEnd=Auction::where('id', $request->id)->update([
            'is_hidden' => '1','endDate' => date('Y-m-d H:i:s')
        ]);
        return response()->json($auctionEnd);
    }
    public function auctionReset(Request $request)
    {
        $currentDate = date('Y-m-d H:i:s');
        $convertedTime = date('Y-m-d H:i:s', strtotime('+3 minutes', strtotime($currentDate)));
        $auction = Auction::where('is_active','1')->first();
        $auction->endTime = $convertedTime;
        $auction->save();
        $auctionReset='1';
        return response()->json($auctionReset);
    }
    public function groupBidSideBar(Request $request)
    {
        $groupbidDatas      = UserOffers::where('status',1)->get();
        $groupbid=[];
        $i=0;
        foreach($groupbidDatas as $groupbid_offer){
            $total_weight       = AuctionProduct::where('id',$groupbid_offer['auction_product_id']);
            $user_offer=Offers::where('id',$groupbid_offer['offer_id'])->where('is_active','=',1)->first();
            if($user_offer!==null){
            $accopied_wieght    = UserOffers::where('offer_id',$groupbid_offer['offer_id'])->where('status',1)->sum('weight');
            $groupbid[$i]=$user_offer;
            $groupbid[$i]['accopied_wieght']=$accopied_wieght;
            $groupbid[$i]['user_offer_id']=$groupbid_offer->id;
            $groupbid[$i]['remainig_weight']=$total_weight->value('weight')-$accopied_wieght;
            $groupbid[$i]['rank']=$total_weight->value('rank');
            if($groupbid_offer->user_id==Auth::user()->id){
                $groupbid[$i]['my_check']=true;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            else
            {
                $groupbid[$i]['my_check']=false;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            $i++;
        }

    }
    $offerComplete = Offers::where('is_active','=',2)->with('useroffers','auctionProducts')->get();
     return response()->json(['groupbid' => $groupbid,'offerComplete'=>$offerComplete]);
    }
    public function saveGroupBidOffer(Request $request)
    {
        // $auctionProductsData = AuctionProduct::where('id', $request->id)->with(['autoBidActive'])->first();
        // if(isset($auctionProductsData->autoBidActive))
        // {
        //     if ($request->amount <= $auctionProductsData->autoBidActive->bid_amount)
        //     {
        //         return response()->json(['message' => 'Please enter greater amount than current amount.']);
        //     }
        // }

        $offerActive = Offers::where('auction_product_id', $request->id)->where('is_active','=',1)->first();
        if($offerActive != null && $offerActive->amount == $request->amount)
        {
            return response()->json(['message' => 'Offer exist with same amount.']);
        }
        $user                               =   Auth::user()->id;
        $currentDate                        =   date('Y-m-d H:i:s');
        $auction                            =   Auction::where('is_active','1')->first();
        $groupOfferData                     =   new Offers();
        $groupOfferData->auction_id         =   $auction->id;
        $groupOfferData->auction_product_id =   $request->id;
        $groupOfferData->amount             =   $request->amount;
        $groupOfferData->weight             =   $request->weight;
        $groupOfferData->start_time         =   Carbon::now();
        $groupOfferData->end_time           =  Carbon::now()->addSecond(30);
        $groupOfferData->is_active          =   '1';
        $groupOfferData->paddle_number      =  $this->generateUniquePaddleNumber();
        $groupOfferData->expired_at         =   $currentDate;
        $total_Productweight                = AuctionProduct::where('id',$request->id)->first()->weight;
        $groupOfferData->save();
        //save data in user offers table
        $userOfffers                        = new UserOffers();
        $userOfffers->user_id               = $user;
        $userOfffers->offer_id              = $groupOfferData->id;
        $userOfffers->weight                = $request->weight;
        $userOfffers->auction_product_id    =  $request->id;
        $userOfffers->save();
        // offers data
        $groupbidDatas      = UserOffers::where('status',1)->get();
        $groupbid=[];
        $i=0;
        foreach($groupbidDatas as $groupbid_offer){
            $total_weight       = AuctionProduct::where('id',$groupbid_offer['auction_product_id']);
            $user_offer=Offers::where('id',$groupbid_offer['offer_id'])->where('is_active','=',1)->first();
            if($user_offer!==null){
            $accopied_wieght    = UserOffers::where('offer_id',$groupbid_offer['offer_id'])->where('status',1)->sum('weight');
            $groupbid[$i]=$user_offer;
            $groupbid[$i]['accopied_wieght']=$accopied_wieght;
            $groupbid[$i]['user_offer_id']=$groupbid_offer->id;
            $groupbid[$i]['remainig_weight']=$total_weight->value('weight')-$accopied_wieght;
            $groupbid[$i]['rank']=$total_weight->value('rank');
            if($groupbid_offer->user_id==Auth::user()->id){
                $groupbid[$i]['my_check']=true;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            else
            {
                $groupbid[$i]['my_check']=false;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            $i++;
        }
        }
            $adminOffers  =   Offers::where('auction_product_id',$request->id)->get();
            return response()->json(['request_weight'=>$request->weight,'total_weight'=>$total_weight,'groupOfferData' => $groupOfferData , 'userOfffers' => $userOfffers ,'groupbid' => $groupbid,'adminOffers'=>$adminOffers]);

    }
    public function saveOtherGroupbidOffer(Request $request)
    {
        // return $request;
        $user                                =  Auth::user()->id;
        $check_user_offer=UserOffers::where('user_id',$user)->where('offer_id',$request->offerid)->first();
        if($check_user_offer==null){
            $otherOfffers                        =  new UserOffers();
            $otherOfffers->weight                =  $request->weight;
        }
        else{
            $otherOfffers                        =  UserOffers::find($check_user_offer->id);
            if($otherOfffers->status==0){
                $otherOfffers->weight                = $request->weight;
                $otherOfffers->status=1;
            }
            else{
            $otherOfffers->weight                = $check_user_offer->weight+ $request->weight;
            }
        }
        $otherOfffers->user_id               =  $user;
        $otherOfffers->offer_id              =  $request->offerid;
        $otherOfffers->auction_product_id    =  Offers::where('id',$request->offerid)->value('auction_product_id');
        $otherOfffers->save();
        $total_weight                        = AuctionProduct::where('id',$request->auctionproductid)->first()->weight;
        $offerweight                         = Offers::where('id',$request->offerid)->where('is_active',1)->with('allOfferUsers')->first();
    //    return $offerweight;
        foreach($offerweight->allOfferUsers as $offerweights)
        {
            $weight=$offerweight->allOfferUsers->sum('weight');
            if($weight == $total_weight)
            {
                $updateisactive =  Offers::where('id',$request->offerid)->where('is_active','1')->update([
                        'is_active' => '2'
                ]);
            }
        }
        Offers::where('id',$request->offerid)->update([
            'end_time' => Carbon::now()->addSecond(30)
        ]);
        // offers data
        $groupbidDatas      = UserOffers::where('status',1)->get();
        $groupbid=[];
        $i=0;
        foreach($groupbidDatas as $groupbid_offer){
            $total_weight       = AuctionProduct::where('id',$groupbid_offer['auction_product_id']);
            $user_offer=Offers::where('id',$groupbid_offer['offer_id'])->where('is_active','=',1)->first();
            if($user_offer!==null){
            $accopied_wieght    = UserOffers::where('offer_id',$groupbid_offer['offer_id'])->where('status',1)->sum('weight');
            $groupbid[$i]=$user_offer;
            $groupbid[$i]['accopied_wieght']=$accopied_wieght;
            $groupbid[$i]['user_offer_id']=$groupbid_offer->id;
            $groupbid[$i]['remainig_weight']=$total_weight->value('weight')-$accopied_wieght;
            $groupbid[$i]['rank']=$total_weight->value('rank');
            // $groupbid[$i]['otherdata']='1';
            if($groupbid_offer->user_id==Auth::user()->id){
                $groupbid[$i]['my_check']=true;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            else
            {
                $groupbid[$i]['my_check']=false;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            $i++;
        }
        }
        $activeOffers =   Offers::where('id',$request->offerid)->where('auction_product_id',$request->auctionproductid)->where('is_active',1)->first();
        $adminOffers  =   Offers::where('auction_product_id',$request->auctionproductid)->get();
        return response()->json(['otherOfffers' => $otherOfffers,'groupbid' => $groupbid,'adminOffers'=>$adminOffers,'activeOffers'=>$activeOffers]);

    }
    public function groupbidAdminSidebar(Request $request)
    {
        $OffersData =   Offers::where('auction_product_id',$request->id)->get();
        return response()->json(['OffersData' => $OffersData]);
    }

    public function groupbidupdateStatus(Request $request)
    {
        $OffersData =  Offers::find($request->id);
        $OffersData->end_time=date('Y-m-d H:i:s');
        if($OffersData->is_active==1)
        {
            $OffersData->is_active=0;
        }
        $OffersData->save();
        $id=$OffersData->auction_product_id;
        $groupbidDatas      = UserOffers::where('status',1)->get();
        $groupbid=[];
        $i=0;
        foreach($groupbidDatas as $groupbid_offer){
            $total_weight       = AuctionProduct::where('id',$groupbid_offer['auction_product_id']);
            $user_offer=Offers::where('id',$groupbid_offer['offer_id'])->where('is_active','=',1)->first();
            if($user_offer!==null){
            $groupbid[$i]=$user_offer;
            $accopied_wieght    = UserOffers::where('offer_id',$groupbid_offer['offer_id'])->where('status',1)->sum('weight');
            $groupbid[$i]['accopied_wieght']=$accopied_wieght;
            $groupbid[$i]['user_offer_id']=$groupbid_offer->id;
            $groupbid[$i]['remainig_weight']=$total_weight->value('weight')-$accopied_wieght;
            $groupbid[$i]['rank']=$total_weight->value('rank');
            if($groupbid_offer->user_id==Auth::user()->id){
                $groupbid[$i]['my_check']=true;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            else
            {
                $groupbid[$i]['my_check']=false;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            $i++;
        }
        }

        return response()->json(['success'=> 'Auction expired.','offersdata'=>$groupbid]);

    }
    public function generateUniquePaddleNumber()
    {
        do {
            $code = random_int(1000, 9999);
        } while (Offers::where("paddle_number", "=", $code)->first());

        return $code;
    }

    public function updateUserOfferStatus(Request $request){
        // $userBid      = UserOffers::find($request->id);
        // $userBid->status=0;
        // $userBid->save();
        $user = Auth::user()->id;
UserOffers::where('user_id',$user)->where('offer_id',$request->id)->update([
    'status' => '0'
]);
$userOffers = UserOffers::where('offer_id',$request->id)->where('status',1)->get();
if($userOffers->isEmpty())
{
    offers::where('id',$request->id)->update([
        'is_active' => '0'
    ]);
}
        $groupbidDatas      = UserOffers::where('status',1)->get();
        $groupbid=[];
        $i=0;
        foreach($groupbidDatas as $groupbid_offer){
            $total_weight       = AuctionProduct::where('id',$groupbid_offer['auction_product_id']);
            $user_offer=Offers::where('id',$groupbid_offer['offer_id'])->where('is_active','=',1)->first();
            if($user_offer!==null){
            $groupbid[$i]=$user_offer;
            $accopied_wieght    = UserOffers::where('offer_id',$groupbid_offer['offer_id'])->where('status',1)->sum('weight');
            $groupbid[$i]['accopied_wieght']=$accopied_wieght;
            $groupbid[$i]['user_offer_id']=$groupbid_offer->id;
            $groupbid[$i]['remainig_weight']=$total_weight->value('weight')-$accopied_wieght;
            $groupbid[$i]['rank']=$total_weight->value('rank');

            if($groupbid_offer->user_id==Auth::user()->id){
                $groupbid[$i]['my_check']=true;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            else
            {
                $groupbid[$i]['my_check']=false;
                $groupbid[$i]['user_id']=$groupbid_offer->user_id;
            }
            $i++;
        }
        }
        return response()->json(['success'=> 'Auction expired.','offersdata'=>$groupbid]);

    }
}

