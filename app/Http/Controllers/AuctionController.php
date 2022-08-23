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
use App\Models\UserScore;
use App\Models\WinningCofeeImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //  $data = $auction_products->delete();
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
        $juries = $juries->where('is_hidden', '0')->skip((int) $start)->take((int) $length)->orderBy('id', 'desc')->get();
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
        if ($request->ended == 1) { //$auction->auctionStatus() == 'ended'){
           $auction->is_hidden = 1;
            $auction->endDate = date('Y-m-d H:i:s');

            $auction->save();
            return redirect('auction-winners');
        }
        $auctionProducts = AuctionProduct::where('auction_id',$auction->id)->with('products', 'singleBids', 'winningImages')->get();
    //   dd($auctionProducts);
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
            return $e;
        });
        // dd($auctionProducts->latestAutoBidPrice);
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
            // foreach($autoBidsData as $autoBids)
            // {
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
                    $singleBid->autoBidUser = $autoBidsData->user_id;
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
//            $userPaddleNum = User::where('id', $singleBidStartPrice->user_id)->first()->paddle_number;
            // $singleBid->user_paddleNo       =   $userPaddleNum;
            $userPaddleNum = User::where('id', $singleBidStartPrice->user_id)->first()->paddle_number;
            $singleBid->userPaddleNo = $userPaddleNum;

            // $singleBidMaxpriceUser          =   SingleBid::where('auction_product_id',$request->id)->where('user_id',Auth::user()->id)->orderBy('bid_amount','desc')->first()->bid_amount;
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
            $singleBid->latestSingleBidUser = $latestSingleBid->user_id;
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
                    $singleBidData->autoBidUser = $autoBidsData->user_id;
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
            $userPaddleNum = User::where('id', $singleBidPricelatest->user_id)->first()->paddle_number;
            $singleBidData->userPaddleNo = $userPaddleNum;

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
            $singleBids = AuctionProduct::doesnthave('singleBids')->get();
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
            $singleBidData->latestSingleBidUser = $latestSingleBid->user_id;
            // dd($latestSingleBid->user_id);
            return response()->json($singleBidData);
        }
    }

    public function autoBidData(Request $request) {
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
            $autoBidData->save();
            return response()->json(['success' => 'Bid Added Successfully']);
        }
        $loser = '';

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
                $autoBidData->save();
                $other_id = $auctionProductsData->autoBidActive->user_id;
                $get_last_bid = $auctionProductsData->latestBidPriceAmount;
                $singleBidData = new SingleBid();
                $singleBidData->bid_amount = $request->autobidamount - .5;
                $singleBidData->auction_id = $request->auctionid;
                $singleBidData->user_id = $user;
                $singleBidData->auction_product_id = $request->id;
                $singleBidData->save();

                $singleBidData = new SingleBid();
                $singleBidData->bid_amount = $request->autobidamount;
                $singleBidData->auction_id = $request->auctionid;
                $singleBidData->user_id = $other_id;
                $singleBidData->auction_product_id = $request->id;
                $singleBidData->save();
                $autoBidData = $auctionProductsData->autoBidActive;
                $winner = $other_id;
//                return response()->json(['message' => 'Please enter amount greater or less than current autobid amount.']);
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
                    $singleBidData->save();

                    $singleBidData = new SingleBid();
                    $singleBidData->bid_amount = $request->autobidamount + $bidIncrement;
                    $singleBidData->auction_id = $request->auctionid;
                    $singleBidData->user_id = $auctionProductsData->autoBidActive->user_id;
                    $singleBidData->auction_product_id = $request->id;
                    $singleBidData->save();
//                    do {
//
//                        $bidLimit = Bidlimit::where('min', '<', $singleBid->bid_amount)->orderBy('min', 'desc')->first();
//                        $bidIncrement = $bidLimit->increment;
//                        $newbidPrice = $bidIncrement + $singleBid->bid_amount;
//                        $singleBidData = new SingleBid();
//                        $singleBidData->bid_amount = $newbidPrice;
//                        $singleBidData->auction_id = '15';
//                        if ($auctionProductsData->autoBidActive->bid_amount == $newbidPrice) {
//                            $singleBidData->user_id = $auctionProductsData->autoBidActive->user_id;
//                        } else {
//                            $singleBidData->user_id = (!isset($userID)) ? $user : $userID;
//                        }
//
//                        $singleBidData->auction_product_id = $request->id;
//                        $singleBidData->save();
//                        $userID = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->offset(1)->first()->user_id;
//                        $singleBid->bid_amount = $newbidPrice;
//                    } while ($singleBid->bid_amount < $request->autobidamount);
//                    $userID = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first()->user_id;
//
//
//                    if ($userID != $auctionProductsData->autoBidActive->user_id) {
//                        $singleBidData = new SingleBid();
//                        $bidLimit = Bidlimit::where('min', '<', $singleBid->bid_amount)->orderBy('min', 'desc')->first();
//                        $bidIncrement = $bidLimit->increment;
//                        $newbidPrice = $bidIncrement + $singleBid->bid_amount;
//                        $singleBidData->bid_amount = $newbidPrice;
//                        $singleBidData->auction_id = '20';
//                        $request->auctionid;
//                        $singleBidData->user_id = $auctionProductsData->autoBidActive->user_id;
//                        $singleBidData->auction_product_id = $request->id;
//                        $singleBidData->save();
//                    }
                    $autoBidData = new AutoBid();
                    $autoBidData->auction_id = $request->auctionid;
                    $autoBidData->user_id = $user;
                    $autoBidData->auction_product_id = $request->id;
                    $autoBidData->is_active = '0';
                    $autoBidData->bid_amount = $request->autobidamount;
                    $autoBidData->save();
                    $latestAutoBid = $autoBidData; //AutoBid::where('auction_product_id', $request->id)->where('user_id', $user)->where('is_active', '!=', '1')->orderBy('bid_amount', 'desc')->first();
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
                    $singleBid->save();

                    $singleBid = new SingleBid();
                    $singleBid->bid_amount = $auctionProductsData->autoBidActive->bid_amount + .5;
                    $singleBid->auction_id = $request->auctionid;
                    $singleBid->user_id = $user;
                    $singleBid->auction_product_id = $request->id;
                    $singleBid->save();
