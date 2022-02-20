<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


 
    
    <style>
        *{
            margin: 0;
            padding: 0;
            border: 0;
        }
        #header{
            width: 100%;
            height: 100px;
            background-color: #30373D;
            position: fixed;
            display: flex;
            /* justify-content: space-around; */
        }
        #he1{
            
            width: 15%;
            height: 100%;
            margin-left: 2%;
        }
        #he2{
            
            width: 55%;
            height: 100%;
            display: flex;
            flex-direction: column;
            
        }
            #he2-1{
                /* background-color: #A8CA27; */
                width: 100%;
                height: 50%;
                display: flex;
                align-items: center;
            }
                #search{
                    flex: 1;
                    display: flex;
                    align-content: center;
                    justify-content: space-evenly;
                    height: 80%;
                }
                    #input{
                        flex-basis: 80%;
                        border-radius: 2px;
                    }
                    #submit{
                        flex-basis: 15%;
                        background-color: #A8CA27;
                        border-radius: 2px;
                    }
            #he2-2{
                /* background-color: olive; */
                width: 100%;
                height: 50%;

            }
                #luachon{
                    width: 100%;
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                    height: 80%;
                    
                }
                    #luachon a{
                        text-decoration: none;
                        color: white;
                    }
                    #luachon li{
                        list-style-type: none;
                    }

        /* #he3{
            
            width: 13%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
            .fa-user{
                flex-basis: 20%;
                font-size: 40px;
                color: #A8CA27;
                text-align: right;
            }
            #dndk{
                flex-basis: 60%;
                justify-content: flex-start;
                font-size: 20px;
            }
                #dndk a{
                    text-decoration: none;
                    color: white;
                    display: block;
                } */
        #he4{
            width: 20%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        #he4-1{
            flex: 1;
            /* background-color: rgb(30, 58, 119); */
            display: flex;
            justify-content: space-evenly;
        }
            #cart{
                /* background-color: rebeccapurple; */
                flex-basis: 45%;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
            }
                .fa-shopping-cart{
                    flex-basis: 20%;
                    font-size: 25px;
                    color: #A8CA27;
                }
                #cart a{
                    color: white;
                    font-size: 15px;
                    text-decoration: none;
                }
            #wishlist{
                /* background-color: red; */
                flex-basis: 45%;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                
            }
                .fa-heart{
                        flex-basis: 20%;
                        font-size: 25px;
                        color: #A8CA27;
                }
                #wishlist a{
                        color: white;
                        font-size: 15px;
                        text-decoration: none;
                }
           #he4-2{
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
           }
                /* .fa-store{
                    flex-basis: 20%;
                    font-size: 25px;
                    color: #A8CA27;
                    text-align: end;
                } */
                #a1{
                    flex-basis: 10%;
                    font-size: 25px;
                    color: #A8CA27;
                    /* text-align: end; */
                }
                #a2 a{
                    flex-basis: 70%;
                    color: white;
                    font-size: 15px;
                    text-decoration: none;                    
                }
                .fas:hover{
                    color: aqua;
                }
                #he4 a:hover{
                    color: aqua;
                }
                #he2 a:hover{
                    color: aqua;
                }
    </style>
</head>
<body>
    <div id="header">
        <div id="he1">
            <img style="width: 100%; height: 100%;" src="./logo/logo1.png" alt="">
        </div>
        <div id="he2">
            <div id="he2-1">
                <form action="" id="search">
                    <input type="text" placeholder=" &emsp;Tìm sản phẩm mong muốn theo..." id="input">
                    <button type="submit" id="submit"><i class="fas fa-search"></i> &ensp; Tìm kếm</button>
                </div>
            </form>
            <div id="he2-2">
                <ul id="luachon">
                    <li><a href="">Phân bón</a></li>
                    <li><a href="">Thuốc trừ sâu</a></li>
                    <li><a href="">Thuốc diệt cỏ</a></li>
                    <li><a href="">Dụng cụ làm vườn</a></li>
                    <li><a href="">Khác</a></li>
                </ul>
            </div>
        </div>
        <!-- <div id="he3">
            <i class="far fa-user"></i>
            <div id="dndk">
                <a href="">Đăng nhập</a> 
                <a href="">Đăng ký</a>
            </div>
        </div> -->
        <div id="he4">
            <div id="he4-1">
                <div id="cart">
                    <!-- <a href=""><i class="fas fa-cart-arrow-down"></i></a> -->
                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                    <a href="">Giỏ hàng</a>
                </div>
                <div id="wishlist">
                    <!-- <a href=""><i class="fab fa-gratipay"></i></a> -->
                    <a href=""><i class="fas fa-heart"></i></a>
                    <a href="">Yêu thích</a>
                </div>
            </div>
            <div id="he4-2">
                <!-- <a id="a1" href=""><i class="far fa-user"></i></a> -->
                <a id="a1" href=""><i class="fas fa-user"></i></a>
                <div id="a2">
                    <a href="">Đăng nhập</a>  <b>/</b> 
                    <a href="">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- Duy dán header vào đây phần này cho có cái code html thôi ko cần cái đoạn docuement tại bên kia có rồi -->
<!-- Ảnh thì tạo trong img thêm 1 folder header để vào đó rồi src tới nó như ở footer -->
