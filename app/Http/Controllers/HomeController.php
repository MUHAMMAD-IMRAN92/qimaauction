<?php

namespace App\Http\Controllers;

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
    public function __construct()
    {
        $this->middleware('auth');
        $user = Auth::user();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = $this->user;
        return view('admin.dashboard.index', [
            'user' =>  $user,
        ]);
    }
    public function upcomingAuction()
    {
        return view('upcomingauction');
    }
}
