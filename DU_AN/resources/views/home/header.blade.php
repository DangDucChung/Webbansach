<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
    .row {
        display: flex;
    }

    #img_logo {
        width: 20%;
    }

    #search {
        width: 50%;

    }

    #time {
        width: 20%;
    }

    #user_card {
        width: 10%;
        display: flex;
        list-style: center;
    }

    li {
        list-style: none;
    }

    p {
        margin-top: 10px;
        margin-bottom: 0rem;
    }

    .dropdown {
        padding: 10px;
        display: inline-block;

    }

    .dropdown-menu {
        display: none;
        list-style: none;
        background-color: rgb(255, 255, 255);

    }

    .dropdown:hover .dropdown-menu {
        display: block;
        width: 300px;


    }



    .dropdown-item:hover {
        color: #03A9F4;
    }

    footer {
        padding: 2cm;
    }

    .row1 {
        display: flex;
        justify-content: space-around;

    }

    .logo {
        display: flex;
    }

    .logo img {
        width: 60px;
        height: 50px;
        padding: 5px;
    }

    .logo img:hover {
        background-color: #03a9f4;
    }

    .img img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
        transform: translateX(0px);
        animation: float 6s ease-out infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);

        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }

    }

    .typing-effect {

        width: 22ch;
        text-wrap: nowrap;
        overflow: hidden;
        animation: typing 2s steps(22) infinite alternate-reverse;
    }

    @keyframes typing {
        from {
            width: 0ch;
        }
    }


    .zoom-wrapper {
        height: 200px;
        overflow: hidden;
        border-radius: 16px;
    }

    .zoom-wrapper img {
        object-fit: cover;
        transition: transform 0.8s;
        height: 100%;
    }

    .zoom-wrapper:hover img {
        transform: scale(1.5);
    }

    button {
        background-color: #03A9F4
    }


    #input {
        width: 400px;
    }


    .block{
        display: none;
    }


   
    @media (max-width: 1023px) {
        .row {
            
        }

        #search {
        width: 100%;

    }
    #input{
        width: 100%;
    }


        #time {
            display: none;
        }

       
        
.block{
    display: flex;
}
#user_card2{
    margin-left: auto;
    width: 10%;
        display: flex;
        list-style: center;
    }
    #user_card {
        
        display: none;
    }
     #img_logo{
        display: none;
     }
    }

    @media (max-width: 844px) {
.nav-item{
    display: none;
}
  .dropdown-menu{
    display: none;
  }
}


</style>

<body>
    <header>

        <div class="container" style="margin-top:10px">
            <div class=" row ">
            <div  id="img_logo">
                    <a href="#"><img style="width: 200px; height:70px" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/logo.png?1683776385693" alt=""></a>                
                 </div>

                 <!-- media -->
                <div class="block">
                
                
                <div  id="img_logo1">
                    <a href="#"><img style="width: 200px; height:70px" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/logo.png?1683776385693" alt=""></a>                
                 </div>
                 
                 
                 
                 <div id="user_card2">
                    <div class="logo_user">
                    <li class="nav-item dropdown">
                        <a ><img  style="width:30px; height:30px ; margin-top: 20px;" src="data:image/jpeg;base64,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" alt=""></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php


                            use Illuminate\Support\Facades\Session;

                            $name = Session::get('customer_name');
                            if ($name) {

                                echo '<p style="text-align: center "> ' . $name . ' </p>';
                                echo '<li style="text-align: center " ><a class="dropdown-item" href="/logout"> Đăng Xuất </a></li>';
                                echo '<li style="text-align: center " ><a class="dropdown-item" href="/history"> Lịch Sử đơn hàng </a></li>';
                            } else {
                                echo '<li><a class="dropdown-item" href="/login">Đăng Nhập</a></li>';
                                echo '<li><a class="dropdown-item" href="/register">Đăng Ký</a></li>';
                            }
                            ?>
                        </ul>
                    </li>

                </div>

                    <div class="logo_card">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="dropdown">

                                <a class="nav-link dropdown" href="/shoppingcart"><span id="CartCount" style="color: red; font-size: 15px;" class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span><img style="width:30px; height:30px" src="https://media.istockphoto.com/id/639811872/vi/vec-to/bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-gi%E1%BB%8F-h%C3%A0ng.jpg?s=170667a&w=0&k=20&c=-x6Ppwru9ZmRNHRQqEBjA2RR4sow8hhy21OFmA8Vxr0=" alt=""></a>

                                <div class="dropdown-menu">

                                    <?php
                                    $total = 0;
                                    foreach ((array) session('cart') as $id => $details) {

                                        $total += (int)$details['gia'] * (int)$details['quantity'];
                                    }
                                    echo '<p> Tổng Tiền : ' . number_format($total) . '.000 đ </p>';

                                    ?>
                                    <div>



                                    </div>
                                    @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img style="width: 50px;" src="/public/upload/{{ $details['hinhanh'] }}" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p style="font-size: 10px;">{{ $details['tensach'] }}</p>
                                            <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{url('/cart')}}" class="btn btn-primary btn-block">Thanh Toán</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    </ul>
                </div>
