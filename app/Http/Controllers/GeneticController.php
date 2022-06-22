<?php

namespace App\Http\Controllers;

use App\Models\Genetic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GeneticController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;
        return view('admin.genetic.index');
    }
    public function allgenetic(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Genetic::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->count();
        // })->where('is_hidden', '0')->count();
        $genetic = Genetic::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        });

        // $genetic = $genetic->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $genetic = $genetic->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $flavour_count,
            'recordsFiltered' => $flavour_count,
            'data' => $genetic,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.genetic.create');
    }
    public function save(Request $request)
    {
        $genetic = new Genetic();
        $genetic->title = $request->title;
        $genetic->save();
        return redirect('/genetic/index');
    }
    public function delete(Request $request, $id)
    {
        $genetic = Genetic::find(base64_decode($id));

        if ($genetic) {
            $genetic->is_hidden = '1';
            $genetic->save();
        }
        // return $genetic;
        return redirect('/genetic/index')->with('msg', 'genetic Deleted Successfully');
    }
    public function edit(Request $request, $id)
    {
        $genetic = Genetic::find(base64_decode($id));

        return view('admin.genetic.edit', [
            'genetic' =>  $genetic,
        ]);
    }
    public function update(Request $request)
    {
        $genetic = Genetic::find($request->id);
        $genetic->title = $request->title;
        $genetic->save();
        return redirect('/genetic/index');
    }
}
