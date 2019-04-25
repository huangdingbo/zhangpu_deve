<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="<?=Yii::getAlias('@web')?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=Yii::getAlias('@web')?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?=Yii::getAlias('@web')?>/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href="<?=Yii::getAlias('@web')?>/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />

    <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">

    <?= $this->render(
        'header.php'
//        ['directoryAsset' => $directoryAsset]
    ) ?>
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    <?= $this->render(
        'footer.php'
    ) ?>

</div>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/js/jquery-2.1.4.min.js"></script>
<!-- carousal -->
<script src="<?=Yii::getAlias('@web')?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
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

<!-- //Tour-Locations-JavaScript -->
<script src="<?=Yii::getAlias('@web')?>/js/SmoothScroll.min.js"></script>
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
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/js/move-top.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/js/easing.js"></script>
<script type="text/javascript" src="<?=Yii::getAlias('@web')?>/js/bootstrap.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
