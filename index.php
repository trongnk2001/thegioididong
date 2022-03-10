<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TĐT Mobile</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
</head>
<body>
    <div id="main">
        <div id="header">
            <ul id="nav">
                <li><a href="danhmuc-dienthoai.html">
                    <i class="dt ti-mobile"></i>
                    Điện thoại
                </a></li>
                <li><a href="danhmuc-laptop.html">
                    <i class="lt ti-desktop"></i>
                    Laptop
                </a></li>
                <li>
                    <a href="danhmuc-phukien.html">
                        <i class="ti-headphone"></i>
                        Phụ kiện
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="subnav">
                        <li id="PK1">Phụ kiện di động
                          <ul class="PKDD" style="font-weight: normal;list-style-type: none;text-transform: none;">
                              <li><a href=""><h3>Pin sạc dự phòng</h3></a></li>
                              <li><a href=""><h3>Sạc cáp</h3></a></li>
                              <li><a href=""><h3>Miếng dán màn hình</h3></a></li>
                              <li><a href=""><h3>Ốp lưng</h3></a></li>
                              <li><a href=""><h3>Phụ kiện Ipad</h3></a></li>
                              <li><a href=""><h3>Giá đỡ laptop,điện thoại</h3></a></li>
                              <li><a href=""><h3>Túi đựng Airpods</h3></a></li>
                          </ul>  
                        </li>
                        <li id="PK2">Phụ kiện laptop
                            <ul class="PKLT" style="font-weight: normal;list-style-type: none;text-transform: none;">
                               <li><a href=""><h3>Chuột máy tính</h3></a></li>  
                               <li><a href=""><h3>Balo,túi chống sốc</h3></a></li>
                               <li><a href=""><h3>Miếng lót bàn phím</h3></a></li>
                               <li><a href=""><h3>Phần mềm</h3></a></li>   
                            </ul>
                        </li>
                        <li id="PK3">Phụ kiện khác
                            <ul class="PKK" style="font-weight: normal;list-style-type: none;text-transform: none;">
                                <li><a href=""><h3>Thiết bị mạng</h3></a></li>
                                <li><a href=""><h3>Camera giám sát, hành trình</h3></a></li>
                                <li><a href=""><h3>Máy tính cầm tay</h3></a></li>
                                <li><a href=""><h3>Thiết bị thông minh</h3></a></li>
                                <li><a href=""><h3>Gậy tự sướng</h3></a></li>
                                <li><a href=""><h3>Túi chống nước</h3></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="danhmuc-tablet.html">
                    <i class="ti-tablet"></i>
                    Tablet
                </a></li>
                <li><a href="dangnhap.html">
                    Đăng nhập
                    <i class="ti-user"></i>
                </a></li>
                <li><a href="dangki.html">
                    Đăng kí
                    <i class="ti-import"></i>
                </a></li>
            </ul>
        </div>

        <div id="slider">
            <div class="slider-main">
                <img id="img" onclick="changeImage()" src="assets/img/slider/slider-center.png" alt="">
            </div>
            <script>
                 var index = 1;
                changeImage = function() {
                    var imgs = ["assets/img/slider/slider-center.png","assets/img/slider/830-300-830x300-13.png","assets/img/slider/euro-oppo-830-300-830x300.png","assets/img/slider/830-300-830x300-2.png"]
                    document.getElementById('img').src = imgs[index];
                    index++;
                    if(index==4)
                    {
                        index = 0;
                    }
                }
                setInterval(changeImage,1500);
            </script>
            <div class="slider-left">
                <img src="assets/img/slider/slider-1.jpg" alt="">
                <img src="assets/img/slider/slider-2.jpg" alt="">
                <img src="assets/img/slider/slider-3.jpg" alt="">
                <img src="assets/img/slider/slider-4.jpg" alt="">
            </div>
            <div class="banner">
                <img src="assets/img/slider/banner.png" alt="">
            </div>
        </div>

        <div id="content">
            <div class="top clearfix">
                <p>Săn Sale Online Mỗi Ngày</p> 
                </div>
            <div class="bottom">
                <div class="img1">
                        <img src="assets/img/content/sansale/sansale-1.jpg" alt="">
                        <a href="">Xiaomi Redmi Note 10 5G</a>
                        <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                        <strong>4.990.000đ</strong>
                        <h4 style="font-size: 15px;text-decoration: line-through;">5.290.000đ 
                        <span style="display: inline-block;"> -5%</span></h4>
                        <div class="stars">
                            <form action="">
                              <input class="star star-5" id="star-5" type="radio" name="star"/>
                              <label class="star star-5" for="star-5"></label>
                              <input class="star star-4" id="star-4" type="radio" name="star"/>
                              <label class="star star-4" for="star-4"></label>
                              <input class="star star-3" id="star-3" type="radio" name="star"/>
                              <label class="star star-3" for="star-3"></label>
                              <input class="star star-2" id="star-2" type="radio" name="star"/>
                              <label class="star star-2" for="star-2"></label>
                              <input class="star star-1" id="star-1" type="radio" name="star"/>
                              <label class="star star-1" for="star-1"></label>
                            </form>
                          </div>
                </div>
                <div class="img1">
                    <img src="assets/img/content/sansale/sansale-2.jpg" alt="">
                    <a href="" >OPPO Find X3 Pro 5G</a>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>24.291.000đ</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">26.990.000đ 
                    <span style="display: inline-block;"> -10%</span></h4>
                    <div class="stars">
                        <form action="">
                          <input class="star star-5" id="star-5" type="radio" name="star"/>
                          <label class="star star-5" for="star-5"></label>
                          <input class="star star-4" id="star-4" type="radio" name="star"/>
                          <label class="star star-4" for="star-4"></label>
                          <input class="star star-3" id="star-3" type="radio" name="star"/>
                          <label class="star star-3" for="star-3"></label>
                          <input class="star star-2" id="star-2" type="radio" name="star"/>
                          <label class="star star-2" for="star-2"></label>
                          <input class="star star-1" id="star-1" type="radio" name="star"/>
                          <label class="star star-1" for="star-1"></label>
                        </form>
                      </div>
                </div>
                <div class="img1">
                    <img src="assets/img/content/sansale/sansale-3.jpg" alt="">
                    <a href="">IPhone 12 Pro Max 256G</a>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>32.490.000đ</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">37.490.000đ 
                    <span style="display: inline-block;"> -13%</span></h4>
                    <div class="stars">
                        <form action="">
                          <input class="star star-5" id="star-5" type="radio" name="star"/>
                          <label class="star star-5" for="star-5"></label>
                          <input class="star star-4" id="star-4" type="radio" name="star"/>
                          <label class="star star-4" for="star-4"></label>
                          <input class="star star-3" id="star-3" type="radio" name="star"/>
                          <label class="star star-3" for="star-3"></label>
                          <input class="star star-2" id="star-2" type="radio" name="star"/>
                          <label class="star star-2" for="star-2"></label>
                          <input class="star star-1" id="star-1" type="radio" name="star"/>
                          <label class="star star-1" for="star-1"></label>
                        </form>
                      </div>
                </div>
                <div class="img1">
                    <img src="assets/img/content/sansale/sansale-4.jpg" alt="">
                    <a href="">Samsung Galaxy Note 20</a>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>15.990.000đ</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">23.990.000đ 
                    <span style="display: inline-block;"> -33%</span></h4>
                    <div class="stars">
                        <form action="">
                          <input class="star star-5" id="star-5" type="radio" name="star"/>
                          <label class="star star-5" for="star-5"></label>
                          <input class="star star-4" id="star-4" type="radio" name="star"/>
                          <label class="star star-4" for="star-4"></label>
                          <input class="star star-3" id="star-3" type="radio" name="star"/>
                          <label class="star star-3" for="star-3"></label>
                          <input class="star star-2" id="star-2" type="radio" name="star"/>
                          <label class="star star-2" for="star-2"></label>
                          <input class="star star-1" id="star-1" type="radio" name="star"/>
                          <label class="star star-1" for="star-1"></label>
                        </form>
                      </div>
                </div>
                <div class="img1">
                    <img src="assets/img/content/sansale/sansale-5.jpg" alt="">
                    <a href="">Vivo Y12s (3GB/32GB)</a>
                    <h4 style="margin-top: 4px;">Online giá rẻ</h4>
                    <strong>2.990.000đ</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">3.290.000đ 
                    <span style="display: inline-block;"> -9%</span></h4>
                    <div class="stars">
                        <form action="">
                          <input class="star star-5" id="star-5" type="radio" name="star"/>
                          <label class="star star-5" for="star-5"></label>
                          <input class="star star-4" id="star-4" type="radio" name="star"/>
                          <label class="star star-4" for="star-4"></label>
                          <input class="star star-3" id="star-3" type="radio" name="star"/>
                          <label class="star star-3" for="star-3"></label>
                          <input class="star star-2" id="star-2" type="radio" name="star"/>
                          <label class="star star-2" for="star-2"></label>
                          <input class="star star-1" id="star-1" type="radio" name="star"/>
                          <label class="star star-1" for="star-1"></label>
                        </form>
                      </div>
                </div>
            </div>
        </div>
        <!--Kết thúc id content -->
        <div id="box-common">
                <div class="box-common__top clearfix">
                    <h2 class="box-common__title">ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                    <div class="box-common__link" >
                        <a href="">Samsung Galaxy A72</a>
                        <a href="">iPhone 12 Pro Max 128GB</a>
                        <a href="">OPPO Reno5</a>
                        <a href="">Xem tất cả  Điện thoại</a>
                    </div>
                </div>
                <div class="box-common__main">
                    <div class="listproduct">
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/samsung-galaxy-s21-tim-600x600.jpg" alt="">
                            <a href="chitietsp-dienthoai.html">Samsung Galaxy S21 5G</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>14.990.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">20.990.000₫ 
                            <span style="display: inline-block;"> -28%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/iphone-12-xanh-duong-600x600.jpg" alt="">
                            <a href="">iPhone 12 64GB</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>20.390.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">23.490.000₫ 
                            <span style="display: inline-block;"> -13%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/xiaomi-redmi-note-10-5g-xanh-bong-dem-1-600x600.jpg" alt="">
                            <a href="">Xiaomi Redmi Note 10 5G </a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>5.690.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">5.990.000₫ 
                            <span style="display: inline-block;"> -5%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/oppo-a93-den-14-600x600.jpg" alt="">
                            <a href="">OPPO A93</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>5.990.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">6.490.000₫ 
                            <span style="display: inline-block;"> -7%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/samsung-galaxy-a02-xanhduong-600x600-600x600.jpg" alt="">
                            <a href="">Samsung Galaxy A02</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>1.990.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">2.590.000₫ 
                            <span style="display: inline-block;"> -13%</span></h4>
                        </div>
                    </div>
                    <div class="listproduct2">
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/oppo-reno5-trang-600x600-1-600x600.jpg" alt="">
                            <a href="">OPPO Reno5</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>8,255,500₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">8.690.000₫ 
                            <span style="display: inline-block;"> -5%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/iphone-xi-do-600x600.jpg" alt="">
                            <a href="">iPhone 11 64GB</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>17.490.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">18.990.000₫ 
                            <span style="display: inline-block;"> -7%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/vivo-y51-bac-600x600-600x600.jpg" alt="">
                            <a href="">Vivo Y51 (2020)</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>5.790.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">6.290.000₫ 
                            <span style="display: inline-block;"> -7%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/realme-c12-do-13-600x600.jpg" alt="">
                            <a href="">Realme C12</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>3.290.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">3.490.000₫ 
                            <span style="display: inline-block;"> -5%</span></h4>
                        </div>
                        <div class="listproduct1">
                            <img src="assets/img/Điện thoại/samsung-galaxy-m51-trang-new-600x600-600x600.jpg" alt="">
                            <a href="">Samsung Galaxy M51</a>
                            <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                            <strong>8.490.000₫</strong>
                            <h4 style="font-size: 15px;text-decoration: line-through;">9.490.000₫ 
                            <span style="display: inline-block;"> -10%</span></h4>
                        </div>
                    </div>
                </div>
        </div>
        <!--Kết thúc box-common (ĐIỆN THOẠI NỔI BẬT)-->
        
        <div id="box-common-laptop">
            <div class="box-common__top clearfix">
                <h2 class="box-common__title">LAPTOP,TABLET NỔI BẬT NHẤT</h2>
                <div class="box-common__link__laptop" >
                    <a href="">Laptop ASUS</a>
                    <a href="">Laptop HP</a>
                    <a href="">iPad Air 4 Wifi 64GB</a>
                    <a href="">Xem tất cả Laptop</a>
                </div>
            </div>
            <div class="box-common__main">
                <div class="listproduct">
                    <div class="listproduct1" style="padding: 70px 4px;">
                        <img src="assets/img/Laptop-Tablet/lenovo-ideapad-3-15itl6-i5-82h80042vn-600x600.jpg" alt="">
                        <a href="chitietsp-laptop.html">Lenovo IdeaPad 3 15ITL6 i5 1135G7 (82H80042VN)</a>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
                        <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                        <strong>17.090.000₫đ</strong>
                        <h4 style="font-size: 15px;text-decoration: line-through;">17.990.000₫ 
                        <span style="display: inline-block;"> -5%</span></h4>
                    </div>
                    <div class="listproduct1" style="padding: 70px 4px;">
                        <img src="assets/img/Laptop-Tablet/hp-340s-g7-i3-224l1pa-302720-092751-600x600.jpg" alt="">
                        <a href="">HP 340s G7 i3 1005G1 (224L1PA)</a>
                        <br>
                        <span>RAM 4 GB</span>
                        <span>SSD 512 GB</span>
                        <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                        <strong>12.890.000₫</strong>
                        <h4 style="font-size: 15px;text-decoration: line-through;">13.590.000₫ 
                        <span style="display: inline-block;"> -5%</span></h4>
                    </div>
                    <div class="listproduct1" style="padding: 70px 4px;">
                        <img src="assets/img/Laptop-Tablet/acer-aspire-7-a715-42g-r4st-r5-nhqaysv004-16-600x600.jpg" alt="">
                        <a href="">Acer Aspire 7 A715 42G R4ST R5 5500U</a>
                        <br>
                        <span>RAM 4 GB</span>
                        <span>SSD 256 GB</span>
                        <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                        <strong>18.990.000₫</strong>
                        <h4 style="font-size: 15px;text-decoration: line-through;">19.990.000₫ 
                        <span style="display: inline-block;"> -5%</span></h4>
                    </div>
                    <div class="listproduct1" style="padding: 70px 4px;">
                        <img src="assets/img/Laptop-Tablet/lenovo-ideapad-3-15itl6-i3-82h8004hvn-600x600.jpg" alt="">
                        <a href="">Lenovo Ideapad 3 15ITL6 i3 1115G4 </a>
                        <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                        <strong>14,240,500₫</strong>
                        <h4 style="font-size: 15px;text-decoration: line-through;">14.990.000₫
                        <span style="display: inline-block;"> -5%</span></h4>
                    </div>
                    <div class="listproduct1">
                        <img src="assets/img/Laptop-Tablet/huawei-t10s-600x600-600x600.jpg" alt="">
                        <a href="chitietsp-tablet.html">Huawei MatePad T10s (Nền tảng Huawei Mobile Service)</a>
                        <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                        <strong>5.140.000₫</strong>
                        <h4 style="font-size: 15px;text-decoration: line-through;">5.490.000₫ 
                        <span style="display: inline-block;"> -6%</span></h4>
                    </div>
                </div>
        </div>
    </div>
    <!--Kết thúc box-common-laptop (LAPTOP,TABLET NỔI BẬT)-->
    <div id="box-common-phukien">
        <div class="box-common__top clearfix">
            <h2 class="box-common__title">PHỤ KIỆN NỔI BẬT NHẤT</h2>
            <div class="box-common__link__laptop" >
                <a href="">Sạc dự phòng</a>
                <a href="">Cáp sạc</a>
                <a href="">Tai nghe</a>
                <a href="">Xem tất cả Phụ kiện</a>
            </div>
        </div>
        <div class="box-common__main">
            <div class="listproduct">
                <div class="listproduct1">
                    <img src="assets/img/Phụ kiện/sac-du-phong-polymer-10000mah-ava-pj-jp191s-avatar-1-600x600.jpg" alt="">
                    <a href="chitietsp-phukien.html">Pin sạc dự phòng Polymer 10.000mAh AVA PJ JP191S</a>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>250.000₫</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">450.000₫
                    <span style="display: inline-block;"> -44%</span></h4>
                </div>
                <div class="listproduct1">
                    <img src="assets/img/Phụ kiện/pin-sac-du-phong-7500mah-ava-ds630-avatar-1-600x600.jpg" alt="">
                    <a href="">Pin sạc dự phòng 7500mAh AVA DS630</a>
                    <br>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>175.000₫</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">300.000₫ 
                    <span style="display: inline-block;"> -41%</span></h4>
                </div>
                <div class="listproduct1">
                    <img src="assets/img/Phụ kiện/pin-sac-du-phong-7500mah-ava-lj-jp195-avatar-1-600x600.jpg" alt="">
                    <a href="">Pin sạc dự phòng 7.500mAh AVA LJ JP195</a>
                    <br>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>175.000₫</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">300.000₫ 
                    <span style="display: inline-block;"> -41%</span></h4>
                </div>
                <div class="listproduct1">
                    <img src="assets/img/Phụ kiện/pin-sac-du-phong-10000mah-ava-ds003-wb-xanh-avatar-1-600x600.jpg" alt="">
                    <a href="">Pin sạc dự phòng 10.000mAh AVA DS003-WB </a>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>210.000₫</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">400.000₫
                    <span style="display: inline-block;"> -47%</span></h4>
                </div>
                <div class="listproduct1">
                    <img src="assets/img/Phụ kiện/pin-sac-du-phong-10000mah-ava-la-y65-avatar-1-600x600.jpg" alt="">
                    <a href="">Pin sạc dự phòng 10.000mAh AVA LA Y65</a>
                    <h4 style="margin-top: 6px;">Online giá rẻ</h4>
                    <strong>210.000₫</strong>
                    <h4 style="font-size: 15px;text-decoration: line-through;">400.000₫ 
                    <span style="display: inline-block;"> -47%</span></h4>
                </div>
            </div>
    </div>
