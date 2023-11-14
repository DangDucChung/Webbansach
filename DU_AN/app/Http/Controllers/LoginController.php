<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
   public function Login(Request $request){
return view('home/LoginUser');

   }

   public function Layout_home(){
    $data = DB::table('books')->get();
    return view('home/Logout_home',compact('data'));
    
       }
   public function Register(Request $request){
    return view('home/RegisterUser');
   }

   public function AddRegister(Request $request){
    $request->validate([
        'ten'          =>  'required',
        'sodienthoai'         =>  'required',
        'email'         =>  'required',
        'password'         =>  'required',
       
        
    ]);

   
                        

    $customer = array();

    $customer['customer_name'] = $request->ten;
    $customer['customer_phone'] = $request->sodienthoai;
    $customer['customer_email'] = $request->email;
    $customer['customer_password'] = md5($request->password);
    
$customer_id=DB::table('tbl_customers')->insertGetId($customer);
Session::put('customer_id',$customer_id);
return Redirect::to('/');
   }

   public function CheckLogin(Request $request){
    $email = $request->user_email;
    $password = md5($request->user_password);
    $result=DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();

    if($result){
        Session::put('customer_name',$result-> customer_name);
        Session::put('customer_id',$result-> customer_id);
        return Redirect::to('/');
        
          
    }else{ 
         Session::put('message','Đăng nhập thất bại');
        return Redirect::to('/login');
      
    }  
   }
   public function Logout(){
    Session::put('customer_name',null);
    Session::put('customer_id',null);
    Session::flush();
    return Redirect::to('/');
       }

}
