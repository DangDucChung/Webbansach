<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<style>
    * {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #141414;
        font-size: 12px;
    }

    h3 {
        text-align: center;
    }

    .banner {
        display: flex;
        max-width: 129px;
        height: auto;
        margin-left: 16.5cm;
        margin-right: 16.5cm;
        border-spacing: 2cm;
    }

    .content {
        margin-left: 12.5cm;
        margin-right: 12.5cm;
    }

    .row4 {
        display: flex;
    }
</style>

<body>

    <main>
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->


        <h3>ĐĂNG NHẬP</h3>



        <form method="POST" action="{{url('/check_login')}}">
            @csrf
            
            <div class="banner">

                <img src="fb-btn.svg">
                <img src="gp-btn.svg">
            </div>
            <div class="content">
                <div class="row4">


                </div>

                <div class="row2">
                    <p>Email*</p>
                    <input style="width: 600px;height: 40px;" aria-label="Nhập Email " type="email" class="form-control" placeholder="Nhập Email " name="user_email" required="" autocomplete="off">
                </div>
                <div class="row3">
                    <p>Password*</p>
                    <input style="width: 600px;height: 40px;" aria-label="Nhập mật khẩu " type="password" class="form-control" placeholder="Nhập Email " name="user_password" required="" autocomplete="off">
                </div>
                <div style="color: red;font-size: 15px;">
                <?php


                use Illuminate\Support\Facades\Session;

                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
                ?></div>

                <br>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" style="width: 600px; height: 40px; background-color: #03a9f4; " type="submit">ĐĂNG NHẬP</button>

                </div>
            </div>
        </form>
        <div class="card-footer">
            <div class="d-flex justify-content-center ">
                Don't have an account?<a href="/register" class="text-warning text-decoration-none">Sign Up</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
            </div>
        </div>
        </div>
        <a style="text-align: center; text-decoration: none;  font-size: 20px;" href="/">
            <<< Quay lại</a>
                </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>