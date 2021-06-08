<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login_detail;
use App\Contact_detail;
use Session;


class Home extends Controller
{
    public function home()
    {
        return view('home');
    } 

    public function dashboard()
    {
        return view('dashboard');
    } 

    public function login()
    {
    	return view('login');
    }
    public function check_login(Request $request)
    {
        $data=Login_detail::where('username',$request->username)->where('password',$request->password)->first();
        if($data)
        {
            Session::put('user_session',$data);
            return response()->json(1);
        }
        else
        {
         return response()->json(0);
     }
 }

 public function get_allcontact_query()
 {
    return response()->json(Contact_detail::get());
}

public function submit_contact_form(Request $request)
{
$create=Contact_detail::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'mobile'=>$request->mobile,
    'description'=>$request->description,

]);
    return response()->json(1);

}

public function log_out()
{
    Session()->forget('user_session');
    return redirect()->route('login');
}

public function get_data(Request $request)
{
    return $request->data;
}










}

