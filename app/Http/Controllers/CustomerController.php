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
        $customers      =   $customers->where('is_hidden', '0')->where('is_admin','!=','0')->skip((int)$start)->take((int)$length)->get();
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
            $validator      =   $request->validate([
            'email'         => 'required|email|unique:users',
            'name'          => 'required',
            // 'phone_no'      => 'required|max:12',
            'password'      => 'required',
            'status'        => 'required',
            'paddle_number' => 'required|min:4|unique:users',
            'role'          => 'required'
            // 'bid_limit' => 'required|min:2|alpha_dash|max:255',
        ]);
        $customer = new  User();
        $password                   =   $request->password;
        $customer->name             =   $request->name;
        $customer->email            =   $request->email;
        $customer->phone_no         =   $request->phone_no;
        $customer->password         =   Hash::make($request->password);
        $customer->bid_limit        =   $request->bid_limit;
        $customer->paddle_number    =   $request->paddle_number;
        $customer->status           =   $request->status;
        $customer->is_admin         =   $request->role;
        $customer->company          =   $request->company;

        $customer->save();
        $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email'       => $request->email,
              'token'       => $token,
              'created_at'  => Carbon::now()
            ]);
          Mail::send('emails.passwordreset', ['token' => $token,'customer' => $customer,'password'=>$password], function($message) use($request){
              $message->to($request->email);
              $message->subject('Your Best of Yemen Login Credentials & Practice Auction Link');
              $message->from('noreply@mg.bestofyemenauction.com','Best of Yemen');
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
        $validator  =   $request->validate([
            'email'         => 'required|email',
            'name'          => 'required',
            'phone_no'      => 'required|max:12',
            'password'      => 'required',
            'status'        => 'required',
            'paddle_number' => 'required|min:4|',
            'role'          => 'required'
            // 'bid_limit' => 'required|min:2|alpha_dash|max:255',
        ]);
        $customer                   =   User::find($request->id);
        $customer->name             =   $request->name;
        $customer->email            =   $request->email;
        $customer->phone_no         =   $request->phone_no;
        $customer->password         =   Hash::make($request->password);
        $customer->bid_limit        =   $request->bid_limit;
        $customer->status           =   $request->status;
        $customer->paddle_number    =   $request->paddle_number;
        $customer->is_admin         =   $request->role;
        $customer->company          =   $request->company;

        $customer->save();
        return redirect('/customer/index');
    }
    public function passwordReset($token)
    {
        return view('auth.passwords.reset',['token' => $token,]);
    }
    public function resendEmail($id)
    {
        $newpass     =   Hash::make('12345678');
        $newPassword = User::where('id', $id)->update([
            'password' => $newpass
        ]);

        $user = User::where('id',$id)->first();
        $customer=array();
        // $customer['password']    =   $user->password;
        $customer['name']        =   $user->name;
        $customer['email']       =   $user->email;
        $customer['paddle_number']       =   $user->paddle_number;
        $password           =   '12345678';
        $token = Str::random(64);
          DB::table('password_resets')->insert([
              'email'       => $user->email,
              'token'       => $token,
              'created_at'  => Carbon::now()
            ]);
            Mail::send('emails.passwordreset', ['token' => $token,'customer' => $customer,'password'=>$password], function($message) use($user){
                $message->to($user->email);
              $message->subject('Your Best of Yemen Login Credentials & Practice Auction Link');
              $message->from('noreply@mg.bestofyemenauction.com','Best of Yemen 2022');
          });
        return redirect('/customer/index')->with('Email Resend Successfuly');
    }
}
