<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index(){

        return view('auth.login');
    }

    public function auth(Request $request){
        //  dd($request->all());
      
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            $notification = array(
                'status' => 'check_success',
                'title' => 'Login ถูกต้อง',
                'message' => 'Login ถูกต้อง',

            );  
            
            $id = Auth::user()->id;

            $update = User::find($id);
            $update->updated_at = now();
            $update->save();

            return redirect()->intended('/dashboard')->with($notification);
        }

        $notification = array(
                'status' => 'error',
                'title' => 'ไม่สามารถเข้าสู่ระบบได้',
                'message' => 'Username / Password ไม่ถูกต้อง',
        );
        return back()->with($notification);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $notification = array(
            'status' => 'check_success',
            'title' => 'ออกจากระบบเรียบร้อย',
            'message' => 'คุณได้้ออกจากระบบเสร็จเรียบร้อย'
        );

        return redirect('/login')->with($notification);
    }    
}
