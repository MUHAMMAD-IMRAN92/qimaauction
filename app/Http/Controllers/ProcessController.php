<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProcessController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }
    public function index()
    {
        // return $this->user;
        return view('admin.process.index');
    }
    public function allprocess(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->search['value'];
        $flavour_count = Process::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        })->count();
        // })->where('is_hidden', '0')->count();
        $process = Process::when($search, function ($q) use ($search) {
            $q->where('title', 'LIKE', "%$search%");
        });

        // $process = $process->where('is_hidden', '0')->skip((int)$start)->take((int)$length)->get();
        $process = $process->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $flavour_count,
            'recordsFiltered' => $flavour_count,
            'data' => $process,
        );
        return response()->json($data);
    }
    public function create(Request $request)
    {
        return view('admin.process.create');
    }
    public function save(Request $request)
    {
        $process = new Process();
        $process->title = $request->title;
        $process->save();
        parent::successMessage('Process saved successfully.');
        return redirect('/process/index');
    }
    public function delete(Request $request, $id)
    {
        $process = Process::find(base64_decode($id));

        if ($process) {
            $process->is_hidden = '1';
            $process->save();
        }
        parent::successMessage('Process deleted successfully.');
        return redirect('/process/index');
    }
    public function edit(Request $request, $id)
    {
        $process = Process::find(base64_decode($id));

        return view('admin.process.edit', [
            'process' =>  $process,
        ]);
    }
    public function update(Request $request)
    {
        $process = Process::find($request->id);
        $process->title = $request->title;
        $process->save();
        parent::successMessage('Origin updated successfully.');
        return redirect('/process/index');
    }
}
