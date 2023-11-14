<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body class="container" style="background: #aaffff; border-radius: 12px;padding: 15px;">
    
<h1 style="text-align: center;">Nhà Sách Tiến Thọ</h1>
<h3>Thông tin đơn hàng</h3>
<p>Chào bạn , chúng tôi xác nhận bạn đặt đơn hàng như sau:</p>
<p>Tên:{{$data['shipping_name']}}</p>
<p>SĐT:{{$data['shipping_phone']}}</p>
<p>địa chỉ:{{$data['shipping_address']}}</p>
<p>Tiền:{{$data['order_total']}}</p>
<p>Hình thức thanh toán:
    @if($data['payment_method']==2)
    Thanh toán bằng tiền Mặt
    @else
    Thanh toán bằng thẻ ATM
    @endif


</p>

<h1>SẢN PHẨM ĐÃ ĐẶT</h1>
<div class="card-body">
    <table   class="table table-bordered">
        <tr >
            <th  style="padding-right: 1cm;">Sản phẩm </th>
            <th style="padding-right: 1cm;">Giá tiền</th>
            <th style="padding-right: 1cm;">Số lượng </th>
             <th >Tổng tiền </th>
        </tr>
      
            @foreach($cart_array as $cart)

            <tr>
                <td>{{ $cart['product_name'] }}</td>
                <th>{{ $cart['product_price'] }}</th>
                <th>{{ $cart['product_sales_quantity'] }}</th>
                
                @endforeach 
               <th>{{ $data['total'] }}.000₫</th>
            </tr>  

           
       
          </table>
</div>
    </body>