<?php
    $userId= isset(Yii::$app->user->id) ? Yii::$app->user->id : '';
    $userInfo = \common\models\Adminuser::findOne(['id' => $userId]);
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=$userInfo->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '预约挂号系统后台', 'options' => ['class' => 'header']],
                    ['label' => '首页', 'icon' => 'file-code-o', 'url' => ['index/index']],
                    [
                        'label' => '管理员',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => '医师基本信息管理', 'icon' => 'file-code-o', 'url' => ['doctor/index'],],
                            ['label' => '病人基本信息管理', 'icon' => 'file-code-o', 'url' => ['patient/index'],],
                            [
                                'label' => '账号管理',
                                'icon' => 'share',
                                'url' => '#',
                                'items' => [
                                    ['label' => '用户账号管理', 'icon' => 'file-code-o', 'url' => ['user/index'],],
                                    ['label' => '医生账号管理', 'icon' => 'file-code-o', 'url' => ['adminuser/index'],],
                                    ],
                            ],
                            ['label' => '科室管理', 'icon' => 'dashboard', 'url' => ['department/index'],],

                            ['label' => '视频上传', 'icon' => 'dashboard', 'url' => ['video/index'],],
                            ['label' => '奖状上传', 'icon' => 'dashboard', 'url' => ['jiang/index'],],
                            ['label' => '画廊上传', 'icon' => 'dashboard', 'url' => ['gallery/index'],],
                        ],
                    ],
                    ['label' => '挂号信息概览', 'icon' => 'dashboard', 'url' => ['appointments/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
