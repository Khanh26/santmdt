<?php
require_once __DIR__ . '../../../modules/model/Products.php';
$products = new Products();
$array = $products->getAllByID($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/layouts.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/sanpham.css">
    <link rel="stylesheet" href="http://localhost/santmdt/public/css/chitietsp.css">
    <link rel="icon" type="image/x-icon" href="http://localhost/santmdt/public/img/logo1.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <title>Trang chủ - Sàn Thương mại số 1 Việt Nam</title>
</head>

<body>
    <div class="wapper">
        <!-- header -->
        <?php include('./view/client/layout/header.php'); ?>
        <!-- End header -->

        <!-- Content -->

        <!-- Content -->
        <div class="pd-wrap">
            <div class="container">
                <div class="heading-section">
                    <h2>Chi tiết sản phẩm</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                            <div class="item">
                                <img src="http://localhost/santmdt/public/img/sanpham/<?php echo $array['0']['HINH'][0]['ten_hinh'] ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-dtl">
                            <div class="product-info">
                                <div class="product-name"><?php echo $array['0']['TEN_SP'] ?></div>
                            </div>
                            <div class=""><span>Cửa hàng: <?php echo $array['0']['TEN_DANG_NHAP'] ?></span></div>
                            <div class=""><span>Kho còn: <?php echo $array[0]['SOLUONG_SP'] ?></span></div>

                            <div class="product-price-discount"><span>Giá: <?php echo $array['0']['GIA'][0]['GIA'] ?> VND</span></div>
                        </div>

                        <div class="product-count">
                            <label for="size">Số lượng</label>
                            <form action="" class="formAddCart" method="GET">
                                <input type="hidden" name="idsp" class="idsp" value="<?php echo $array['0']['ID_SP'] ?>">
                                <div class="qtyminus display-inline-block">-</div>
                                <input type="text" name="quantity" value="1" class="qty display-inline-block">
                                <div class="qtyplus display-inline-block">+</div>
                                <div class="block-submit">
                                    <button type="submit" name="btnAddCart" class="btnAddCart round-black-btn">Thêm vào giỏ hàng</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Mô tả sản phẩm</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <?php echo $array['0']['MOTA_SP'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./view/client/layout/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
<script>
    document.querySelector('.formAddCart').onsubmit = (e) => {
        e.preventDefault();
        formData = new FormData();
        formData.append('idkh', "<?php echo $_SESSION['user']['ID_KH'] ?>");
        formData.append('idsp', document.querySelector('.idsp').value);
        formData.append('sl', document.querySelector('.qty').value);
        fetch('http://localhost/santmdt/modules/api/addCart.php', {
                method: 'POST',
                body: formData,
            }).then(response => response.json())
            .then(data => {
                if(data.message == 'success') {
                    alert('Thêm vào giỏ hàng thành công!');
                } else {
                    alert('Thêm vào giỏ hàng thất bại!');
                }
            });
    }

    $(document).ready(function() {
        var slider = $("#slider");
        var thumb = $("#thumb");
        var slidesPerPage = 4; //globaly define number of elements per page
        var syncedSecondary = true;
        slider.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            autoplay: false,
            dots: false,
            loop: true,
            responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition);
        thumb
            .on('initialized.owl.carousel', function() {
                thumb.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: true,
                item: 4,
                smartSpeed: 200,
                slideSpeed: 500,
                slideBy: slidesPerPage,
                navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                responsiveRefreshRate: 100
            }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);
            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
            thumb
                .find(".owl-item")
                .removeClass("current")
                .eq(current)
                .addClass("current");
            var onscreen = thumb.find('.owl-item.active').length - 1;
            var start = thumb.find('.owl-item.active').first().index();
            var end = thumb.find('.owl-item.active').last().index();
            if (current > end) {
                thumb.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                thumb.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                slider.data('owl.carousel').to(number, 100, true);
            }
        }
        thumb.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            slider.data('owl.carousel').to(number, 300, true);
        });


        $(".qtyminus").on("click", function() {
            var now = $(".qty").val();
            if ($.isNumeric(now)) {
                if (parseInt(now) - 1 > 0) {
                    now--;
                }
                $(".qty").val(now);
            }
        })
        $(".qtyplus").on("click", function() {
            var now = $(".qty").val();
            if ($.isNumeric(now)) {
                if (parseInt(now) < <?php echo $array[0]['SOLUONG_SP'] ?>) {
                    $(".qty").val(parseInt(now) + 1);
                }
            }
        });
    });
</script>

</html>