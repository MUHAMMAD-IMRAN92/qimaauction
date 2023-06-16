<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DevTestController extends Controller
{
    public function index()
    {
        return Product::whereDate('created_at', date("l jS \of F Y h:i:s A"))->get();
        return phpinfo();

        $en = encrypt(1);

        return decrypt($en);
    }
}
