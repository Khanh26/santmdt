<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/santmdt/assets/img/logo1.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/layouts.css">
    <link rel="stylesheet" href="http://localhost/santmdt/assets/css/tintuc.css">
    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<style>

.sidebar-baiviet{
    width: 98%;
    height: 1400px;
    background-color: rgb(255, 255, 255);
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
}

.a{
    flex-basis: 10%;
    text-align: center;
    background-color: rgb(255, 255, 255);
}

.b{
    flex-basis: 200%;
    display: flex;
    justify-content: space-evenly;
    float:right;
    width:auto;
}

.sidebar{
    flex-basis: 35%;
    position: relative;
    
}

.hinhanh{
    flex-basis: 65%;
    position: relative;
    box-shadow: 5px 5px 3px #ffffff;
}
.the_a{
    position: absolute;
    width: 100%;
    background-color: #A8CA27;
    height: 15%;
    top: 0;
    
}
.baiviet-img{
    width: 50%;
    height: 85%;
    position: absolute;
    bottom: 0;
    left: 0;
}
.the_p{
    width: 50%;
    height: 85%;
    position: absolute;
    bottom: 10;
    right: 0;
    font-size: 24px;
    padding: 5%;
    box-sizing: border-box;
    text-align:  justify;
}

.h{
    font-size: 25px;
}
</style>

<body>
<div class="wapper">
    <!-- header -->
    <?php include('../view/layout/client/header.php'); ?>
    <!-- End header -->
        <br>
        <div class="sidebar-baiviet">
            <div class="a">
                <h1>BÀI VIẾT MỚI NHẤT<h1>
            </div>
            <br>
            <br>



            <div class="b">
                <article class="sidebar">
                    <div class="h">
                    <h1><center>Danh Mục Sản Phẩm</center></h1>
                    </div>
                </article>

                <article class="hinhanh">
                    <a class="the_a">
                        <br>
                        <h2><center>QUY TRÌNH TRỒNG VÀ CHẮM SÓC CÂY MAI ĐÚNG KỸ THUẬT</center></h2>
                    </a>
                    <img class="baiviet-img" src="http://localhost/santmdt/assets/img/hoa-mai-vang.jpg" alt="">
                    <p class="the_p">Mai có xuất xứ từ cây hoang dại, có khả năng thích ứng tốt với điều kiện khí hậu nhiệt đới,
                        đặc biệt với khí hậu miền Nam. Cây mai sinh trưởng và phát triển mạnh,
                        có tuổi thọ cao và nếu được chăm sóc chu đáo sẽ cho hoa nhiều và có màu sắc đẹp.
                        <br>
                        <a href="http://localhost/santmdt/tintuc/html/hoamai.php">
                            <br>
                            >>Xem Thêm
                        </a>
                        <br>
                        <a>
                            22. 02. 2022
                        </a>
                    </p>

                </article>  
                
            </div>
            <br>
            <br>


            <div class="b">
                <article class="sidebar">

                </article>

                <article class="hinhanh">
                    <a class="the_a">
                        <br>
                        <h2><center>QUY TRÌNH TRỒNG VÀ CHẮM SÓC CÂY CÀ PHÊ ĐÚNG KỸ THUẬT</center></h2>
                    </a>
                    <img class="baiviet-img" src="http://localhost/santmdt/assets/img/ky_thuat_trong_ca_phe.jpg" alt="">
                    <p class="the_p">Mai có xuất xứ từ cây hoang dại, có khả năng thích ứng tốt với điều kiện khí hậu nhiệt đới,
                        đặc biệt với khí hậu miền Nam. Cây mai sinh trưởng và phát triển mạnh,
                        có tuổi thọ cao và nếu được chăm sóc chu đáo sẽ cho hoa nhiều và có màu sắc đẹp.
                        <br>
                        <a href="http://localhost/santmdt/tintuc/html/cf.php">
                            <br>
                            >>Xem Thêm
                        </a>
                        <br>
                        <a>
                            22. 02. 2022
                        </a>
                    </p>
                </article>
            </div>
            <br>
            <br>



            <div class="b">
                <article class="sidebar">

                </article>

                <article class="hinhanh">
                    <a class="the_a">
                        <br>
                        <h2><center>GIỚI THIỆU QUY TRÌNH TRỒNG XOÀI, CHĂM SÓC CÂY XOÀI</center></h2>
                    </a>
                    <img class="baiviet-img" src="http://localhost/santmdt/assets/img/cay-xoai-6.jpg" alt="">
                    <p class="the_p">Giới thiệu quy trình kỹ thuật trồng cà phê, hướng dẫn chăm sóc cây cà phê cho năng suất cao và ổn định.
                        Ngoài việc lựa chọn giống cà phê đạt tiêu chuẩn, có xuất xứ rõ ràng, thì kỹ thuật trồng cũng quyết định không nhỏ đến sinh trưởng và năng suất của vườn cà phê.
                        <br>
                        <a href="http://localhost/santmdt/tintuc/html/xoai.php">
                            <br>
                            >>Xem Thêm
                        </a>
                        <br>
                        <a>
                            22. 02. 2022
                        </a>
                    </p>
                </article>

            </div>
            <br>
            <br>

            <div class="a">
                <h1>Tiếp theo<h1>
            </div>
        </div>

    <!-- footer -->
    <?php include('../view/layout/client/footer.php'); ?>
    <!-- End footer -->
</div>
</body>
</html>