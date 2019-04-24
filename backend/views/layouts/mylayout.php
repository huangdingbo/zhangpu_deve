<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use \yii\helpers\Url;
$baseUrl = 'http://huangdingbo.work/zhangpu/backend/web/index.php?r=';
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>">
<head>
    <meta charset="<?php echo Yii::$app->charset; ?>">
    <?php
    $this->registerMetaTag(['http-equiv' => 'Content-Type', 'content' => 'text/html; charset=UTF-8']);
    $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, user-scalable=no']);
    $this->registerMetaTag(['name' => 'description', 'content' => 'this is yii framework project']);
    $this->registerMetaTag(['name' => 'author', 'content' => 'Jason']);
    $this->registerMetaTag(['name' => 'keywords', 'content' => 'Jason, yii2, assets']);
    $this->registerMetaTag(['name' => 'robots', 'content' => 'all']);
    ?>
    <title><?php echo Html::encode($this->title); ?>-首页</title>
    <?php $this->head(); ?>
    <link rel="stylesheet" type="text/css" href="./admin/layui/css/layui.css"/>
    <link rel="stylesheet" type="text/css" href="./admin/css/admin.css"/>

    <?php
    $js = <<<JS
    var url = '';
  $(document).ready(function () {
          $(".cai").click(function() {
              url = 'http://huangdingbo.work/zhangpu/backend/web/index.php?r=' + $(".cai").attr('id');
              
              $("iframe").attr('src',url);
          });
       });
JS;
    $this->registerJs($js);

    ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="main-layout" id='main-layout'>
    <!--侧边栏-->
    <div class="main-layout-side">
        <div class="m-logo">
        </div>
        <ul class="layui-nav layui-nav-tree" lay-filter="leftNav">
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;"><i class="iconfont">&#xe607;</i>菜单管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="#" id="index/nav" class="cai" data-url="menu1.html"  data-id='1' data-text="后台菜单"><span class="l-line"></span>后台菜单</a></dd>
                    <dd><a href="javascript:;" data-url="http://huangdingbo.work/zhangpu/backend/web/index.php?r=index/welcome" data-id='2' data-text="前台菜单"><span class="l-line"></span>前台菜单</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont">&#xe608;</i>内容管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;" data-url="http://huangdingbo.work/zhangpu/backend/web/index.php?r=index/welcome" data-id='3' data-text="文章管理"><span class="l-line"></span>文章管理</a></dd>
                    <dd><a href="javascript:;" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>单页管理</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont">&#xe604;</i>推荐位管理</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont">&#xe60c;</i>友情链接</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont">&#xe60a;</i>RBAC</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;" data-url="email.html" data-id='4' data-text="邮件系统"><i class="iconfont">&#xe603;</i>邮件系统</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont">&#xe60d;</i>生成静态</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont">&#xe600;</i>备份管理</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;" data-url="admin-info.html" data-id='5' data-text="个人信息"><i class="iconfont">&#xe606;</i>个人信息</a>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;" data-url="system.html" data-id='6' data-text="系统设置"><i class="iconfont">&#xe60b;</i>系统设置</a>
            </li>
        </ul>
    </div>
    <!--右侧内容-->
    <div class="main-layout-container">
        <!--头部-->
        <div class="main-layout-header">
            <div class="menu-btn" id="hideBtn">
                <a href="javascript:;">
                    <span class="iconfont">&#xe60e;</span>
                </a>
            </div>
            <ul class="layui-nav" lay-filter="rightNav">
                <li class="layui-nav-item"><a href="javascript:;" data-url="email.html" data-id='4' data-text="邮件系统"><i class="iconfont">&#xe603;</i></a></li>
                <li class="layui-nav-item">
                    <a href="javascript:;" data-url="admin-info.html" data-id='5' data-text="个人信息">超级管理员</a>
                </li>
                <li class="layui-nav-item"><a href="javascript:;">退出</a></li>
            </ul>
        </div>
        <!--主体内容-->
        <div class="main-layout-body">
            <!--tab 切换-->
            <div class="layui-tab layui-tab-brief main-layout-tab" lay-filter="tab" lay-allowClose="true">
                <ul class="layui-tab-title">
                    <li class="layui-this welcome">后台主页</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show" style="background: #f5f5f5;">
                        <!--1-->
<!--                        <iframe src="welcome.html" width="100%" height="100%" name="iframe" scrolling="auto" class="iframe" framborder="0"></iframe>-->
                        <iframe src=<?=Url::to(['index/welcome'],true)?> width="100%" height="100%" name="iframe" scrolling="auto" class="iframe" framborder="0"></iframe>
                        <!--1end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--遮罩-->
    <div class="main-mask">

    </div>
</div>
<!--<script type="text/javascript">-->
<!--    var scope={-->
<!--        link:'./welcome.html'-->
<!--    }-->
<!--</script>-->
<script src="./admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="./admin/js/common.js" type="text/javascript" charset="utf-8"></script>
<script src="./admin/js/main.js" type="text/javascript" charset="utf-8"></script>
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>

