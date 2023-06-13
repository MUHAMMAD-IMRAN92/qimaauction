<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\AuctionProduct;
use App\Models\AuctionWinners;
use App\Models\Product;
use App\Models\ShipmentTrackingStatus;
use App\Models\SingleBid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function userDashboard()
    {
        $user=Auth::user()->id;
        $auctionCount = Auction::all()->count();
        $bidCount     = SingleBid::all()->count();
        $bidCountUser = SingleBid::where('user_id',$user)->get()->count();
        $winner       = AuctionWinners::where('user_id',$user)->get()->count();
        return view('user.dashboard.index',compact('auctionCount','bidCount','bidCountUser','winner'));
    }
    public function userProfile()
    {
        $user = Auth::user()->id;
        $userData=User::where('id',$user)->first();
        return view('user.pages.profile',compact('userData'));
    }
    public function updateUser(Request $request)
    {
        $validator  =   $request->validate([
            'name'          => 'required',
            'phone_no'      => 'required|max:12',
            'paddle_number' => 'required|min:4|',
        ]);
        $user                       =   Auth::user()->id;
        $userUpdate                 =   User::find($user);
        $userUpdate->name           =   $request->name;
        $userUpdate->company        =   $request->company;
        $userUpdate->phone_no       =   $request->phone_no;
        $userUpdate->paddle_number  =   $request->paddle_number;
        if ($request->has('profile_photo')) {
            $fileName = $request->profile_photo->getClientOriginalName();
            $request->file('profile_photo')->storeAs(
                'profile_photo',
                $fileName,
                'public'
            );
            $userUpdate->user_image = $fileName;
        }
        $userUpdate->save();
        return redirect('/user-profile')->with('success','Profile updated successfully.');
    }
    public function removeUserImage(Request $request)
    {
        $user = User::find($request->id);
        Storage::disk('public')->delete('profile_photo/'.$user->user_image);
        $userImage=User::where('id', $request->id)->update([
            'user_image' => null
        ]);
        return response()->json($userImage);
    }
    public function highestBids(Request $request)
    {
        $auctions=Auction::all();
        $auctionProducts = AuctionProduct::where('auction_id', $request->auction_id)->with('products', 'singleBids')->get();
        $results = $auctionProducts->map(function ($e) {
        $e->highestbid = SingleBid::where('auction_product_id', $e->id)->where('user_id',Auth::user()->id)
            ->orderBy('bid_amount', 'desc')
            ->first();
        return $e;
        });
            return view('user.pages.highestbids', compact('auctionProducts', 'auctions'));
    }
    public function allBidsData(Request $request)
    {
        $auctions=Auction::all();
        $user=Auth::user()->id;
        $singlebids = SingleBid::where('auction_id', $request->auction_id)->where('user_id',$user)->with('aproduct.product')->orderBy('auction_product_id', 'asc')->get();
        return view('user.pages.all_bid', compact('singlebids','auctions'));
    }
    public function winningLots(Request $request)
    {
        $auctions=Auction::all();
        $user = Auth::user()->id;
        $auctionWinners = AuctionWinners::where('auction_id', $request->auction_id)->where('user_id',$user)->with('shipmentStatus')->get();
        $results = $auctionWinners->map(function($e) {
            $e->products = Product::where('id', $e->product_id)->first();
            $e->users    = User::where('id', $e->user_id)->first();
            $e->aproducts = AuctionProduct::where('id',$e->auction_product_id)->first();
            return $e;
        });

        // dd($auctionWinners);
        return view('user.pages.winning_bids', compact('auctionWinners','auctions'));
    }
}
