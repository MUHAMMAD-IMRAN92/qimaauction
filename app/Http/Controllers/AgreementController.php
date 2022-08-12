<?php

namespace App\Http\Controllers;

use App\Models\AcceptAgreement;
use App\Models\Agreement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AgreementController extends Controller
{
    public function agreement(Request $request)
    {

        if($request->submit)
        {
            $data = $request->except('_method', '_token','submit');
            // dd($data);
            $a =0;
            $c=1;
            $arr = [];
            foreach ($data as $key => $value) {
                Storage::disk('public')->put('agreement'.$a, $data['detail'][$a]);
                   Agreement::where('id',$c)->update(
                    [
                       'title' => $data['title'][$a],
                       'slug' => $data['slug'][$a],
                    ]
                   );
                ++$c;
                ++$a;
            }
        }

        $agreement = Agreement::all();
        return view('admin.agreement',compact('agreement'))->with('success','Updated Successfully');
        // return back()
        //     ->with('success','You have successfully upload file.')
        //     ->with('file',$fileName);
    }
    public function acceptAgreement(Request $request)
    {
        $user                           =   Auth::user()->id;
        $agrement                       =   new AcceptAgreement();
        $agrement->user_id              =   $user;
        $agrement->privacy_policy_id    =   1;//$request->privacy_policy_id;
        $agrement->terms_conditions_id  =   2;//$request->terms_conditions_id;
        $agrement->bid_agrement_id      =   $request->bid_agrement_id;
        $agrement->save();
        return back()->with('success','Agreement saved successfully.');
    }
}
