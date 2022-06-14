<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\PasswordResetMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.customers.index');
    }

    public function allCustomer(Request $request)
    {
        $draw           =   $request->get('draw');
        $start          =   $request->get('start');
        $length         =   $request->get('length');
        $search         =   $request->search['value'];
        $customer_count =   User::when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%")->where('is_hidden', '0');
        })->count();
        $customers      =   User::when($search, function ($q) use ($search) {
            $q->where('name', 'LIKE', "%$search%");
        });
        $customers      =   $customers->where('is_hidden', '0')->where('is_admin','1')->skip((int)$start)->take((int)$length)->get();
        $data = array(
            'draw' => $draw,
            'recordsTotal'      => $customer_count,
            'recordsFiltered'   => $customer_count,
            'data' => $customers,
        );
        return response()->json($data);
    }

    public function create()
    {
        return view('admin.customers.create');
    }

    public function save(Request $request)
    {
        $validator  =   $request->validate([
            'email'     => 'required|email|unique:users',
            'name'      => 'required',
            'phone_no'  => 'required',
            'password'  => 'required',
            'bid_limit' => 'required',
        ]);
        $customer = new  User();
        $password               =   $request->password;
        $customer->name         =   $request->name;
        $customer->email        =   $request->email;
        $customer->phone_no     =   $request->phone_no;
        $customer->password     =   Hash::make($request->password);
        $customer->bid_limit    =   $request->bid_limit;
        $customer->save();
        $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email'       => $request->email,
              'token'       => $token,
              'created_at'  => Carbon::now()
            ]);
          Mail::send('emails.passwordreset', ['token' => $token,'customer' => $customer,'password'=>$password], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
              $message->from('noreply@mg.bestofyemenauction.com','QIMA Coffee');
          });
        return redirect('/customer/index');
    }

    public function showResetPasswordForm($token) {
        return view('customer.forgetPasswordLink', ['token' => $token]);
     }
     public function submitResetPasswordForm(Request $request)
     {
         $request->validate([
             'email' => 'required|email|',
             'password' => 'required|string|min:6|confirmed',
             'password_confirmation' => 'required'
         ]);

         $updatePassword = DB::table('password_resets')
                             ->where([
                               'email' => $request->email,
                               'token' => $request->token
                             ])
                             ->first();

         if(!$updatePassword){
             return back()->withInput()->with('error', 'Invalid token!');
         }

         $customer = User::where('email', $request->email)
                     ->update(['password' => Hash::make($request->password)]);

         DB::table('password_resets')->where(['email'=> $request->email])->delete();

         return redirect('/customer-login')->with('message', 'Your password has been changed!');
     }

     public function customerLogin()
     {
        return view('auth.login');
     }
    public function edit(Request $request, $id)
    {
        $customer = User::find(base64_decode($id));

        return view('admin.customers.edit', [
            'customer' =>  $customer,
        ]);
    }

    public function update(Request $request)
    {
        $customer               =   User::find($request->id);
        $customer->name         =   $request->name;
        $customer->email        =   $request->email;
        $customer->phone_no     =   $request->phone_no;
        $customer->password     =   $request->password;
        $customer->bid_limit    =   $request->bid_limit;
        $customer->save();
        return redirect('/customer/index');
    }
    public function passwordReset($token)
    {
        return view('auth.passwords.reset',['token' => $token,]);
    }
}
