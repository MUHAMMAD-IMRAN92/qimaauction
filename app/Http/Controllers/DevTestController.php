<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DevTestController extends Controller
{
    public function index()
    {

  return      Product::where('product_title' , 'Hifthallah Alhaymi')->where('sample_id' , 1206)->first();

        return phpinfo();
        // return view('admin.dashboard.index');
        $en = encrypt(1);

        return decrypt($en);
    }
}
