<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <!--/metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!--//fonts-->

</head>

<body>

<div class="banner-header banner2">
    <div class="banner-dott1">
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
</div>
<!-- // banner -->
<!-- Mail Us inner -->
<div class="contact-page-w3ls inner-padding">
    <div class="container">
        <div class="w3-heading-all">
            <h3>Mail Us</h3>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
        <div class="contact-info-w3ls">
            <div class="contact-left-w3layouts">
                <div class="contact-w3-agileits">
                    <img src="images/c1.jpg" alt="img">
                    <div class="right-contact-w3ls">
                        <h6>Daniel</h6>
                        <p class="work-w3">Director</p>
                        <div class="span-sub-w3ls">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><p class="number-w3">+01 243 792 96</p>
                        </div>
                        <div class="span-sub-w3ls">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">example@mail.com</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="contact-w3-agileits">
                    <img src="images/c2.jpg" alt="img">
                    <div class="right-contact-w3ls">
                        <h6>Smith Carl</h6>
                        <p class="work-w3">Specialist</p>
                        <div class="span-sub-w3ls">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><p class="number-w3">+01 543 338 96</p>
                        </div>
                        <div class="span-sub-w3ls">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">example@mail.com</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="contact-w3-agileits">
                    <img src="images/c3.jpg" alt="img">
                    <div class="right-contact-w3ls">
                        <h6>James Mac</h6>
                        <p class="work-w3">Doctor</p>
                        <div class="span-sub-w3ls">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><p class="number-w3">+01 543 338 96</p>
                        </div>
                        <div class="span-sub-w3ls">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">example@mail.com</a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="contact-right-w3layouts">
                <h5 class="title-w3">We Would Love To Hear From You!</h5>
                <p class="head-w3-agileits">If you have any questions, please call us or fill in the form below and we will get back to you very soon.</p>
                <form action="#" method="post">
                    <input type="text" name="your name" placeholder="YOUR NAME" required="">
                    <input type="email" name="your email" placeholder="YOUR EMAIL" required="">
                    <textarea name="your message" placeholder="YOUR MESSAGE" required=""></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!---728x90--->
    </div>
</div>
<!-- //Mail Us inner -->

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
                <h4>Address</h4>
                <div class="w3-address">
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Phone Number</h6>
                            <p>+1 234 567 8901</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Email Address</h6>
                            <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Location</h6>
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

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Tour-Locations-JavaScript -->
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
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->

</body>
</html>
