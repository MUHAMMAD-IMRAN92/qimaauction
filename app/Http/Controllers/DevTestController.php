<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DevTestController extends Controller
{
    public function index()
    {

  return      Product::where('product_title' , 'Hifthallah Alhaymi')->orderBy('created_at' , 'desc')->delete();

        return phpinfo();
        // return view('admin.dashboard.index');
        $en = encrypt(1);

        return decrypt($en);
    }
}
