@include('home/header')
    
        <!-- CSS only -->
        <style>
            

           

            .center-text {
                width: 300px;
                height: 50px;
                font-size: 24px;
                line-height: 50px;
                color: #03A9F4;
                background-color: rgb(234, 228, 228);
                border: solid 1px lightgray;
            }
        </style>

    <body>

        <div style="margin-left: 15%;margin-right: 15%;margin-top: 20px;">
            <div style="display: flex;justify-content: space-between;">
                @foreach($detail as $row)
                
                <div style="width: 25%;">
                    <img src="../public/upload/{{ $row->hinhanh }}" style="width:100%;" alt="ảnh">
                </div>
                <div style="width: 50%;">
                    <div style="font-size:13px ; ">
                        <h2>{{$row->tensach}}</h2>

                        <p>Mã sản phẩm: &emsp;&emsp;<span style="color: #03A9F4;"> {{$row->masanpham}} </span></p>

                        <p>Tình trạng : &emsp;&emsp;<span style="color: #03A9F4;"> {{$row->tinhtrang}} </span></p>


                        <h3 class="center-text">{{$row->gia}}.000đ </h3>
                        <br />

                        

                        <button data-id_cart="{{ $row->id }}"  type="button" class="btn btn-primary btn-lg" style="background-color:#03A9F4 ; ">THÊM VÀO GIỎ</button>
                    </div>
                </div>
                @endforeach

               
                <div style="width: 20%;">

                    <div class="card" style="width: 18rem;">
                        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                        <!-- <div class="card-body"> -->
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <!-- </div> -->

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item" style="background-color: #03A9F4 ;"><a href="" style="text-decoration: none; color: #FFFFFF;"> CÓ THỂ BẠN QUAN TÂM </a></li>

                            <li class="list-group-item">
                                 @foreach($all as $quantam)
                                <div style="display: flex;justify-content: space-around;">
                                    <div style="width: 30%;">
                                        <img src="../public/upload/{{$quantam->hinhanh}}" style="width:100%;">
                                    </div>
                                    <div style="width: 60%;">
                                        <p>{{$quantam->tensach}}</p>
                                        <p style="color: #03A9F4;">{{$quantam->gia}}.000đ <del style="color:#8a8a8a ;">135.000₫</del></p>
                                    </div>
                                </div>
                                @endforeach
                            </li>
                          
                        </ul>
                        
                        <script type="text/javascript">
                    $(document).ready(function() {
        
        $(".btn-lg").click(function (e) {
            var product_id = $(this).data('id_cart');
            console.log(product_id);
           
               $.ajax({
                method: "POST",// phương thức dữ liệu được truyền đi
                    url: "/addcart",// gọi đến file server show_data.php để xử lý
                    data: {_token: '{{ csrf_token() }}',product_id: product_id, },//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                    success : function(response){//kết quả trả về từ server nếu gửi thành công
                        alert("Đã thêm thành công!!");
                        location.reload();
                    }
                });
               
        
            }); 
           
       });
       </script> 
                    </div>
                </div>

            </div>

        </div>


       
    </body>
    <div style="margin-top: 300px;">
    @include('home/footer')</div>
    </html>