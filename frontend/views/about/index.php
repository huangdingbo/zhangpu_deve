<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
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
                                <li><a href="<?=\yii\helpers\Url::to(['/index/index'])?>">首页</a></li>
                                <li class="active"><a href="<?=\yii\helpers\Url::to(['/about/index'])?>">关于我们</a></li>
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
<!-- about -->
<div class="about">
    <div class="container">
        <div class="w3-heading-all">
            <h3>About us</h3>
        </div>
        <div class="ab-agile">
            <div class="col-md-6 aboutleft">
                <h3>Welcome to Hospital</h3>
                <p class="para1">Donec bibendum velit quis diam venenatis, vulputate aliquam sapien blandit.
                    Etiam dui massa, vehicula a convallis a, facilisis vitae neque.Pellentesque sit amet
                    odio quis libero eleifend congue at ac justo. Suspendisse posuere congue accumsan Vulputate aliquam sapien. </p>
                <p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
                <p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
                <p><i class="fa fa-check" aria-hidden="true"></i> Proin tempor pulvinar Vivamus nisi hendrerit et. </p>
            </div>
            <div class="col-md-6 aboutright">
                <img src="images/p1.jpg" class="img-responsive" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- wthree-mid -->
<div class="wthree-mid">
    <div class="container">
        <h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
        <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
    </div>
</div>
<!-- //wthree-mid -->
<!--/team-->
<div class="team" id="team">
    <div class="w3-heading-all">
        <h3>我们的医生</h3>
    </div>
    <div>
        <table id="doctor" class="table" >
            <?php foreach ($list as $key => $item){ ?>
                <td style="text-align: center;color: #0089db;font-size: 20px"><b><?=$key?></b></td>
                <tr style="display: flex;flex-wrap: wrap;padding:0 15%;overflow: hidden">
                    <?php foreach ($item as $value){?>
                            <td style="text-align: center; width: 33%;display: flex">
                                <div style="display: flex;justify-content: space-evenly;height: 100%;flex-direction: column">
                                    <h4 style="color: #0d6aad;width: 110px">姓名：<?=$value['name']?></h4>
                                    <h4 style="color: #0d6aad;width: 110px">职称：<?=$value['position']?></h4>
                                    <h4 style="color: #0d6aad;width: 110px">学历：<?=$value['education']?></h4>
                                    <h4 style="color: #0d6aad;width: 110px">毕业院校：<?=$value['graduate_school']?></h4>
                                </div>
                                <a href="<?=\yii\helpers\Url::to(['/contact/index','id'=>$value['id']])?>"><img style="height: 200px;" src=<?=Yii::$app->params['imgDomain'].$value['pic']?> alt="" class="img-rounded"></a>
                            </td>
                    <?php }?>
                </tr>
            <?php }?>
        </table>
    </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--//team-->
<!-- footer -->
<div class="footer" style="height: 100%">
    <div class="container">
        <div class="footer_agile_inner_info_w3l">
            <div class="col-md-4 footer-left">
                <h2><a href="index.html">合作伙伴 </a></h2>
                <p></p>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                    <!--                    <li><a href="https://github.com" class="github">-->
                    <!--                            <div class="front"><i class="fa fa-github" aria-hidden="true"></i></div>-->
                    <!--                            <div class="back"><i class="fa fa-github" aria-hidden="true"></i></div></a></li>-->
                    <!--                    <li><a href="https://linux.cn/" class="linux">-->
                    <!--                            <div class="front"><i class="fa fa-linux" aria-hidden="true"></i></div>-->
                    <!--                            <div class="back"><i class="fa fa-linux" aria-hidden="true"></i></div></a></li>-->
                    <!--                    <li><a href="https://www.w3.org/html/" class="html5">-->
                    <!--                            <div class="front"><i class="fa fa-html5" aria-hidden="true"></i></div>-->
                    <!--                            <div class="back"><i class="fa fa-html5" aria-hidden="true"></i></div></a></li>-->
                    <!--                    <li><a href="www.google.com" class="google">-->
                    <!--                            <div class="front"><i class="fa fa-google-plus" aria-hidden="true"></i></div>-->
                    <!--                            <div class="back"><i class="fa fa-google-plus" aria-hidden="true"></i></div></a></li>-->
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
                        <h4>信息 </h4>
                        <ul>
                            <li><a href="<?=\yii\helpers\Url::to(['/index/index'])?>">首页</a></li>
                            <li  class="active"><a href="<?=\yii\helpers\Url::to(['/about/index'])?>">关于我们</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/services/index'])?>">我们的服务</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/gallery/index'])?>">画廊</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/contact/index'])?>">联系</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sign-gd-two">
                <h4>联系方式</h4>

                <div class="w3-address">
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>联系电话</h6>
                            <p>028 2345678901</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>邮件地址</h6>
                            <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>地址</h6>
                            <p>成都市都江堰市成都东软学院

                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>


            <div class="clearfix"></div>

            <p class="copy-right">Copyright &copy; 2019.ZhangPu All rights reserved.</p>
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
