<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http://localhost/santmdt/public/img/logo1.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/layouts.css">
    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('./view/client/layout/header.php'); ?>
        <!-- End header -->

        <!-- Content -->
        <!-- Code trang chu o day -->
        <div id="wrap">
            <div id="content0">
                <div id="cnt0-1">
                    <div class="w3-content w3-display-container" id="slideshow">
                        <img style="width: 100%; height: 100%; border-radius: 5px;" class="mySlides" src="https://www.phanbonnauy.com/resource/images/2020/06/32277650403c075dde0a2061bb8fbb62.jpg">
                        <img style="width: 100%; height: 100%; border-radius: 5px;" class="mySlides" src="https://camau.gov.vn/wps/wcm/connect/2be19436-d79d-48c0-8260-c77e093ba286/a12.png?MOD=AJPERES&CVID=">
                        <img style="width: 100%; height: 100%; border-radius: 5px;" class="mySlides" src="https://viettrunggroup.com/wp-content/grand-media/image/Actaone-247WP.jpg">
                        <img style="width: 100%; height: 100%; border-radius: 5px;" class="mySlides" src="https://noma.vn/wp-content/uploads/2021/04/lam-vuon-min.jpg">
                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);

                        function plusDivs(n) {
                            showDivs(slideIndex += n);
                        }

                        function showDivs(n) {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            if (n > x.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = x.length
                            }
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            x[slideIndex - 1].style.display = "block";
                        }
                    </script>

                </div>
                <div id="cnt0-2">
                    <div id="cnt02a">
                        <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://cf.shopee.vn/file/47b26a12d96788aebb0d9c5e6ecaa7c8">
                    </div>

                    <div id="cnt02b">
                        <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://magiamgiashopee.com/wp-content/uploads/2019/05/sieu-giam-gia-shopee.jpg">
                    </div>
                </div>
            </div>
            <!-- <div id="content4">
                danh cho ban
            </div> -->
            <div id="content1">
                <div id="category">
                    <br>
                    <b>DANH MỤC SẢN PHẨM</b>
                </div>
                <div id="product">
                    <div class="prod">
                        <div class="prd prd-1">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://product.hstatic.net/1000220686/product/biorepel_toi_toi_361aa37a22e742f3b293c8bf1922bb8f_master.jpg" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Thuốc trừ sâu</div>
                                </a>
                            </div>
                        </div>
                        <div class="prd prd-1">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://cf.shopee.vn/file/fa40918ea31d00908839ad81397b80ab" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Thuốc diệt cỏ</div>
                                </a>
                            </div>
                        </div>
                        <div class="prd prd-1">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="http://lavamix.vn/upload/products/phan-huu-co-sinh-hoc-minro-dang-vien-no.jpg" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Phân hữu cơ</div>
                                </a>
                            </div>
                        </div>
                        <div class="prd prd-1">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://cf.shopee.vn/file/fec1f963c40aaecef7496b05d69cd945" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Phân vô cơ</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="prod">
                        <div class="prd prd-2">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://thapxanh.com/images/thumbs/0022727_dau-bec-tuoi-canh-dap-xoay-360-ms-5022a-sung-phun-tuoi-cay-12-ren-21-sprinkler-gun.jpeg" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Béc tưới tự động</div>
                                </a>
                            </div>
                        </div>
                        <div class="prd prd-2">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://bizweb.dktcdn.net/100/332/983/products/cat-co-honda-gx35-osaika-os26.jpg?v=1601435326517" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Máy cắt cỏ</div>
                                </a>
                            </div>
                        </div>
                        <div class="prd prd-2">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://dungcunongnghiep.vn/files/sanpham/918/1/jpg/hop-dung-cu-lam-vuon-lon-10-mon-xanh-hm216.jpg" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Dụng cụ làm vườn</div>
                                </a>
                            </div>
                        </div>
                        <div class="prd prd-2">
                            <div class="ctg_i">
                                <img style="width: 100%; height: 100%; border-radius: 5px;" src="https://salt.tikicdn.com/cache/400x400/ts/product/d4/6c/32/0a1453d43e1a9d2e967b8b116b42381e.jpg" alt="">
                            </div>
                            <div class="ctg_n">
                                <a href="">
                                    <div class="edit">Đất trồng cây</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
            <div id="content2">

                <div class="con2-1">
                    <div id="con211">XU HƯỚNG TIỀM KIẾM</div>
                    <a href="">
                        <div id="con212">XEM THÊM <i class="fas fa-angle-right"></i></div>
                    </a>
                </div>
                <div class="con2-2">
                    <a class="con22" href="">
                        <div class="con221">
                            <div class="con-tt">Phân bón hữu cơ</div>
                            <div class="con-sl">150+ sản phẩm</div>
                        </div>

                        <div class="con222img">
                            <img style="height: 100%; width: 100%;" src="https://product.hstatic.net/200000239387/product/phan_bon_npk_dau_bo_19-12-8_5s_1kg_55c0b35cd8384626845e75a5db1e792a_1024x1024.jpg" alt="">
                        </div>
                    </a>

                    <a class="con22" href="">
                        <div class="con221">
                            <div class="con-tt">Máy cắt cỏ</div>
                            <div class="con-sl">100+ sản phẩm</div>
                        </div>

                        <div class="con222img">
                            <img style="height: 100%; width: 100%;" src="https://kingsport.vn/image/catalog/product/may_cat_co/M_y_c_t_c_Shindaiwa_260.png" alt="">
                        </div>
                    </a>

                    <a class="con22" href="">
                        <div class="con221">
                            <div class="con-tt">Phâm đạm</div>
                            <div class="con-sl">60+ sản phẩm</div>
                        </div>

                        <div class="con222img">
                            <img style="height: 100%; width: 100%;" src="https://product.hstatic.net/1000269461/product/phan-bon-ure-dam-phu-my_89c43f2bfccb45babe76bee869033818_master.jpg" alt="">
                        </div>
                    </a>

                    <a class="con22" href="">
                        <div class="con221">
                            <div class="con-tt">Kéo cắt cành</div>
                            <div class="con-sl">50+ sản phẩm</div>
                        </div>

                        <div class="con222img">
                            <img style="height: 100%; width: 100%;" src="https://www.ketnoitieudung.vn/data/bt10/keo-cat-canh-tolsen-31018-1512958240.jpg" alt="">
                        </div>
                    </a>

                    <a class="con22" href="">
                        <div class="con221">
                            <div class="con-tt">Bình tưới cây</div>
                            <div class="con-sl">50+ sản phẩm</div>
                        </div>

                        <div class="con222img">
                            <img style="height: 100%; width: 100%;" src="https://thapxanh.com/images/thumbs/0018917_binh-xit-tuoi-cay-8-lit-dudaco-binh-tuoi-phun-suong-binh-phun-thuoc-tru-sau-phun-thuoc-muoi-moi.jpeg" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <!-- <div id="content3">
                best seller
            </div> -->

            <div id="content5">
                <div class="con5-1">
                    <h3><b>BÀI VIẾT NỔI BẬT</b> </h3>
                </div>
                <div class="con5-2">


                    <article class="con5-2-1">
                        <a class="thea" href="">
                            <h4>QUY TRÌNH TRỒNG VÀ CHẮM SÓC CÂY MAI ĐÚNG KỸ THUẬT</h4>
                        </a>
                        <img class="theimg" src="http://localhost/santmdt/public/img/hoa-mai-vang.jpg" alt="">
                        <p class="thep">Mai có xuất xứ từ cây hoang dại, có khả năng thích ứng tốt với điều kiện khí hậu nhiệt đới,
                            đặc biệt với khí hậu miền Nam. Cây mai sinh trưởng và phát triển mạnh,
                            có tuổi thọ cao và nếu được chăm sóc chu đáo sẽ cho hoa nhiều và có màu sắc đẹp.
                            <a href="http://localhost/santmdt/tintuc/html/hoamai.php"><b>Xem Thêm</b></a></p>
                    </article>
                    <article class="con5-2-1">
                        <a class="thea" href="">
                            <h4>QUY TRÌNH TRỒNG VÀ CHẮM SÓC CÂY CÀ PHÊ ĐÚNG KỸ THUẬT</h4>
                        </a>
                        <img class="theimg" src="http://localhost/santmdt/public/img/ky_thuat_trong_ca_phe.jpg" alt="">
                        <p class="thep">Mai có xuất xứ từ cây hoang dại, có khả năng thích ứng tốt với điều kiện khí hậu nhiệt đới,
                            đặc biệt với khí hậu miền Nam. Cây mai sinh trưởng và phát triển mạnh,
                            có tuổi thọ cao và nếu được chăm sóc chu đáo sẽ cho hoa nhiều và có màu sắc đẹp.
                            <a href="http://localhost/santmdt/tintuc/html/cf.php"><b>Xem Thêm</b></a>
                        </p>
                            
                    </article>
                    <article class="con5-2-1">
                        <a class="thea" href="">
                            <h4>GIỚI THIỆU QUY TRÌNH TRỒNG XOÀI, HƯỚNG DẪN CHĂM SÓC CÂY XOÀI</h4>
                        </a>
                        <img class="theimg" src="http://localhost/santmdt/public/img/cay-xoai-6.jpg" alt="">
                        <p class="thep">Xoài là giống hoa quả nhiệt đới, đặc biệt phù hợp với điều kiện thời tiết nước ta nên cây trồng thường sinh trưởng, 
                                        phát triển tốt cho năng suất và chất lượng cao. 
                                        Do đó, đây là một trong những giống cây ăn quả được trồng phổ biến nhất hiện nay. 
                            <a href="http://localhost/santmdt/tintuc/html/xoai.php"><b>Xem Thêm</b></a>
                        </p>

                    </article>
                </div>

                            
            </div>
        </div>
        <!-- End content -->

        <!-- footer -->
        <?php include('./view/client/layout/footer.php'); ?>
        <!-- End footer -->
    </div>

</body>

</html>