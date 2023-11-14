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
</head>
<div> 
        <div class="card-body">
            <table class="table table-bordered">
                <a href="/#"><button type="button" class="btn btn-primary">QUAY LẠI</button></a>
                <tr>
                <tr><h1 style="text-align: center;">Liệt kê chi tiết đơn hàng  </h1></tr>
                    <th>Tên sản phẩm  </th>
                    <th>Số lượng </th>
                    <th>Giá</th>
                    
                    
                </tr>
                
                <tr> 
                       @foreach($chitiet as $row)
                    <th>{{$row->product_name}}</th>
                    <th>{{$row->product_sales_quantity}}</th>
                    <th>{{$row->product_price}}</th>
                    
                </tr>
                  @endforeach
                  <?php
                $total=0;
                foreach($chitiet as $row){
                
                $total +=$row->product_price* $row->product_sales_quantity;
                
               
                 }
                echo '<th> Tổng Tiền : '.number_format($total).'.000 đ </th>';
            ?>
                
               
</div>   
