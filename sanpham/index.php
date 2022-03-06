<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/layouts.css">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/sanpham.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> 

    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('../view/layout/client/header.php'); ?>
        <!-- End header -->

        <!-- Content -->
    <div class="wrap">
       <div class="filter">
           <div class="range-title"><h3>Lọc giá sản phẩm</h3></div>
           <div class="range-wrap">
               <div class="range-value" id ="range-V"></div>
               <input id ="range" type="range" min="10000" max ="3000000" value="200" step ="1">
           </div>

           <br>
           <b><hr style ="size = 2px;"></b>
           
           <div class="category">
           
           <h3>Lọc theo loại sản phẩm</h3>

            <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Thuốc trừ sâu</button>
            <button class="btn" onclick="filterSelection('nature')"> Thuốc diệt cỏ</button>
            <button class="btn" onclick="filterSelection('cars')"> Phân hữu cơ</button>
            <button class="btn" onclick="filterSelection('people')"> Phân vô cơ</button>
            <button class="btn" onclick="filterSelection('people')"> Béc tưới cây</button>
            <button class="btn" onclick="filterSelection('people')"> Máy căt cỏ</button>
            <button class="btn" onclick="filterSelection('people')"> Dụng cụ làm vườn</button>
            <button class="btn" onclick="filterSelection('people')"> Đất trồng cây</button>



            </div>
           </div>
       </div>

        <div class="product">
            <div class="detail_pro">
                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>
            </div>

            <div class="detail_pro">
                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="item_img">
                        <img src="https://product.hstatic.net/1000220686/product/hat-giong-bap-nep-lai-vh686_feff5e3b06934d3b91ff0734e9c6857b_medium.jpg" alt="không tồn tại">
                    </div>
                    <div class="item_des">
                      <div class="item_title">Hạt Giống Bắp (Ngô) Nữ Hoàng Đỏ - Giống F1, Nhập Khẩu Chính Hãng, Đảm Bảo Chất Lượng - Gói 50 hạt </div>  
                      <div class="item_price"> 50,000   <ins>đ</ins></div>
                      <div class="item_cart"><a class= "cart" href="#">Thêm vào giỏ hàng</a></div>
                    </div>
                </div>
            </div>
         
        </div>
        
    </div>

        <!-- End content -->

        <!-- footer -->
        <?php include('../view/layout/client/footer.php');?>
        <!-- End footer -->
    </div>
    
    

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    <script>
        const range = document.getElementById('range');
        const rangeV = document.getElementById('range-V');
        const setValue = () => {
            const newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) );
            const newPosition = 10 - (newValue * 0.2);
            rangeV.innerHTML = `<span style="width:max-content; padding:2px 4px;">${range.value}</span>`;
            rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
        };
        document.addEventListener("DOMContentLoaded", setValue);
        range.addEventListener('input', setValue);
    </script>
</html>
