<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevTestController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
