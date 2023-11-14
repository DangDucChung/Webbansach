@include('home/header')

    <div>
        <img style="border: 0 none;  max-width: 100%;height: auto;" src="https://bizweb.dktcdn.net/100/386/441/themes/869880/assets/slider_1.jpg?1683776385693" alt="">


    </div>
    <div style="background-color: white;">
        <div class="container">
            <div style="padding-top: 0.2cm;" class="row1">
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

            <div class="grid-container" style="display: grid;grid-template-columns: auto auto auto auto  ;  gap: 10px;padding: 10px;">
                <p>KẾT QỦA TÌM KIẾM</p>
                @foreach($search as $row)

                <div class="card" style=" width: 300px; ">
                    <a href="{{url('/detail',['id'=>$row->id])}}"><img style="  width: 100%;height: auto;width:300px; height:300px;" src="public/upload/{{ $row->hinhanh }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <p style="text-align: center;" class="card-text">{{ $row->tensach }}</p>
                    </div>
                    <div class="card-body">
                        <p style="text-align: center;" class="card-text">{{ $row->gia }} đ</p>
                    </div>
                </div>
                @endforeach
            </div>









            @include('home/footer')


</body>

</html>