</div>
        <!--Kết thúc box-common-phukien (PHỤ KIỆN NỔI BẬT)-->
    <hr style="width: 1180px;margin-left:160px;margin-top:10px;margin-top: 50px;
    margin-bottom: 10px;">
    <div id="footer">
        <div class="footer-main">
            <div class="footer-main-1">
                <ul>
                    <li>
                    <a href="">Lịch sử mua hàng</a>
                    </li>
                    <li>
                    <a href="">Cộng tác bán hàng cùng ADMIN</a>
                    </li>
                    <li>
                    <a href="">Tìm hiểu về mua trả góp</a>
                    </li>
                    <li>
                    <a href="">Chính sách bảo hành</a>
                    </li>
                    <li>
                    <a href="">Xem thêm</a>
                    </li>
                </ul>   
            </div>
            <div class="footer-main-1">
                <ul>
                    <li>
                    <a href="">Giới thiệu công ty (MWG.vn)</a>
                    </li>
                    <li>
                    <a href="">Tuyển dụng</a>
                    </li>
                    <li>
                    <a href="">Gửi góp ý, khiếu nại</a>
                    </li>
                    <li>
                    <a href="">Tìm siêu thị (2.574 shop)</a>
                    </li>
                    <li>
                    <a href="">Xem bản mobile</a>
                    </li>
                </ul> 
            </div>
            <div class="footer-main-2">
                <p style="margin-top: 10px;">
                    <strong>Tổng đài hỗ trợ</strong>
                    (Miễn phí gọi)
                </p>
                <p>
                    <span>Gọi mua:</span>
                    <a href=""><b>1800.1060</b></a>
                    (7:30 - 22:00)
                </p>
                <p>
                    <span>Kỹ thuật:</span>
                    <a href=""><b>1800.1763</b></a>
                    (7:30 - 22:00)
                </p>
                <p>
                    <span>Khiếu nại:</span>
                    <a href=""><b>1800.1062</b></a>
                    (8:00 - 21:30)
                </p>
                <p>
                    <span>Bảo hành:</span>
                    <a href=""><b>1800.1064</b></a>
                    (8:00 - 21:00)
                </p>
            </div>
        </div>
    </div>

</div>
</body>
</html>