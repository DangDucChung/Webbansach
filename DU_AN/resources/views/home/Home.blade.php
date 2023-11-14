@include('home/header')
<style>
    .body_card{
        display: grid;
        grid-template-columns: auto auto auto auto  ;
    }
   /* @keyframes sparkling {
  0% { color: red; text-shadow: 0 0 5px red; }
  25% { color: blue; text-shadow: 0 0 5px blue; }
  50% { color: green; text-shadow: 0 0 5px green; }
  75% { color: yellow; text-shadow: 0 0 5px yellow; }
  100% { color: purple; text-shadow: 0 0 5px purple; }
} */
.card{
    width: 300px;
}
.nhapnhay {
  animation: sparkling 1s infinite;
  font-size: 60px ; text-decoration: none;
}

@media (max-width: 1023px) {
.body_card{
        display: grid;
        grid-template-columns: auto auto auto auto  ;
    }
.card{
    width: 160px;
}
}
@media (max-width: 844px) {
.body_card{
        display: grid;
        grid-template-columns: auto auto  ;
    }
.card{
    width: 190px;
  
}

}

</style>
<body>
    <div>
        <img style="border: 0 none;  max-width: 100%;height: auto;" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/slider_1.jpg?1683776385693" alt="">


    </div>
    <div style="background-color: white;">
        <div class="container">
            <div  style="padding-top: 0.2cm;" class="row1">
                <img style="width: 24.5%;height: 141.09px;" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/feature_cate_image_1.jpg?1683776385693" alt="">
                <img style="width: 24.5%;height: 141.09px;" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/feature_cate_image_1.jpg?1683776385693" alt="">
                <img style="width: 24.5%;height: 141.09px;" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/feature_cate_image_2.jpg?1683776385693" alt="">
                <img style="width: 24.5%;height: 141.09px;" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/feature_cate_image_3.jpg?1683776385693" alt="">
            </div>


            <!-- <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div> -->
            <div>
                <a class="nhapnhay"  href="/truyentranh" title="TRUYỆN TRANH">Truyện Tranh</a>
                <div class="body_card" >

                    @foreach($truyentranh as $row)


                    <div class="card" >
                    <div class="zoom-wrapper">
                        <a href="{{url('/detail',['id'=>$row->id])}}"><img src="public/upload/{{ $row->hinhanh }}" class="card-img-top" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->tensach }}</p>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->gia }}.000 ₫</p>
                        </div>
                        <button data-id_cart="{{ $row->id }}" type="button" class="btn btn-primary btn-lg" >THÊM VÀO GIỎ</button>
                    </div>


                    @endforeach
                </div>

            </div>

            <div>
                <a class="nhapnhay"  href="/dungcuhoctap" title="DỤNG CỤ HỌC TẬP">Dụng Cụ Học Tập</a>
                <div class="body_card" >

                    @foreach($dungcuhoctap as $row)


                    <div class="card" >
                    <div class="zoom-wrapper">
                        <a href="{{url('/detail',['id'=>$row->id])}}"><img src="public/upload/{{ $row->hinhanh }}" class="card-img-top" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->tensach }}</p>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->gia }}.000 ₫</p>
                        </div>
                        <button data-id_cart="{{ $row->id }}" type="button" class="btn btn-primary btn-lg" >THÊM VÀO GIỎ</button>
                    </div>
                    @endforeach
                </div>

            </div>

            <div>
                <a class="nhapnhay"  href="/sachthamkhao" title="SÁCH THAM KHẢO">Sách Tham Khảo</a>
                <div class="body_card" >

                    @foreach($sachthamkhao as $row)


                    <div class="card" >
                    <div class="zoom-wrapper">
                        <a href="{{url('/detail',['id'=>$row->id])}}"><img src="public/upload/{{ $row->hinhanh }}" class="card-img-top" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->tensach }}</p>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->gia }}.000 ₫</p>
                        </div>
                        <button data-id_cart="{{ $row->id }}" type="button" class="btn btn-primary btn-lg" >THÊM VÀO GIỎ</button>
                    </div>
                    @endforeach
                </div>

            </div>

            <div>
                <a class="nhapnhay"  href="/dochoi" title="ĐỒ CHƠI">Đồ Chơi</a>
                <div class="body_card" >

                    @foreach($dochoi as $row)


                    <div class="card" >
                    <div class="zoom-wrapper">
                        <a href="{{url('/detail',['id'=>$row->id])}}"><img src="public/upload/{{ $row->hinhanh }}" class="card-img-top" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->tensach }}</p>
                        </div>
                        <div class="card-body">
                            <p style="text-align: center;" class="card-text">{{ $row->gia }}.000 ₫ </p>
                        </div>
                        <button data-id_cart="{{ $row->id }}" type="button" class="btn btn-primary btn-lg" >THÊM VÀO GIỎ</button>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {

                $(".btn-lg").click(function(e) {
                    var product_id = $(this).data('id_cart');
                    console.log(product_id);

                    $.ajax({
                        method: "POST", // phương thức dữ liệu được truyền đi
                        url: "/addcart", // gọi đến file server show_data.php để xử lý
                        data: {
                            _token: '{{ csrf_token() }}',
                            product_id: product_id,
                        }, //lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                        success: function(response) { //kết quả trả về từ server nếu gửi thành công
                            alert("Đã thêm thành công!!");
                            location.reload();
                        }
                    });


                });

            });
        </script>

        



</body>

@include('home/footer')