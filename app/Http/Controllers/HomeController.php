<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $user;
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $user = Auth::user();
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user =Auth::user()->is_admin;
        if($user == 0) {
            return redirect('dashboard');
        } else {
            return redirect('customer/AuctionProducts');
        }

        // $user = $this->user;
        // return view('admin.dashboard.index', [
        //     'user' =>  $user,
        // ]);
    }
    public function newsletter()
    {
        return view('home');
    }
    public function newsletterpost(Request $request)
    {
        Newsletter::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->route('news')->with('success','News Letter Subscribed Successfuly');
    }
}