<!-- endmedia -->
                </div>
                <div  id="search">
                    <form method="POST" action="{{url('/search')}}">
                        @csrf
                        <div style="margin-top: 20px;" class="d-flex">
                            <input class="form-control me-2" name="keywords" id="input" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </form>
                </div>



                <div id="time">


                    <a>
                        <div class="typing-effect">
                            <p>Giờ mở cửa (08.00-22.00)</p>
                        </div>
                        <div style="display: flex;">
                            <div class="img"><img src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/hotline.svg?1683776385693" alt=""></div>
                            <div>
                                <p style="font-size:18px;color: #03A9F4;"> 0941231828</p>
                            </div>

                        </div>
                    </a>


                </div>
                <div id="user_card">
                    <div class="logo_user">
                    <li class="nav-item dropdown">
                        <a ><img  style="width:30px; height:30px ; margin-top: 20px;" src="data:image/jpeg;base64,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" alt=""></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php


                           

                            $name = Session::get('customer_name');
                            if ($name) {

                                echo '<p style="text-align: center "> ' . $name . ' </p>';
                                echo '<li style="text-align: center " ><a class="dropdown-item" href="/logout"> Đăng Xuất </a></li>';
                                echo '<li style="text-align: center " ><a class="dropdown-item" href="/history"> Lịch Sử đơn hàng </a></li>';
                            } else {
                                echo '<li><a class="dropdown-item" href="/login">Đăng Nhập</a></li>';
                                echo '<li><a class="dropdown-item" href="/register">Đăng Ký</a></li>';
                            }
                            ?>
                        </ul>
                    </li>

                </div>

                    <div class="logo_card">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="dropdown">

                                <a class="nav-link dropdown" href="/shoppingcart"><span id="CartCount" style="color: red; font-size: 15px;" class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span><img style="width:30px; height:30px" src="https://media.istockphoto.com/id/639811872/vi/vec-to/bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-gi%E1%BB%8F-h%C3%A0ng.jpg?s=170667a&w=0&k=20&c=-x6Ppwru9ZmRNHRQqEBjA2RR4sow8hhy21OFmA8Vxr0=" alt=""></a>

                                <div class="dropdown-menu">

                                    <?php
                                    $total = 0;
                                    foreach ((array) session('cart') as $id => $details) {

                                        $total += (int)$details['gia'] * (int)$details['quantity'];
                                    }
                                    echo '<p> Tổng Tiền : ' . number_format($total) . '.000 đ </p>';

                                    ?>
                                    <div>



                                    </div>
                                    @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img style="width: 50px;" src="../public/upload/{{ $details['hinhanh'] }}" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p style="font-size: 10px;">{{ $details['tensach'] }}</p>
                                            <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="/shoppingcart" class="btn btn-primary btn-block">Thanh Toán</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    </ul>
                </div>
            </div>
        </div>




        <div style=" background-color: #03A9F4;color: aliceblue;margin-top: 1cm;">
            <div class="container" style="display: flex; justify-content: space-around;">


                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown" href="/">
                        TRANG CHỦ
                    </a>

                </li>

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown" href="/gioithieu">
                        GIỚI THIỆU
                    </a>
                    <link rel="stylesheet" href="">

                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown" href="/">
                        SẢN PHẨM
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/truyentranh">Truyện Tranh</a></li>
                        <li><a class="dropdown-item" href="/sachthamkhao">Sách Tham Khảo</a></li>
                        <li><a class="dropdown-item" href="/dungcuhoctap">Dụng Cụ Học Tập</a></li>
                        <li><a class="dropdown-item" href="/dochoi">Đồ Chơi </a></li>
                       
                    </ul>

                </li>
                

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown" href="#">
                        TUYỂN DỤNG
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/ketoannoibo">Kế Toán Nội Bộ</a></li>
                        <li><a class="dropdown-item" href="/giamsatvanhanh">Giám Sát Vận Hành</a></li>

                        <li><a class="dropdown-item" href="/quanliquay">Quản Lí Quầy</a></li>
                        <li><a class="dropdown-item" href="/troligiamdoc">TRỢ LÍ GIÁM ĐỐC</a></li>
                        
                        <li><a class="dropdown-item" href="/nhanvienkiemke">Nhân Viên Kiểm Kê</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown" href="/lienhe">
                        LIÊN HỆ
                    </a>

                </li>




            </div>

        </div>

    </header>
    