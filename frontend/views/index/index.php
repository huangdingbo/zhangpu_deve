<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>首页</title>
    <!-- for-mobile-apps -->
    <!--/metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- for banner css -->

    <!-- //for banner css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!--//fonts-->


</head>
<body>
<div class="banner-top">
    <div class="banner-header">
        <!--header-->
        <div class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="w3_navigation_pos">
                            <h1><a href="<?=\yii\helpers\Url::to(['/index/index'])?>">MediBulk</a></h1>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?=\yii\helpers\Url::to(['/index/index'])?>">首页</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/about/index'])?>">关于我们</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/services/index'])?>">我们的服务</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/gallery/index'])?>">画廊</a></li>

                                <li><a href="<?=\yii\helpers\Url::to(['/contact/index'])?>">联系</a></li>

                                <li><a href="<?=\yii\helpers\Url::to(['/site/login'])?>">登录</a></li>

                                <li><a href="<?=\yii\helpers\Url::to(['/contact/index'])?>">我的预约</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
        <!--//header-->
    </div>

    <!-- slider -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>我们提供最好的医疗服务</h3>
                            <div class="contrast">
                                <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item1">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>我们提供最好的牙科服务</h3>
                            <div class="contrast">
                                <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>我们提供最好的婴儿服务 </h3>
                            <div class="contrast">
                                <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>我们提供顶尖的医生</h3>

                            <div class="contrast">
                                <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item4">
                <div class="banner-dott">
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>食物是我们的共同点 </h3>

                            <div class="contrast">
                                <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
            <span class="sr-only">以前的</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
            <span class="sr-only">下一个</span>
        </a>
    </div>
    <div class="agileits_reservation">
        <form action="#" method="post">
            <div class="cuisine">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <input type="text" name="Location" placeholder="Enter name" required="">
            </div>
            <div class="phone_email">
                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <input type="text" name="Phone" placeholder="Phone" required="">
            </div>
            <div class="phone_email1">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="clearfix"> </div>
            <div class="agileits_reservation_grid">
                <div  class="span1_of_1 book_date">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    <input class="date" id="datepicker" name="Text" placeholder="Select Date"  type="text" required="">
                </div>
                <div class="span1_of_1 section_room">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    <input type="text" name="Time" class="timepicker" value=" Time">
                </div>
                <div class="span1_of_1 section_room">
                    <!-- start_section_room -->
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <select id="country1" class="frm-field sect" required>
                        <option value="">People</option>
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">More</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="date_btn">
                <input type="submit" value="Book An Appointment" />
            </div>
        </form>
    </div>
</div>
<!-- //slider -->
<!-- // banner -->

