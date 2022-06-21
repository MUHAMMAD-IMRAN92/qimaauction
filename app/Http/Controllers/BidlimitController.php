<?php

namespace App\Http\Controllers;

use App\Models\Bidlimit;
use Illuminate\Http\Request;

class BidlimitController extends Controller
{
    public function index()
    {
        return view('admin.bidlimit.index');
    }

    public function allBidlimit(Request $request)
    {
        $draw   = $request->get('draw');
        $start  = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $bidLimits_count = Bidlimit::when($search, function ($q) use ($search) {
            $q->where('min', 'LIKE', "%$search%")->where('is_hidden', '0');
        })->count();
        $bidLimits = Bidlimit::when($search, function ($q) use ($search) {
            $q->where('min', 'LIKE', "%$search%");
        });

        $bidLimits = $bidLimits->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw'              => $draw,
            'recordsTotal'      => $bidLimits_count,
            'recordsFiltered'   => $bidLimits_count,
            'data'              => $bidLimits,
        );
        return response()->json($data);
    }

    public function create()
    {
        return view('admin.bidlimit.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'addmore.*.min'         => 'required',
            'addmore.*.increment'   => 'required',
            'addmore.*.max'         => 'required',
        ]);
        foreach ($request->addmore as $key => $value) {
            Bidlimit::create($value);
        }
        parent::successMessage('Bidlimit saved successfully.');
        return redirect('/bidlimit/index');
    }

    public function edit(Request $request, $id)
    {
        $bidLimits = Bidlimit::find(base64_decode($id));

        return view('admin.bidlimit.edit', [
            'bidLimits' =>  $bidLimits,
        ]);
    }
}
