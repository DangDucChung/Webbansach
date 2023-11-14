<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang-ki</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    *{
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #141414;
        font-size: 12px;
    }
    h3{
        text-align: center;
    }
    .banner{
          display: flex;
          max-width: 129px;
          height: auto;
          margin-left: 16.5cm;
          margin-right: 16.5cm;
          border-spacing: 2cm;
        }
        .content{
            margin-left: 12.5cm;
            margin-right: 12.5cm;
        }
    .row4{
        display: flex;
    }
    
    
    </style>
</head>

<body>
    <h3>ĐĂNG KÍ TÀI KHOẢN </h3>

    <form method="POST" action="{{url('/add_register')}}">
    @csrf
    <div class="banner">

        <img src="fb-btn.svg">
        <img src="gp-btn.svg">
    </div>
    <div class="content">
    <div class="row4">
        <div>
        <p>TÊN ĐĂNG NHẬP*</p>
        <input style="width: 600px;height: 40px;" aria-label="Nhập tên " type="ten"
                class="form-control" placeholder="Nhập tên " name="ten" required=""
                autocomplete="off">
    
        </div>
       
    </div>
    <div class="row1">
        <p>SỐ ĐIỆN THOẠI*</p>
        <input style="width: 600px;height: 40px;" aria-label="Nhập số điện thoại " type="tel"
                class="form-control" placeholder="Nhập số điện thoại " name="sodienthoai" required=""
                autocomplete="off">
    </div>
    <div class="row2">
    <p>Email*</p>
        <input style="width: 600px;height: 40px;" aria-label="Nhập Email " type="email"
                class="form-control" placeholder="Nhập Email " name="email" required=""
                autocomplete="off">
    </div>
    <div class="row3">
    <p>Password*</p>
        <input style="width: 600px;height: 40px;" aria-label="Nhập mật khẩu " type="password"
                class="form-control" placeholder="Nhập Email " name="password" required=""
                autocomplete="off">
    </div>
    <br>
    <div class="d-grid gap-2">
        <button class="btn btn-primary" style="width: 600px; height: 40px; background-color: #03a9f4; " type="submit" >Tạo tài khoản</button>
        <a style="text-align: center ; text-decoration: none; color: #03a9f4; " href="/login">ĐĂNG NHẬP</a>
      </div>
      </div>
</form>
</body>

</html>