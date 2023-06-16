<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DevTestController extends Controller
{
    public function index()
    {
        return phpinfo();

        $en = encrypt(1);

        return decrypt($en);
    }
}
