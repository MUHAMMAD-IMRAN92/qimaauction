<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevTestController extends Controller
{
    public function index()
    {
        return php_info();
        // return view('admin.dashboard.index');
        $en = encrypt(1);

        return decrypt($en);
    }
}
