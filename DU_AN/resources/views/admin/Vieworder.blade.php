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
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="">Liệt kê sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manage_order">Liệt kê đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">Thể loại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="author.php">Tác giả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="article.php">Bài viết</a>
                        </li>

                    </ul>
                    <div class="h3">
                        <a class="navbar-brand" href="index.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <main>
    <div> 
    
        
<div> 
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                <tr><h1 style="text-align: center;">Liệt kê chi tiết đơn hàng  </h1></tr>
                    <th>Tên sản phẩm  </th>
                    <th>Số lượng </th>
                    <th>Giá</th>
                    
                    
                </tr>
                
                 
                <?php
                $total=0;
foreach ($order_by_id as $row) {
    echo '<tr>';
    echo '<th>' . $row->product_name . '</th>';
    echo '<th>' . $row->product_sales_quantity . '</th>';
    echo '<th>' . $row->product_price . '.000₫</th>';
  
$total =$row->order_total;

}



echo '</tr> ';
echo'<th>Tổng tiền: '.number_format($total, 0, ',', '.').'.000₫</th>';
?>
                   
                  
</div>   

     
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>