<!-- /About -->
<div class="w3-about about-gap" id="about">
    <div class="container">
        <div class="w3-heading-all">
            <h3>关于我们</h3>
        </div>
        <div class="w3-about-grids">
            <div class="col-md-6 w3-about-left-grid">
                <div class=" w3-about-left-grid-inner-head">
                    <i class="fa fa-microphone" aria-hidden="true"></i>
                    <h3>让我们谈谈好客</h3>
                </div>
                <div class=" w3-about-left-grid-inner2-head">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida, ante egestas egestas vulputate, elit risus maximus mauris, non gravida arcu justo eget est. Cras eu mauris nisl. Maecenas ut scelerisque metus.</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 w3-about-right-grid">
                <div class="col-md-8 w3-about-right-text1">
                    <h5>Lorem ipsum 109</h5>
                    <h4>专家</h4>
                    <h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>

                </div>
                <div class="col-md-4 w3-about-right-img1">
                    <img src="images/a11.jpg" alt="img" />
                </div>
                <div class="clearfix"></div>
                <div class="col-md-8 w3-about-right-text1">
                    <h5>Dunke alpha 212</h5>
                    <h4>专家</h4>
                    <h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
                </div>
                <div class="col-md-4 w3-about-right-img1">
                    <img src="images/a121.jpg" alt="img" />
                </div>
                <div class="clearfix"></div>
                <div class="col-md-8 w3-about-right-text1">
                    <h5>Monst ibram 143</h5>
                    <h4>Specialist3</h4>
                    <h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
                </div>
                <div class="col-md-4 w3-about-right-img1">
                    <img src="images/a13.jpg" alt="img" />
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //About -->
<!-- /services -->
<div class="services" id="services">
    <div class="container">
        <div class="w3-heading-all services-head">
            <h3>Services</h3>
        </div>

        <div class="w3-services-grids">
            <div class="col-md-4 w3-services-grids1">
                <div class="w3-services-grid1">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    <h3> Special Team</h3>
                    <div class="w3-services-grid1-left">
                        <h4>10 </h4>
                        <p>ipsum</p>
                    </div>
                    <div class="w3-services-grid1-right">
                        <h4>5</h4>
                        <p>basusx</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 w3-services-grids1 ">
                <div class=" w3-services-grid2">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <h3>Qualified Doctors</h3>
                    <div class="w3-services-grid1-left">
                        <h4>20 </h4>
                        <p>basus</p>
                    </div>
                    <div class="w3-services-grid1-right">
                        <h4>10</h4>
                        <p>basus</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 w3-services-grids1">
                <div class=" w3-services-grid3">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                    <h3>Special sergery</h3>
                    <div class="w3-services-grid1-left">
                        <h4>15 </h4>
                        <p>mpsum</p>
                    </div>
                    <div class="w3-services-grid1-right">
                        <h4>20</h4>
                        <p>rasus</p>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>

            <div class="clearfix"></div>
            <div class="w3-services-grid-bottom">
                <div class="col-md-4 w3-services-grids1">
                    <div class="w3-services-grid4">
                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                        <h3>Cardiac Clinic</h3>
                        <div class="w3-services-grid1-left">
                            <h4>25 </h4>
                            <p>ipsum</p>
                        </div>
                        <div class="w3-services-grid1-right">
                            <h4>30</h4>
                            <p>basusx</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3-services-grids1">
                    <div class=" w3-services-grid5">
                        <i class="fa fa-flask" aria-hidden="true"></i>
                        <h3>Pediatric Clinic</h3>
                        <div class="w3-services-grid1-left">
                            <h4>35</h4>
                            <p>ipsum</p>
                        </div>
                        <div class="w3-services-grid1-right">
                            <h4>25</h4>
                            <p>basusx</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3-services-grids1">
                    <div class=" w3-services-grid6">
                        <i class="fa fa-ambulance" aria-hidden="true"></i>
                        <h3>Emergency Help</h3>
                        <div class="w3-services-grid1-left">
                            <h4>40 </h4>
                            <p>ipsum</p>
                        </div>
                        <div class="w3-services-grid1-right">
                            <h4>45</h4>
                            <p>basusx</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- testimonials -->
<div class="testimonials" id="testimonials">
    <div class="container">
        <div class="w3-heading-all">
            <h3>Testimonials</h3>
        </div>
        <div class="w3ls_testimonials_grids">
            <section class="center slider">
                <div class="agileits_testimonial_grid">
                    <div class="w3l_testimonial_grid">
                        <p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat,
                            non laoreet dolor.</p>
                        <h4>Rosy Crisp</h4>
                        <h5>Student</h5>
                        <div class="w3l_testimonial_grid_pos">
                            <img src="images/tm1.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="agileits_testimonial_grid">
                    <div class="w3l_testimonial_grid">
                        <p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat,
                            non laoreet dolor.</p>
                        <h4>Laura Paul</h4>
                        <h5>Student</h5>
                        <div class="w3l_testimonial_grid_pos">
                            <img src="images/tm2.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="agileits_testimonial_grid">
                    <div class="w3l_testimonial_grid">
                        <p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat,
                            non laoreet dolor.</p>
                        <h4>Michael Doe</h4>
                        <h5>Student</h5>
                        <div class="w3l_testimonial_grid_pos">
                            <img src="images/tm3.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //testimonials -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="footer_agile_inner_info_w3l">
            <div class="col-md-4 footer-left">
                <h2><a href="index.html">MediBulk </a></h2>
                <p>Lorem ipsum quia dolor
                    sit amet, consectetur, adipisci velit, sed quia non
                    numquam eius modi tempora.</p>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                    <li><a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                    <li><a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                    <li><a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                    <li><a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-right">
                <div class="sign-grds">
                    <div class="sign-gd">
                        <h4>Information </h4>
                        <ul>
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="about.html" >About</a></li>
                            <li><a href="services.html"> Services</a></li>
                            <li><a href="gallery.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sign-gd-two">
                <h4>地址</h4>
                <div class="w3-address">
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>电话号码</h6>
                            <p>+1 234 567 8901</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>电子邮件地址</h6>
                            <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>位置</h6>
                            <p>Broome St, NY 10002,California, USA.

                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>


            <div class="clearfix"></div>

            <p class="copy-right">Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- carousal -->
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
<!-- //carousal -->


<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling-bottom-to-top -->
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
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling-bottom-to-top -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- Time select -->
<script type="text/javascript" src="js/wickedpicker.js"></script>
<script type="text/javascript">
    $('.timepicker').wickedpicker({twentyFour: false});
</script>
<!-- //Time select -->
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<!-- //Calendar -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->

</body>
</html>

