<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DevTestController extends Controller
{
    public function index()
    {
        return Product::whereDate('created_at', Carbon::now())->get('id');
        return phpinfo();

        $en = encrypt(1);

        return decrypt($en);
    }
}