//                    do {
//                        $singleBid = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
//                        $bidLimit = Bidlimit::where('min', '<', $singleBid->bid_amount)->orderBy('min', 'desc')->first();
//                        $bidIncrement = $bidLimit->increment;
//                        $newbidPrice = $bidIncrement + $singleBid->bid_amount;
//                        $singleBid = new SingleBid();
//                        $singleBid->bid_amount = $newbidPrice;
//                        $singleBid->auction_id = $request->auctionid;
//                        if ($singleBid->bid_amount > $auctionProductsData->autoBidActive->bid_amount) {
//                            $singleBid->user_id = $user;
//                        } else {
//                            $singleBid->user_id = (!isset($userID)) ? $user : $userID;
//                        }
//
//                        $singleBid->auction_product_id = $request->id;
//                        $singleBid->save();
//                        $userID = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->offset(1)->first()->user_id;
//                    } while ($singleBid->bid_amount <= $auctionProductsData->autoBidActive->bid_amount);
                    AutoBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->update([
                        'is_active' => '0'
                    ]);
                    $autoBidData = new AutoBid();
                    $autoBidData->auction_id = $request->auctionid;
                    $autoBidData->user_id = $user;
                    $autoBidData->auction_product_id = $request->id;
                    $autoBidData->is_active = '1';
                    $autoBidData->bid_amount = $request->autobidamount;
                    $autoBidData->save();
                    $latestAutoBid = AutoBid::where('auction_product_id', $request->id)->where('user_id', '!=', $user)->where('is_active', '0')->orderBy('bid_amount', 'desc')->first();
                }
            }
        } else {
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
            $singleBid->auction_product_id = $request->id;
            $singleBid->save();
            $autoBidData = new AutoBid();
            $autoBidData->auction_id = $request->auctionid;
            $autoBidData->user_id = $user;
            $autoBidData->auction_product_id = $request->id;
            $autoBidData->is_active = '1';
            $autoBidData->bid_amount = $request->autobidamount;
            $autoBidData->save();
        }
        $isActive = isset($latestAutoBid) ? $latestAutoBid->is_active : '1';
        $autoBidData->outAutobid = $isActive;
        $autoBidData->totalAutoBidLiability = ($auctionProductsData->weight * $autoBidData->bid_amount);
        $autoBidData->message = null;
        $autoBidData->bidder_user_id = isset($latestAutoBid) ? $latestAutoBid->user_id : null;
        $singleBidPricelatest = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->first();
        $bidAmountL = $singleBidPricelatest->bid_amount;
        $bidLimit = Bidlimit::where('min', '<', $bidAmountL)->orderBy('min', 'desc')->limit(1)->get();
        $bidIncrementLatest = $bidLimit[0]->increment;
        $autoBidData->bidIncrement = $bidIncrementLatest;
        $autoBidData->bid_amountNew = $bidAmountL;
        $userPaddleNum = User::where('id', $singleBidPricelatest->user_id)->first()->paddle_number;
        $autoBidData->userPaddleNo = $userPaddleNum;
        $autoBidData->winneruser = $singleBidPricelatest->user_id;
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
        if (!$loser) {
            $loser = SingleBid::where('auction_product_id', $request->id)->orderBy('bid_amount', 'desc')->skip(1)->first();
            if ($loser) {
                $loser = $loser->user_id;
            }
        }
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
        $auction = Auction::where('is_active','1')->first();
        $singleBids = AuctionProduct::doesnthave('singleBids')->get();
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
        if ($request->ended == 1) { //$auction->auctionStatus() == 'ended'){
//            $auction->is_hidden = 1;
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
        if ($request->ended == 1) { //$auction->auctionStatus() == 'ended'){
//            $auction->is_hidden = 1;
            $auction->save();
            return redirect('auction-winners');
        }
        if ($auction && $auction->is_hidden == 1) {
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
}
