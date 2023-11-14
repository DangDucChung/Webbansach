@include('home/header')

<body>

    <div class="container" style="display: flex;">
        <div style="width: 70%;">

            <h1>Giỏ hàng</h1>
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)

            <tr data-id="{{ $id }}">
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="public/upload/{{  $details['hinhanh'] }}" width="100" height="100" class="img-responsive" /></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['tensach'] }}</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">giá:{{ $details['gia']  }}.000 ₫</h4>
                        </div>
                        <div style="display: flex;">

                <td data-th="Quantity">

                    <input style="width: 2cm;margin-right: 1cm;" type="number" id="soluong" data-id_cart_update="{{ $details['id'] }}" value="{{ $details['quantity'] }}" name="soluong" class="form-control quantity cart_update" min="1" />

                </td>


                <td class="actions">
                    <button class="btn btn-link cart_remove" data-id_cart_remove="{{ $details['id'] }}"> <i class="fa fa-trash-o"></i>Xóa </button>

                </td>

        </div>
        </td>
        </tr>
        </div>
    
    

        @endforeach
        @endif

        <script type="text/javascript">
            $(document).ready(function() {
                $('.cart_update').change(function() {

                    var product_id = $(this).data('id_cart_update'); // Lấy ID sản phẩm từ phần tử cha
                    var soluong = $(this).val(); // Lấy số lượng mới từ phần tử anh em
                    console.log(soluong);
                    console.log(product_id);
                    $.ajax({
                        method: "POST", // phương thức dữ liệu được truyền đi
                        url: "/update-cart", // gọi đến file server show_data.php để xử lý
                        data: {
                            _token: '{{ csrf_token() }}',
                            product_id: product_id,
                            soluong: soluong
                        }, //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                        success: function(response) { //kết quả trả về từ server nếu gửi thành công
                            console.log(response);
                            location.reload();
                        }
                    });

                });
            });

            $(document).ready(function() {

                $(".cart_remove").click(function(e) {
                    var product_id = $(this).data('id_cart_remove');
                    console.log(product_id);

                    $.ajax({
                        method: "POST", // phương thức dữ liệu được truyền đi
                        url: "/remove-session", // gọi đến file server show_data.php để xử lý
                        data: {
                            _token: '{{ csrf_token() }}',
                            product_id: product_id,
                        }, //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                        success: function(response) { //kết quả trả về từ server nếu gửi thành công

                            location.reload();
                        }
                    });


                });

            });
        </script>





        <div class="container" style="width: 40%; margin-top: 2cm; ">
            <div style="display: flex; justify-content: space-around;">

                
                <?php
                $total=0;
                foreach((array) session('cart') as $id => $details){
                
                $total +=(int)$details['gia']* (int)$details['quantity'];
                
               
                 }
                echo '<p> Tổng Tiền : '.number_format($total).'.000 đ </p>';
            ?>
              
                
                   
                <h4 style="color: blue;">



                </h4>
            </div>
            <div style="text-align: center;">
                <a href="/thanhtoan"><button style="width: 500px;height: 46px;margin-bottom: 10px;" class="btn btn-primary" type="submit"> THANH TOÁN NGAY</button>
            </div></a>
            <div style="text-align: center;"> <a href="/"><button style="width: 500px;height: 46px;" class="btn btn-outline-primary">TIẾP
                        TỤC MUA HÀNG</button></div></a>
        </div>
        </tbody>




        </form>

    </div>





    </div>

    </div>



</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div style="margin-top: 300px;">
    @include('home/footer')</div>
</html>