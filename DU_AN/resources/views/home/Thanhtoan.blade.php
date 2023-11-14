<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <form method="POST" action="/shipping">
        @csrf
        <div class="container" style="display: flex;">
            <div style="width: 60%;justify-content: space-around;">
                <div style="text-align: center;">
                    <img src="logo.webp" alt="">
                </div>

                <div style="display: flex;">
                    <h4>Thông tin nhận hàng</h4>
                    <a style="margin-left: 2cm;text-decoration: none;" href="">Đăng nhập</a>

                </div>
                <div style="display: flex;">
                    <div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">EMAIL*</label>
                            <input name="shipping_email" style="width: 387px;height: 44px;" type="email" class="form-control" placeholder="Nhập Địa chỉ email" id="exampleInputEmail1" aria-describedby="emailHelp" required="" autocomplete="off">

                        </div>
                        <div class="mb-3">
                            <input name="shipping_name" type="hovaten" class="form-control" placeholder="Họ và tên" id="exampleInputEmail1" aria-describedby="emailHelp" required="" autocomplete="off">

                        </div>
                        <div class="mb-3">
                            <input name="shipping_phone" type="sdt" pattern="\d{10}$" class="form-control" placeholder="Số điện thoại (tùy chọn)" id="exampleInputEmail1" aria-describedby="emailHelp" required="" autocomplete="off">

                        </div>
                        <div class="mb-3">
                            <input name="shipping_address" type="diachi" class="form-control" placeholder="Địa chỉ (tùy chọn)" id="exampleInputEmail1" aria-describedby="emailHelp" required="" autocomplete="off">

                        </div>




                        <div class="mb-3">
                            <input name="shipping_note" style="height: 100px;" type="diachi" class="form-control" placeholder="Ghi chú (tùy chọn)" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>

                    <div style="margin-left: 1cm;">
                        <p>Vận chuyển</p>
                        <div class="mb-3">
                            <input style="width: 300px;height: 44px;background-color: rgb(242, 164, 164);" type="" class="form-control" placeholder="Khu vực không hỗ trợ vận chuyển">
                        </div>
                        <p>Thanh Toán</p>
                        <div>
                            <span>
                                <label><input name="payment_option" type="checkbox" value="1">Trả bằng thẻ ATM</label>
                            </span>
                            <span>
                                <label><input name="payment_option" type="checkbox" value="2">Trả bằng tiền mặt</label>
                            </span>

                        </div>

                    </div>
                </div>
                <hr>

            </div>
            <div style="width: 40%; height: 100%;">
                <h1>Đơn hàng </h1>
                <div style=" display: flex;   ">
                    <div>
                        <img width="50px" src="1.webp" alt="">
                    </div>

                    <div style="margin-left: 10px">
                        <a style="text-decoration: none;color: black;" href="">1% & 99% - Tài Năng Mồ Hôi Và Nước Mắt</a>
                        <p>Thương hiệu: NXB Lao Động</p>

                    </div>
                    <div style="margin-left: 50px;">
                        <p>... </p>
                    </div>




                </div>
                <hr>
                <div class="input-group">
                    <input style=" height:60px" aria-label="Địa chỉ Email" type="email" class="form-control" placeholder="Nhập mã giảm giá" name="EMAIL" autocomplete="off">
                    <span class="input-group-append">
                        <button style="background-color: #EF3F3F;height:60px" class="btn btn-default" type="submit" aria-label="Áp dụng" name="subscribe">Áp dụng
                        </button>
                    </span>
                </div>

               

                
                    <?php $total=0 ;
                    $tong=0;
                   
                    foreach((array) session('cart') as $id => $details){
                     $total +=(int)$details['gia']* (int)$details['quantity'];
                    $tong +=(int)$details['gia']* (int)$details['quantity']+30;
                   
                    
                }
               echo' <hr>';
                echo '<div style="display: flex;justify-content:  space-around;">';
                echo '<p>Tạm tính: '.number_format($total, 0, ',', '.').'.000 ₫</p>';
               echo '</div>';
               echo '<div style="display: flex;justify-content:  space-around;">';
                echo'<p>Phí vận chuyển:30.000 ₫</p>';
                echo '</div>';
                echo' <hr>';
                echo '<div style="display: flex;justify-content:  space-around;">';
                echo '<p>Tổng cộng: '.number_format($tong, 0, ',', '.').'.000 ₫</p>';
                echo '</div>';
                echo' <hr>';
?>             
                
                <div style="display: flex;justify-content:  space-around;">
                    <a href="/shoppingcart">Quay về giỏ hàng</a>
                    <button style="background-color: #EF3F3F;height:60px" class="btn btn-default" type="submit" aria-label="Đặt hàng" name="subscribe">Đặt hàng
                    </button>
                </div>
                <hr>


            </div>

        </div>
    </form>
</body>

</html>