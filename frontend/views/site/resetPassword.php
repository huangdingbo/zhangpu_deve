<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <!-- for-mobile-apps -->
    <!--/metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!--gallery -->
    <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
    <!-- //gallery -->
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
                                <li><a href="<?=\yii\helpers\Url::to(['/about/index'])?>">关于我们</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/services/index'])?>">我们的服务</a></li>
                                <li class="active"><a href="<?=\yii\helpers\Url::to(['/gallery/index'])?>">画廊</a></li>

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
<div class="section-w3ls agileits-gallery" id="portfolio">
    <div class="w3-heading-all">
        <h3>重置密码</h3>
        <div class="site-reserpwd" style="text-align: center">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>请填写以下表单以重置密码:</p>
            <br>

            <div class="row" style="display: flex;justify-content: center">
                <div class="col-lg-5">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('用户名') ?>

                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('提交', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end();?>
                </div>
            </div>
        </div>
    </div>

    <!-- //menu -->

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
                                <li class="active"><a href="<?=\yii\helpers\Url::to(['/index/index'])?>">首页</a></li>
                                <li><a href="<?=\yii\helpers\Url::to(['/about/index'])?>">关于我们</a></li>
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

    <!-- //gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->

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
