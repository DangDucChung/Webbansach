<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function() {
    $('.cart_update').change(function(e) {
       
      var product_id = $(this).data('id_cart_update'); // Lấy ID sản phẩm từ phần tử cha
      var quantity = $('#soluong').val(); // Lấy số lượng mới từ phần tử anh em

      $.post({
        url: '{{ route("update.cart") }}',
        type: 'POST',
        data: {product_id: product_id, quantity: quantity},
        
        success: function(response) {
            window.location.reload();
          if (response.success) {
            alert('Cập nhật giỏ hàng thành công');
          } else {
            alert('Cập nhật giỏ hàng thất bại');
          }
        },
        error: function() {
          alert('Có lỗi xảy ra');
        }
      });
    });
  });






  $(document).ready(function() {
    $('.cart_remove').click(function() {
        var id = $(this).data('id_cart'); // Thay 'your_session_key' bằng key của session muốn xóa

      $.ajax({
        url: '{{ route("remove.session") }}',
        type: 'POST',
        data: {id:id},
      
        success: function(response) {
          if (response.success) {
            alert('Xóa session thành công');
          } else {
            alert('Xóa session thất bại');
          }
        },
        error: function() {
          alert('Có lỗi xảy ra');
        }
      });
    });
  });
</script>