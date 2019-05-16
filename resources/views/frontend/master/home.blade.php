@extends('frontend.master.index')
@section('title','Home')
@section('update')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fishing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontend/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{asset('public/frontend/css/galleryeffect.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{asset('public/frontend/css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/js/owlcarousel/owl.carousel.css')}}" media="screen" />
<link href="{{asset('public/frontend/css/mycss.css')}}" rel="stylesheet">


@endsection
@section('body')
<!-- banner -->
<div class="banner_top" id="home">
    <div data-vide-bg ="{{asset('public/frontend/video/divining')}}">
        <div class="center-container">
            <div class="w3_agile_header">
                        <div class="w3_agileits_logo">
                                <h1><a href="index.html">THUẬN LÊ<span>SỈ LẺ HẢI SẢN </span></a></h1>
                            </div>
                            <div class="w3_menu">
                            <div class="agileits_w3layouts_banner_info">

                                <form action="#" method="post">
                                    <input type="search" name="search" placeholder="Tìm kiếm..." required="">
                                    <input type="submit" value="Tìm">
                                </form>
                            </div>
                                <div class="mobile-nav-button">
                                    <div class="mobile-nav-button__line"></div>
                                    <div class="mobile-nav-button__line"></div>
                                    <div class="mobile-nav-button__line"></div>
                                </div>
                                <nav class="mobile-menu">
                                    <ul>
                                        <li><a href="#home" class="active scroll" >Trang chủ</a></li>
                                        <li><a href="#about" class="scroll" >Giới thiệu</a></li>
                                        <li><a href="#product" class="scroll" >Sản phẩm</a></li>
                                        <li><a href="#services" class="scroll" >Dịch vụ</a></li>
                                        <li><a href="#gallery" class="scroll" >Thư viện</a></li>
                                        <li><a href="#testimonials" class="scroll" >Ý kiến</a></li>
                                        <li><a href="#contact" class="scroll" >Liên hệ</a></li>
                                    </ul>
                                </nav>
                        </div>

                    <div class="clearfix"></div>
                </div>
                <!-- banner-text -->
                <div class="slider">
                        <div class="callbacks_container">
                            <ul class="rslides callbacks callbacks1" id="slider4">
                                <li>
                                    <div class="agileits-banner-info">
                                            <h4>VÌ SAO CHỌN CHÚNG TÔI</h4>
                                                <h3>GIÁ CỰC SỐC</h3>
                                                <p>Hãy mua ngay</p>
                                            </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                            <h4>VÌ SAO CHỌN CHÚNG TÔI</h4>
                                                <h3>BẢO ĐẢM CHẤT LƯỢNG</h3>
                                                <p>Hãy mua ngay</p>
                                            </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                            <h4>VÌ SAO CHỌN CHÚNG TÔI</h4>
                                                <h3>NGON - BỔ - RẺ</h3>
                                                <p>Hãy mua ngay</p>
                                            </div>
                                </li>
                            </ul>
                        </div>
                </div>

            <!--banner Slider starts Here-->
            <div class="w3_agileits_social_media ">
                <ul class="social-icons3">
                    <li class="agileinfo_share">Chia sẻ</li>
                    <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                </ul>
            </div>
      </div>
   </div>
     </div>
<!-- //banner -->
    <!-- About -->
    <div class="about" id="about">
    <div class="container">
        <div class="agile_info_top">
                <div class="col-md-6 about_agile_info">
                    <h2>Về chúng tôi</h2>
                    <?php
                     if (strlen("Hải sản Thuận Lê được thành lập năm 2018 tại thành phố Hồ Chí Minh, bắt đầu từ cửa hàng kinh doanh những sản phẩm hải sản đông lạnh với số lượng bán ra rất nhỏ. Khi mới bắt đầu chúng tôi trải qua rất nhiều khó khăn khi phải tìm hướng đi mới cho riêng mình, không còn được hỗ trợ từ những công ty lớn có thâm niên kinh nghiệm nhiều năm kinh doanh hải sản. Tuy vậy bằng những nỗ lực phấn đấu không ngừng nghỉ, chúng tôi đã có những khách hàng sỉ đầu tiên. Bắt đầu có khách mua sỉ từ Vũng tàu, Tp HCM, sau đó chúng tôi có thêm nhiều khách hàng ở các nơi khác trên cả nước. Chúng tôi rất cảm ơn những khách hàng đầu tiên của mình vì họ là động lực cho chúng tôi trên con đường phát triển còn nhiều chông gai này. Chúng tôi cam kết hàng luôn bảo đảm chất lượng với giá thành hợp lý trên thị trường. Với sự phục vụ tận tình của mình chúng tôi sẽ luôn làm hài lòng Quý khách, kể cả các khách hàng khó tính. Tôi tin rằng thời gian và những gì thực sự chúng tôi đã, sẽ từng làm với từng Quý khách hàng là minh chứng rõ nhất về uy tín của chúng tôi trong thời gian qua.") > 10)
                   $str = substr("Hải sản Thuận Lê được thành lập năm 2018 tại thành phố Hồ Chí Minh, bắt đầu từ cửa hàng kinh doanh những sản phẩm hải sản đông lạnh với số lượng bán ra rất nhỏ. Khi mới bắt đầu chúng tôi trải qua rất nhiều khó khăn khi phải tìm hướng đi mới cho riêng mình, không còn được hỗ trợ từ những công ty lớn có thâm niên kinh nghiệm nhiều năm kinh doanh hải sản. Tuy vậy bằng những nỗ lực phấn đấu không ngừng nghỉ, chúng tôi đã có những khách hàng sỉ đầu tiên. Bắt đầu có khách mua sỉ từ Vũng tàu, Tp HCM, sau đó chúng tôi có thêm nhiều khách hàng ở các nơi khác trên cả nước. Chúng tôi rất cảm ơn những khách hàng đầu tiên của mình vì họ là động lực cho chúng tôi trên con đường phát triển còn nhiều chông gai này. Chúng tôi cam kết hàng luôn bảo đảm chất lượng với giá thành hợp lý trên thị trường. Với sự phục vụ tận tình của mình chúng tôi sẽ luôn làm hài lòng Quý khách, kể cả các khách hàng khó tính. Tôi tin rằng thời gian và những gì thực sự chúng tôi đã, sẽ từng làm với từng Quý khách hàng là minh chứng rõ nhất về uy tín của chúng tôi trong thời gian qua.", 0, 833) . '...';
                  echo $str;
                  ?>
                    <div class="more">
                                    <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Xem thêm<span class="glyphicon glyphicon-arrow-right"></span></a>
                                    </div>
                </div>

                <div class="col-md-6 agile_about_aits-image">
                    <div class="aboutaits-image-1">
                        <img src="{{asset('public/frontend/images/about-1.jpg')}}" alt="Couture">
                    </div>
                    <div class="aboutaits-image-2">
                        <img src="{{asset('public/frontend/images/about-2.jpg')}}" alt="Couture">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>

                <!-- Tooltip -->
                <div class="tooltip-content">

                    <div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Some few words</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{asset('public/frontend/images/g4.jpg')}}" alt="">
                                    <h5>Fishing Season Now Open</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius lectus vitae porttitor fringilla. Donec turpis orci, elementum a nunc quis, maximus varius ipsum. Sed bibendum ex in dignissim bibendum.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- //Tooltip -->

            </div>
        </div>
    </div>
    <!-- //about -->
<!--/services -->
    <div class="features" id="services">
        <div class="container">
          <div class="agileits_w3layouts_features_grids">

                <div class="col-md-4 agileits_w3layouts_features_grid">
                    <img src="{{asset('public/frontend/images/serve1.jpg')}}" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-8 agileits_w3layouts_sercvices">

                    <div class="col-md-6 w3ls-agile-service-grid">
                        <div class="agileits-icon-grid">
                                <div class="icon-right">
                            <i class="fa fa-anchor" aria-hidden="true"></i>
                                <h5><a href="#nhap-khau" class="scroll" >HẢI SẢN NHẬP KHẨU</a></h5>
                                <p>Tôm Hùm Alaska, Cua Hoàng Đế Alaska, Cá Tuyết,..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls-agile-service-grid">
                        <div class="agileits-icon-grid">

                            <div class="icon-right">
                            <i class="fa fa-book" aria-hidden="true"></i>
                                <h5><a href="#trong-nuoc" class="scroll" >HẢI SẢN TRONG NƯỚC</a></h5>
                                <p>Cá chim trắng, Cá ngừ sọc dưa, Cá ngừ Đại Dương,..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls-agile-service-grid">
                        <div class="agileits-icon-grid">
                                <div class="icon-right">
                        <i class="fa fa-fire" aria-hidden="true"></i>
                                <h5><a href="#do-kho-sach" class="scroll" >ĐỒ KHÔ SẠCH</a></h5>
                                <p>Khô mực, Khô cá lóc, Tôm khô..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls-agile-service-grid">
                        <div class="agileits-icon-grid">

                            <div class="icon-right">
                            <i class="fa fa-hand-o-up" aria-hidden="true"></i>
                                <h5><a href="#thuc-pham-da-che-bien" class="scroll" >THỰC PHẨM ĐÃ CHẾ BIẾN</a></h5>
                                <p>Bánh chưng, Giò lụa, Bánh Tét,..</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>


                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
<!-- //services -->
    <div class="product" id="product">
         <div class="w3_tittle second two"><h3 class="agile-tittle two gal">SẢN PHẨM NỔI BẬT</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="container">
            <div class="bao-san-pham">
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="nhap-khau" id="nhap-khau">
         <div class="w3_tittle second two"><h3 class="agile-tittle two gal">
        HẢI SẢN NHẬP KHẨU</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="container">
            <div class="bao-san-pham-nhap-khau">
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<div class="trong-nuoc" id="trong-nuoc">
         <div class="w3_tittle second two"><h3 class="agile-tittle two gal">
        HẢI SẢN TRONG NƯỚC</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="container">
            <div class="bao-san-pham-nhap-khau">
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="do-kho-sach" id="do-kho-sach">
         <div class="w3_tittle second two"><h3 class="agile-tittle two gal">
        ĐỒ KHÔ SẠCH</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="container">
            <div class="bao-san-pham-do-kho-sach">
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="thuc-pham-da-che-bien" id="thuc-pham-da-che-bien">
         <div class="w3_tittle second two"><h3 class="agile-tittle two gal">
        THỰC PHẨM ĐÃ CHẾ BIẾN</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="container">
            <div class="bao-san-pham-thuc-pham-da-che-bien">
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
                <div class="san-pham-con">
                    <div class="img-hover-box">
                        <a><img src="{{asset('public/frontend/images/maxresdefault.jpg')}}" /></a>
                        <div class="dat-mua">Đặt mua</div>
                    </div>
                    <div class="ten-san-pham">
                        CÁ HỒI NGUYÊN CON BỎ ĐẦU
                    </div>
                    <div class="hinh-thuc">
                        (KG)
                    </div>
                    <div class="gia-bao">
                        <div class="gia-bt">
                            <span>58.000 đ</span>
                        </div>
                            <div class="gia-km">
                                <span>55.000 đ</span>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="cau-hoi-thuong-gap">
                 <div class="w3_tittle second two"><h3 class="agile-tittle two gal">CÂU HỎI THƯỜNG GẶP</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="container">
        <div class="bao-cau-hoi">
            <div class="cau-hoi-con">
                <div class="left">
                    LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ELIT, SED DO EIUSMOD TEMPOR
                </div>
                <div class="right">
                        <img src="{{asset('public/frontend/images/img-cau-hoi-2.png')}}" class="img-responsive nut-click" rel="#1"/>
                </div>
                <div class="clearfix"></div>
                <div class="cau-tra-loi" id="1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                </div>
                <div class="aaa"></div>
            </div>
            <div class="clearfix"></div>
    </div>
</div>
</div>



<!-- team -->
<?php /*<div class="team" id="team">
    <div class="container">
        <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Amazing Team</h3> <div class="line-style second"><span class="second"></span></div></div>

        <div class="inner_w3l_agile_grids">
            <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                    <li>
                        <img src="{{asset('public/frontend/images/t11.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{asset('public/frontend/images/t21.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{asset('public/frontend/images/t31.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="{{asset('public/frontend/images/t41.jpg')}}" alt=" " class="img-responsive" />
                    </li>
                    </ul>
                    <div class="resp-tabs-container">
                    <div class="tab1">
                        <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Lucas Jimenez</h4>
                            <span>Fisherman</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
                        <div class="w3_agileits_social_media team_agile_w3l">
                                <ul class="social-icons3">
                                    <li class="agileinfo_share team">Follows On</li>
                                    <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="tab2">
                    <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Sarah Connor</h4>
                            <span>Fisherman</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
                        <div class="w3_agileits_social_media team_agile_w3l">
                                <ul class="social-icons3">
                                    <li class="agileinfo_share team">Follows On</li>
                                    <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="tab3">
                        <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Ivan Simpson</h4>
                            <span>Fisherman</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
                    <div class="w3_agileits_social_media team_agile_w3l">
                                <ul class="social-icons3">
                                    <li class="agileinfo_share team">Follows On</li>
                                    <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="tab4">
                    <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Marc Gutierrez</h4>
                            <span>Fisherman</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
                            <div class="w3_agileits_social_media team_agile_w3l">
                                <ul class="social-icons3">
                                    <li class="agileinfo_share team">Follows On</li>
                                    <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    </div>
            </div>
            </div>
    </div>
</div>*/?>
<!-- //team -->
<!---news -->
    <div class="news">
         <div class="w3_tittle second two"><h3 class="agile-tittle two gal">TIN TỨC NỔI BẬT</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="w3lnews-grid">
            <div class="col-md-6 col-sm-6 news-left">
                <div class="wthree-almubimg">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 news-right">
                <h4>KHI BỊ DỊ ỨNG HẢI SẢN CẦN BIẾT ĐIỀU NÀY</h4>
                <p>Dị ứng hải sản là tình trạng nhiều người gặp phải khiến cơ thể ngứa ngáy, nổi mụn, phát ban…</p>
                <div class="more">
                                    <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Xem thêm<span class="glyphicon glyphicon-arrow-right"></span></a>
                                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="w3lnews-grid">
            <div class="col-md-6 col-sm-6 news1-right">
                <div class="wthree-almubimg wthree1-almubimg">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 news1-left">
                <h4>LỢI ÍCH KHI ĂN CÁ BIỂN</h4>
                <p>Cá biển là thực phẩm quen thuộc với người dân Việt Nam. Không chỉ giàu canxi, tép biển dồi dào protein, nhiều hơn so với thịt gà, thịt lợn, thịt bò. </p>
                <div class="more">
                                    <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Xem thêm<span class="glyphicon glyphicon-arrow-right"></span></a>
                                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--- //news -->
    <!-- //gallery -->
<div class="gallery" id="gallery">
<!-- gallery -->
    <div class="container">
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal">THƯ VIỆN HÌNH ẢNH</h3> <div class="line-style second"><span class="second"></span></div></div>
        <div class="inner_w3l_agile_grids">
            <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="#image-1" >
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g1.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>
            </div>
            <div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
                <a href="#image-2" >
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g2.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>

            </div>
            <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                <a href="#image-3" >
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g3.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>
            </div>
            <div class="col-md-6 gal-gd-sec wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="#image-4" >
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g4.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>
            </div>
            <div class="col-md-6 gal-gd-sec wow fadeInRight animated" data-wow-delay=".5s">
                <a href="#image-5" >
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g5.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>
            </div>
            <div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="#image-6">
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g6.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>
            </div>
            <div class="col-md-4 gal-gd wow fadeInDown animated" data-wow-delay=".5s">
                <a href="#image-7">
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g7.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>
            </div>
            <div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
                <a href="#image-8">
                    <div class="nd-wrap nd-style-8">
                        <img src="{{asset('public/frontend/images/g8.jpg')}}" class="img-responsive" alt=" " />
                        <div class="nd-content">
                <div class="nd-content_inner">
                    <div class="nd-content_inner1">
                        <h4 class="nd-title">Fishing</h4>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-link"></i>
                        </span>
                        <span class="nd-icon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>

                    </div>
                </div>
            </div>
            </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //gallery -->
    <div class="lb-overlay" id="image-1">
        <img src="{{asset('public/frontend/images/g1.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-2">
        <img src="{{asset('public/frontend/images/g2.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-3">
        <img src="{{asset('public/frontend/images/g3.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-4">
        <img src="{{asset('public/frontend/images/g4.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-5">
        <img src="{{asset('public/frontend/images/g5.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-6">
        <img src="{{asset('public/frontend/images/g6.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-7">
        <img src="{{asset('public/frontend/images/g7.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
    <div class="lb-overlay" id="image-8">
        <img src="{{asset('public/frontend/images/g8.jpg')}}" alt="image1" />
        <div class="gal-info">
            <h3>Fishing</h3>
                <p>Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit,
                    sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <a href="index.html" class="lb-close">Close</a>
    </div>
<!-- gallery -->

<!-- testimonials -->
    <div class="testimonials" id="testimonials">
       <div class="test_agile_info">
        <div class="container">
            <div class="w3_tittle second two"><h3 class="agile-tittle two gal">Ý KIẾN KHÁCH HÀNG</h3> <div class="line-style second"><span class="second"></span></div></div>
            <ul id="flexiselDemo1">
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="wthree_testimonials_grid">
                            <h4>BÁN HÀNG</h4>
                            <p>Nguồn hải sản nhập khẩu của Vạn Thịnh Phát rất chất lượng, khách hàng của tôi rất hài lòng.Chúng tôi rất tin tưởng về chất lượng, giá cả và cách phục vụ bán hàng của Vạn Thịnh Phát.</p>
                                <h5>BÀ DƯƠNG</h5>
                            <div class="wthree_testimonials_grid_pos">
                                <img src="{{asset('public/frontend/images/t11.jpg')}}" alt=" " class="img-responsive" />
                            </div>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="wthree_testimonials_grid">
                            <h4>ĐẦU BẾP</h4>
                            <p>Là một đầu bếp, yêu cầu về nguyên liệu nấu ăn của tôi rất khắt khe, hải sản của Vạn Thịnh Phát luôn là sự lựa chọn đầu tiên của tôi khi vào bếp với chất lượng hải sản luôn đảm bảo. Tôi rất tin tưởng và sẽ làm ăn lâu dài với Vạn Thịnh Phát.</p>
                                <h5>Chị Phạm Thị Ngọc Huyền</h5>
                            <div class="wthree_testimonials_grid_pos">
                                <img src="{{asset('public/frontend/images/t21.jpg')}}" alt=" " class="img-responsive" />
                            </div>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="wthree_testimonials_grid_main">
                        <div class="wthree_testimonials_grid">
                            <h4>NỘI TRỢ</h4>
                            <p>Tháng nào tôi cũng mua rất nhiều hải sản của Vạn Thịnh Phát về để nấu cho cả nhà ăn dần. Vạn Thịnh Phát là nhà cung cấp chất lượng tuyệt hảo.</p>

                                <h5>Michael Paul</h5>
                            <div class="wthree_testimonials_grid_pos">
                                <img src="{{asset('public/frontend/images/t31.jpg')}}" alt=" " class="img-responsive" />
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- //testimonials -->
<div class="contact-w3ls" id="contact">
    <div class="container">
    <div class="w3_tittle second two"><h3 class="agile-tittle two gal">LIÊN HỆ CHÚNG TÔI</h3> <div class="line-style second"><span class="second"></span></div></div>
    <div class="inner_w3l_agile_grids">
        <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
            <div class="contact-agileits">
                <h4>ĐIỀN VÀO ĐÂY</h4>
                <p class="contact-agile2">ĐĂNG KÝ ĐỂ NHẬN TIN MỚI</p>
                <form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">TÊN:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">SỐ ĐIỆN THOẠI:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">MAIL:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">GỬI</button>
                </form>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1 map" data-aos="flip-right">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.125742409876!2d106.71224331410535!3d10.801680261682403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a501281b1f%3A0x6f43044e459b3132!2zNDc1YSDEkGnhu4duIEJpw6puIFBo4bunLCBQaMaw4budbmcgMjUsIELDrG5oIFRo4bqhbmgsIEjhu5MgQ2jDrSBNaW5oIDcwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1556686379580!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
<!--footer-->
    <div class="footer_bottom section">
        <div class="agileits-w3layouts-footer">
            <div class="container">
                <div class="col-md-4 w3-agile-grid">
                    <h5>VỀ CHÚNG TÔI</h5>
                    <p>HẢI SẢN THUẬN LÊ cung cấp các loại hải sản được đánh bắt gần bờ biển La gi – Bình Thuận, phương tiện chủ yếu là thuyền nan, ghe, tàu công suất nhỏ,…. Các loại hải sản tươi sống được đánh bắt lúc rạng sáng và chuyển lên TP. Hồ Chí Minh trong ngày, mất khoảng 4 giờ đồng hồ để vận chuyển nên giữ được độ tươi ngon, chất lượng đặc biệt, các loại cá, tôm, ghẹ,… vẫn còn sống. Đặc biệt không dùng bất kỳ chất bảo quản nào, chỉ dùng duy nhất “đá lạnh” để giữ tươi trong quá trình vận chuyển và bán tại cửa hàng của chúng tôi.</p>
                       <div class="w3_agileits_social_media team_agile_w3l team footer">
                                <ul class="social-icons3">

                                    <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                </div>
                <div class="col-md-4 w3-agile-grid">
                    <h5>TIN TỨC NỔI BẬT</h5>
                    <div class="w3ls-post-grids">
                        <div class="w3ls-post-grid">
                            <div class="w3ls-post-img">
                                <a href="#"><img src="{{asset('public/frontend/images/g2.jpg')}}" alt="" /></a>
                            </div>
                            <div class="w3ls-post-info">
                                <h6><a href="#" data-toggle="modal" data-target="#myModal">Proin scelerisque, sem a facilisis mollis</a></h6>
                                <p>Nov 24,2016</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3ls-post-grid">
                            <div class="w3ls-post-img">
                                <a href="#"><img src="{{asset('public/frontend/images/g4.jpg')}}" alt="" /></a>
                            </div>
                            <div class="w3ls-post-info">
                                <h6><a href="#" data-toggle="modal" data-target="#myModal">Proin scelerisque, sem a facilisis mollis</a></h6>
                                <p>Dec 25,2016</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3ls-post-grid">
                            <div class="w3ls-post-img">
                                <a href="#"><img src="{{asset('public/frontend/images/g7.jpg')}}" alt="" /></a>
                            </div>
                            <div class="w3ls-post-info">
                                <h6><a href="#" data-toggle="modal" data-target="#myModal">Proin scelerisque, sem a facilisis mollis</a></h6>
                                <p>Jan 06,2017</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 w3-agile-grid">
                    <h5>THÔNG TIN LIÊN HỆ</h5>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>HOTLINE</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>MAIL</h6>
                                <p>Mail :<a href="mailto:example@email.com"> mail@example.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>ĐỊA CHỈ</h6>
                                <p>475 A ĐIỆN BIÊN PHỦ, PHƯỜNG 25, BÌNH THẠNH.
                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="copyright">
               <p>© 2019 THUẬN LÊ FISH SHOP. All rights reserved</p>
        </div>
  </div>
<!--//footer-->

  <!-- js -->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- menu -->
<script>
    $(document).ready(function () {
      $('.mobile-nav-button').on('click', function() {
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");

      $('.mobile-menu').toggleClass('mobile-menu--open');
      return false;
    });
    });
</script>
<!-- //menu -->
<script src="{{asset('public/frontend/js/jquery.vide.min.js')}}"></script>
<!-- for bootstrap working -->
<script src="{{asset('public/frontend/js/responsiveslides.min.js')}}"></script>
            <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                            auto: true,
                            pager:false,
                            nav:true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });

                        });
            </script>

<!-- start-smoth-scrolling -->
<script src="{{asset('public/frontend/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('public/frontend/js/contact_me.js')}}"></script>


<!--tabs-->
<script src="{{asset('public/frontend/js/easy-responsive-tabs.js')}}"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{asset('public/frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<!-- Flexslider-js for-testimonials -->
<script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems:1,
                                    animationSpeed: 1000,
                                    autoPlay: true,
                                    autoPlaySpeed: 3000,
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: {
                                        portrait: {
                                            changePoint:480,
                                            visibleItems: 1
                                        },
                                        landscape: {
                                            changePoint:640,
                                            visibleItems:1
                                        },
                                        tablet: {
                                            changePoint:768,
                                            visibleItems: 1
                                        }
                                    }
                                });

                            });
                    </script>
                    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.flexisel.js')}}"></script>
<!-- //Flexslider-js for-testimonials -->

<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

            });
    </script>
<!-- //here ends scrolling icon -->

<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/owlcarousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/myjs.js')}}"></script>
@endsection
