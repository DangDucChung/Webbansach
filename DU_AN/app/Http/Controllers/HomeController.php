<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function Home()
    {
        return view('home/Home');
    }

    public function AllBooks()
    {
        $truyentranh = DB::table('books')->where('category_id','=','1')->orderBy('id','desc')->paginate(4);
        $sachthamkhao = DB::table('books')->where('category_id','=','4')->get();
        $dungcuhoctap = DB::table('books')->where('category_id','=','2')->get();
        $dochoi = DB::table('books')->where('category_id','=','3')->get();
        return view('home/Home')->with('truyentranh',$truyentranh)
        ->with('sachthamkhao',  $sachthamkhao)
        ->with('dungcuhoctap',$dungcuhoctap)
        ->with('dochoi',$dochoi);
      
    }

    public function Truyentranh()
    {
        $data = DB::table('books')->where('category_id','=','1')->get();
        return view('home/Truyentranh',compact('data'));
      
    }
    public function SachThamKhao()
    {
        $data = DB::table('books')->where('category_id','=','4')->get();
        return view('home/SachThamKhao',compact('data'));
      
    }
    public function DungCuHocTap()
    {
        $data = DB::table('books')->where('category_id','=','2')->get();
        return view('home/DungCuHocTap',compact('data'));
      
    }
    public function DoChoi()
    {
        $data = DB::table('books')->where('category_id','=','3')->get();
        return view('home/DoChoi',compact('data'));
      
    }
    
    public function Search(Request $request)
    {
        $keywords=$request->keywords;
        $search = DB::table('books')->where('tensach','like','%'.$keywords.'%')->get();
        return view('home/Search',compact('search'));
      
    }

    public function Details($id)  {
        $detail= DB::table('books')->where('id',$id)->get();
        $allbook=DB::table('books')->paginate(4);

        return view('home/Detail')->with('detail',$detail)->with('all',$allbook);
        
        
        
    }


    public function Addcart(Request $request)  {
        $id=$request->product_id;
            $data = DB::table('books')->where('id', $id)->first();
     
            $cart = session()->get('cart', []);
          
            if(isset($cart[$id])) {
                
                $cart[$id]['quantity']++;
            }  else {
                $cart[$id] = [
                    "id" => $data->id,
                    "gia" => $data->gia,
                    "hinhanh" => $data->hinhanh,
                    "tensach" => $data->tensach,
                    "quantity" => 1
                ];
            }
     
            session()->put('cart', $cart);
           echo'pre';
            print_r($cart);
            echo'/pre';
           
            return redirect()->back()->with('success', 'Product add to cart successfully!');
        
        
        
    }
    public function update(Request $request )
    {
        
        $cart = Session::get('cart'); // Lấy giỏ hàng từ session
        $id=$request->product_id;
        $quantity=$request->soluong;
        

        
        if ($cart && isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            // Cập nhật số lượng sản phẩm trong giỏ hàng
            Session::put('cart', $cart); // Lưu giỏ hàng vào session
          
        }

        return view('home/ShoppingCart');
    }



        
        
 
    public function remove(Request $request)
    {
        $cart = Session::get('cart'); // Lấy giỏ hàng từ session
        $id=$request->product_id;
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
            return view('home/ShoppingCart');
        }
            


    }

    public function Shoppingcart()  {
       

        return view('home/ShoppingCart');
        
        
        
    }
    public function History()  {
       
        $customer =Session::get('customer_id');
        
 
   
   



$chitiet=DB::table('tbl_order_details')
        
->select('tbl_order_details.*')->where('customer_id', $customer)

->get();


return view('home/History',compact('chitiet'));
 
     
        
        
        
    }
    public function Thanhtoan()  {
       
        
       return view('home/Thanhtoan');
    
        
    }

    public function End()  {
       
       
        return view('home/End');
     
         
     }
     public function ATM()  {
       
       
        return view('home/ATM');
     
         
     }

     public function Giamsatvanhanh()  {
       
       
        return view('tuyendung/Giamsatvanhanh');
     
         
     }
     public function Ketoannoibo()  {
       
       
        return view('tuyendung/Ketoannoibo');
     
         
     }
     public function Nhanvienkiemke()  {
       
       
        return view('tuyendung/Nhanvienkiemke');
     
         
     }
     public function Quanliquay()  {
       
       
        return view('tuyendung/Quanliquay');
     
         
     }
     public function Troligiamdoc()  {
       
       
        return view('tuyendung/Troligiamdoc');
     
         
     }

     public function Lienhe()  {
       
       
        return view('home/Lienhe');
     
         
     }
     public function Gioithieu()  {
       
       
        return view('home/Gioithieu');
     
         
     }






    public function Shipping(Request $request)
    {//shipping
        $data=array();
        $data['shipping_name']=$request->shipping_name;
        $data['shipping_address']=$request->shipping_address;
        $data['shipping_phone']=$request->shipping_phone;
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_note']=$request->shipping_note;
 $shipping_id=DB::table('tbl_shipping')->insertGetId($data);
 Session::put('shipping_id',$shipping_id);
//payment
        $data1=array();
        $data1['payment_method']=$request->payment_option;
        $data1['payment_status']='Đang chờ xử lí';
        $payment_id=DB::table('tbl_payment')->insertGetId($data1);
        Session::put('payment_id',    $payment_id);
        //insert order
       
        $cart = Session::get('cart', []);   
         $total=0;
        foreach($cart as $details){
           
            $total +=(int)$details['gia']* (int)$details['quantity'];
         }
        

        $order_data=array();
        $checkout_code = substr(md5(microtime()),rand(0,26),5);
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = $total;
        $order_data['order_status'] = '1';
        $order_data['order_code'] = $checkout_code;
        $order_id = DB::table('tbl_order')->insertGetId( $order_data);

 //insert order_detail

 foreach($cart as $details){

    $order_details['customer_id'] = Session::get('customer_id');
    $order_details['order_id'] = $order_id;
    $order_details['product_id'] = $details['id'];
    $order_details['product_name'] =$details['tensach'];
    $order_details['product_price'] = $details['gia'];
    $order_details['product_sales_quantity'] = $details['quantity'];
    $order_details['order_code'] = $checkout_code;
DB::table('tbl_order_details')->insert($order_details);
 }
 
 if($data1['payment_method']==1){
    return view('home/ATM');
 }else{
    return view('home/End');
 }





    }
   



}
