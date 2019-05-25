<?php

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);

$route = Yii::$app->request->get('r');

$route = isset($route) ? $route : 'index/index';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title><?=$this->title?></title>
    <!-- for-mobile-apps -->
    <!--/metadata -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!--gallery -->
    <!-- //gallery -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!--//fonts-->
    <?php
        $this->registerCss('#zhuxiao{
            background: none;
            border: none;
            line-height: 1em;
            padding:10px 10px
        }');
    $this->registerCss(' li #zhuxiao:hover{
            background: #3eb8d7bf;
        }');
    ?>

    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

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
                            <h1><a href="index.html">MediBulk</a></h1>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class = <?= $route == 'index/index' ? 'active' : ''?>><a href="<?=\yii\helpers\Url::to(['index/index'])?>">首页</a></li>
                                <li class= <?= $route == 'doctor/index' ? 'active' : ''?>><a href="<?=Url::to(['doctor/index'])?>">预约服务</a></li>
                                <li class= <?= $route == 'gallery/index' ? 'active' : ''?>><a href="<?=Url::to(['gallery/index'])?>">画廊</a></li>

                                <li>
                                    <?php if (Yii::$app->user->isGuest) { ?>
                                <li class= <?= $route == 'site/login' ? 'active' : ''?>>
                                    <a href="<?=Url::to(['site/login'])?>">登录</a>
                                </li>
                                <?php } else { ?>

                                    <?php echo
                                        '<li style="color:#fff;font-weight:400;border:1.5px solid #3eb8d7">'
                                        . Html::beginForm(['site/logout'], 'post')
                                        . Html::submitButton(
                                            '注销 (' . Yii::$app->user->identity->username . ')',
                                            ['id' => 'zhuxiao']
                                        )
                                        . Html::endForm()
                                        . '</li>';
                                    ?>
                                <?php } ?>
                                </li>
                                <?php if (Yii::$app->user->id){?>
                                    <li style="display: none"><a href="<?=Url::to(['site/signup'])?>">注册</a></li>
                                <?php }else{?>
                                    <li class=<?= $route == 'site/signup' ? 'active' : ''?>><a href="<?=Url::to(['site/signup'])?>">注册</a></li>
                                <?php }?>
                                <li class= <?= $route == 'appointment/index' ? 'active' : ''?>><a href="<?=Url::to(['appointment/index','id'=>Yii::$app->user->id])?>">我的预约</a></li>

                                <li class= <?= $route == 'me/index' ? 'active' : ''?>><a href="<?=Url::to(['me/index'])?>">我的信息</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
        <!--//header-->
    </div>
</div>
<div style="height: 50px"></div>
<div class="container">

    <?= Alert::widget() ?>
    <?= $content ?>
</div>
<div style="height: 50px"></div>


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


<script>
    $(document).ready(function () {
        $('.cm-overlay').cmOverlay();
    });
</script>
<!-- //gallery -->

<!-- //Tour-Locations-JavaScript -->

<!-- smooth scrolling-bottom-to-top -->
<?php
$js2 = <<<JS
 $().UItoTop({ easingType: 'easeOutQuart' });
JS;
$this->registerJs($js2);
?>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling-bottom-to-top -->

<?php
$js1 = <<<JS
$(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
JS;
$this->registerJs($js1);

?>
<!-- start-smoth-scrolling -->

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

