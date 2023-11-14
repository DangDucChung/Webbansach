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
<style>
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


    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="/homeadmin">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="/homeadmin">Liệt kê sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manage_order">Liệt kê đơn hàng</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/">Trang ngoài</a>
                       

                    </ul>
                    <div   class="h3">
                    <li  class="nav-item dropdown">
                        <a style="margin-left: 150px;" class="nav-link dropdown" href="#"><img style="width:30px; height:30px" src="data:image/jpeg;base64,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" alt=""></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <?php


                                use Illuminate\Support\Facades\Session;

                                $name= Session::get('customer_name');
                                if ($name) {
                                    echo '<p style="text-align: center ">'.$name.'</p> ';
                                    
                                }
                                ?>

                            </li>
                            <li  style="text-align: center "><a class="dropdown-item" href="/logout_admin">Đăng Xuất</a></li>

                        </ul>
                    </li>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </nav>

    </header>
    <main>
      <h1>ĐƠN HÀNG</h1>

        <?php


        

        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Tên người đặt</th>
                    <th>Số điện thoại</th>
                    <th>Ngày tháng đặt đơn</th>
                    <th>Tổng giá tiền </th>
                    <th>Thanh Toán </th>
                    <th>Tình trạng</th>
                    <th>Hiển thị</th>
                    
                </tr>
                @foreach($all_order as $row)

                <tr>


                    <td>{{ $row->shipping_name}}</td>
                    <td>{{ $row->shipping_phone}}</td>
                    <td>{{ $row->created_at}}</td>
                    <td> {{ $row->order_total }}.000₫</td>
                    <?php
                     if( $row->payment_method ==1){
                        echo '<td>';
                        echo "Thanh toán bằng thẻ ATM";
                        echo'</td>';}
                        else {
                            echo '<td>';
                           echo"Thanh toán bẳng tiền mặt";
                           echo'</td>';
                        }

                     
                    ?>
                   
                 
                    <td>
                        @if($row->order_status==1)
                           <a href="{{url('/manage_order_confirm',[$row->order_id])}}" class="btn btn-primary btn-block">Xác nhân</a>
                        
                    
                @else 
                Đã xử lý
                   
                @endif
            </td>
                   
                    
                    <td>

                        <a href="{{url('/view_order',[$row->order_id])}}" class="btn btn-primary btn-block">Chi tiết</a>
                        <button class="btn btn-danger btn-sm cart_remove" data-id_cart_remove="{{ $row->order_id }}"> <i class="fa fa-trash-o"></i>Delete </button>
                        <td class="actions">
                           

                        </td>


                    </td>
                </tr>
               
                @endforeach
 {{$all_order->links()}}

        </div>

        </div>

        <script type="text/javascript">
                
   
    $(document).ready(function() {
        
    $(".cart_remove").click(function (e) {
        var product_id = $(this).data('id_cart_remove');
        console.log(product_id);
       
           $.ajax({
            method: "POST",// phương thức dữ liệu được truyền đi
				url: "/manage_order_delete",// gọi đến file server show_data.php để xử lý
                data: {_token: '{{ csrf_token() }}',product_id: product_id, },//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){//kết quả trả về từ server nếu gửi thành công
					alert("XÓa Thành công");
                    location.reload();
				}
			});
			
	
        }); 
       
   });
</script>
    </main>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>