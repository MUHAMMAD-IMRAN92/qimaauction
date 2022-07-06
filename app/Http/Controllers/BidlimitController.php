<?php

namespace App\Http\Controllers;

use App\Models\Bidlimit;
use Illuminate\Http\Request;

class BidlimitController extends Controller
{
    public function index()
    {
        $bidLimits      =    Bidlimit::all();
        return view('admin.bidlimit.index',compact('bidLimits'));
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
        // $bidLimit               =   new  Bidlimit();
        // $bidLimit->min          =   json_encode($request->min);
        // $bidLimit->increment    =   json_encode($request->increment);
        // $bidLimit->max          =   json_encode($request->max);
        // $bidLimit->save();
        foreach ($request->addmore as $key => $value) {
            Bidlimit::create($value);
        }
        return redirect('/bidlimit/index')->with('success','Bidlimit saved successfully.');
    }

    public function edit(Request $request)
    {
        $bidLimits = Bidlimit::all();
        return view('admin.bidlimit.edit', [
            'bidLimits' =>  $bidLimits,
        ]);
    }

    public function update(Request $request)
    {
        // $bidLimit               =   Bidlimit::find($request->bidlimit);
        // $bidLimit->min          =   ($request->min);
        // $bidLimit->increment    =   json_encode($request->increment);
        // $bidLimit->max          =   json_encode($request->max);
        // $bidLimit->save();
        // Bidlimit::whereNotNull('id')->delete();
        $roles = Bidlimit::all();
        foreach($roles as $role){
        $role->delete();
    }
        foreach ($request->addmore as $key => $value) {
            Bidlimit::create($value);
        }
        return redirect('/bidlimit/index')->with('success','Bidlimit updated successfully.');
    }
}
