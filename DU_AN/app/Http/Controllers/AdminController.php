<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function Loginadmin()
    {
        return view('admin/LoginAdmin');
    }
    public function Homeadmin()
    {
        return view('admin/HomeAdmin');
    }
    public function CheckLoginAdmin(Request $request){
        $email = $request->user_email;
        $password = md5($request->user_password);
        $result=DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
    
        if($result){
            Session::put('customer_name',$result-> customer_name);
            Session::put('customer_id',$result-> customer_id);
            return Redirect::to('/homeadmin');
            
              
        }else{ 
             Session::put('message','Đăng nhập thất bại');
            return Redirect::to('/admin');
          
        }  
       }
       public function LogoutAdmin(){
        Session::put('customer_name',null);
        Session::put('customer_id',null);
        Session::flush();
        return Redirect::to('/admin');
           }
    
    


    public function AddBook()
    {
        $category = DB::table('category')->orderBy('category_id','desc')->get();
        return view('admin/AddBook', compact('category'));
       
    }

    public function AllBooks()
    {
        $data = DB::table('books')->join('category','books.category_id','=','category.category_id')
        ->select('books.*','category.category_name')
        ->orderby('books.id','desc')->paginate(4);
        return view('admin/HomeAdmin', compact('data'));
    }
    public function add(Request $request) {
        
        $request->validate([
           
            'ten_sach'         =>  'required',
            'theloai'         =>  'required',
            'tinh_trang'         =>  'required',
            'gia'          =>  'required',
            'hinh_anh'         =>  'required',
            
        ]);

       
        					

        $book = array();

        $book['masanpham'] = substr(md5(microtime()),rand(0,26),5);
        $book['tensach'] = $request->ten_sach;
        $book['category_id'] = $request->theloai;
        $book['tinhtrang'] = $request->tinh_trang;
        $book['gia'] = $request->gia;
        $book['hinhanh'] = $request->hinh_anh;
        $get_image=$request->file('hinh_anh');
        if($get_image){
            $get_name_image= $get_image->getClientOriginalName();
            $name_image= current(explode('.',$get_name_image));
            $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload',$new_image);
            $book['hinhanh'] =  $new_image;
            DB::table('books')->insert($book);
            Session::put('message', 'Thêm thành công');
            return Redirect::to('addbook');;
        }
        $book['hinhanh']='';
        
    DB::table('books')->insert($book);
Session::put('message','Thêm thành công');
return Redirect::to('addbook');
    }

    public function Updatebook($id)
    {
        $category = DB::table('category')->orderBy('category_id','desc')->get();
       
        $updatedata = DB::table('books')->where('id',$id)->get();
        return view('admin/UpdateBook')->with('updatedata',$updatedata) ->with('category',$category);
    }

    public function update(Request $request ,$id)
    {
        $book = array();

        $book['masanpham'] = $request->ma_sanpham;
        $book['tensach'] = $request->ten_sach;
        $book['category_id'] = $request->theloai;
        $book['tinhtrang'] = $request->tinh_trang;
        $book['gia'] = $request->gia;
        $book['hinhanh'] = $request->hinh_anh;
       
    DB::table('books')->where('id',$id)->update($book);
    Session::put('message','Update thành công');
        return Redirect::to('homeadmin');
        
    }

    public function delete(Request $request )
    {
        $id=$request->product_id;
    DB::table('books')->where('id',$id)->delete();
    Session::put('message','Xóa thành công');
        return Redirect::to('homeadmin');
        
    }

    public function Manage_order(){

$all_order=DB::table('tbl_order')
->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
->join('tbl_payment','tbl_order.payment_id','=','tbl_payment.payment_id')
->select('tbl_order.*','tbl_shipping.shipping_name','tbl_shipping.shipping_phone','tbl_payment.payment_method')
->orderby('tbl_order.order_id','desc')->paginate(4);



return view('admin/ManageOrder', compact('all_order'));

    }
    public function Manage_order_delete(Request $request )
    {
        $id=$request->product_id;
    DB::table('tbl_order')->where('order_id',$id)->delete();
    Session::put('message','Xóa thành công');
        return Redirect::to('manage_order');
        
    }


   

    public function ViewOrder($order_id){
       

    
        $order_by_id=DB::table('tbl_order')
        
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_order_details.*')->where('tbl_order.order_id', $order_id)
      ->get();
    
      return view('admin/Vieworder', compact('order_by_id'));
    

    }

    public function Sendmail(){

      
}


public function   Manage_order_confirm(Request $request ,$order_id)
{
   
DB::table('tbl_order')->where('order_id',$order_id)->update(['order_status' => 0]);


$email=DB::table('tbl_order')->where('order_id',$order_id)
        
->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
->select('tbl_shipping.shipping_email')
->first();

        //sendmail
        $to_name = "Dang Duc CHung";
        $to_email=$email->shipping_email;

        $all_order=DB::table('tbl_order')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_order_details','tbl_order_details.order_id','=','tbl_order.order_id')
        ->select('tbl_order.*','tbl_shipping.*','tbl_order_details.*')->where('tbl_order.order_id', $order_id)
        ->first();

        $payment=DB::table('tbl_order')
        ->join('tbl_order_details','tbl_order_details.order_id','=','tbl_order.order_id')
        ->join('tbl_payment','tbl_order.payment_id','=','tbl_payment.payment_id')
        
        ->select('tbl_order.*','tbl_payment.*','tbl_order_details.*')->where('tbl_order.order_id', $order_id)
        ->first();

      
        $order_by_id=DB::table('tbl_order')
        
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
        ->select('tbl_order.*','tbl_order_details.*')->where('tbl_order.order_id', $order_id)
      ->get();
    //   echo'pre';
    //   print_r($order_by_id);
    //   echo'/pre';




      
    $data = array(
        "shipping_name" => $all_order->shipping_name,
        "shipping_phone" => $all_order->shipping_phone,
        "shipping_address" => $all_order->shipping_address,
        "order_total" => $all_order->order_total,
        "payment_method"=> $payment->payment_method,
        
        "total" => $payment->order_total,

    ); //body of mail.blade.php

    foreach ($order_by_id as $order) {
        $cart_array[]=array(
        'product_name'=> $order->product_name,
        'product_price' => $order->product_price,
        'product_sales_quantity' =>$order->product_sales_quantity,
        );
    }


        Mail::send('home.Sendmail', ['cart_array'=>$cart_array,'data'=>$data], function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('Nhà Sách Tiến Thọ');
            $message->from($to_email, $to_name);
        });
return Redirect::to('manage_order');
}

// public function import_csv(){
    
// }

// public function export_csv(){
    
// }
}

  