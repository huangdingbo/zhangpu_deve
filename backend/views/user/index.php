<?php

use common\models\User;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'username',
            'email:email',
            [
                'attribute' => 'status',
                'label' => '账户状态',
                'value' => function($dataProvider){
                    return $dataProvider->status == User::STATUS_ACTIVE ? '正常' : '停用';
                },
                'filter' => [User::STATUS_ACTIVE => '正常',User::STATUS_DELETED => '停用'],
                'contentOptions' => function($dataProvider){
                    return $dataProvider->status == User::STATUS_DELETED ? ['class' => 'bg-danger'] : ['class' => 'bg-success'];
                },
            ],
            [
                'attribute' => 'type',
                'label' => '账户类型',
                'value' => function($dataProvider){
                    return $dataProvider->type == '1' ? '医师账号' : '用户账户';
                },
                'filter' => ['type' => '医师账号','2' => '用户账户'],
            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'Y-m-d H:i:s'],
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'Y-m-d H:i:s'],
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{resetPassword}{delete}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('<button class = "btn btn-warning">修改</button>&nbsp;&nbsp;', $url, [
                            'title' => Yii::t('yii','修改'),
                            'aria-label' => Yii::t('yii','修改'),
                            'data-toggle' => 'modal',
                            'data-target' => '#update-modal',
                            'class' => 'data-update',
                            'data-id' => $key,
                        ],['color'=>'red']);
                    },
                    'view' => function ($url, $model, $key) {
                        return Html::a('<button class = "btn btn-success">查看</button>&nbsp;&nbsp;', $url, [
                            'title' => Yii::t('yii','查看'),
                            'aria-label' => Yii::t('yii','查看'),
                            'data-toggle' => 'modal',
                            'data-target' => '#view-modal',
                            'class' => 'data-view',
                            'data-id' => $key,
                        ]);
                    },
                    'resetPassword' => function ($url, $model, $key) {
                        return Html::a('<button class = "btn btn-primary">重置密码</button>&nbsp;&nbsp;', $url, [
                            'title' => Yii::t('yii','重置密码'),
                            'aria-label' => Yii::t('yii','重置密码'),
                            'data-toggle' => 'modal',
                            'data-target' => '#resetPassword-modal',
                            'class' => 'data-resetPassword',
                            'data-id' => $key,
                        ]);
                    },
                    'delete' => function($url,$model,$key){
                        return Html::a('<button class = "btn btn-danger">删除</button>&nbsp;&nbsp;', $url, [
                            'title' => Yii::t('yii','删除'),
                            'aria-label' => Yii::t('yii','删除'),
                            'data-confirm' => Yii::t('yii','你确定要删除吗？'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>
    <?php

    // 更新操作
    Modal::begin([
        'id' => 'update-modal',
        'header' => '<h4 class="modal-title" style="color: #0d6aad">修改</h4>',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>',
        'size' => 'modal-lg',
    ]);
    Modal::end();
    $requestUpdateUrl = Url::toRoute('update');
    $updateJs = <<<JS
    $('.data-update').on('click', function () {
        $.get('{$requestUpdateUrl}', { id: $(this).closest('tr').data('key') },
            function (data) {
                $('.modal-body').html(data);
            }  
        );
    });
JS;
    $this->registerJs($updateJs);
    ?>

    <?php
    // 查看操作
    Modal::begin([
        'id' => 'view-modal',
        'header' => '<h4 class="modal-title" style="color: #0d6aad">查看</h4>',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>',
        'size' => 'modal-lg',
    ]);
    Modal::end();
    $requestViewUrl = Url::toRoute('view');
    $viewJs = <<<JS
    $('.data-view').on('click', function () {
        $.get('{$requestViewUrl}', { id: $(this).closest('tr').data('key') },
            function (data) {
                $('.modal-body').html(data);
            }  
        );
    });
JS;
    $this->registerJs($viewJs);
    ?>

    <?php
    // 重置密码
    Modal::begin([
        'id' => 'resetPassword-modal',
        'header' => '<h4 class="modal-title" style="color: #0d6aad">重置密码</h4>',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>',
        'size' => 'modal-lg',
    ]);
    Modal::end();
    $requestResetPasswordUrl = Url::toRoute('reset-password');
    $ResetPasswordJs = <<<JS
    $('.data-resetPassword').on('click', function () {
        $.get('{$requestResetPasswordUrl}', { id: $(this).closest('tr').data('key') },
            function (data) {
                $('.modal-body').html(data);
            }  
        );
    });
JS;
    $this->registerJs($ResetPasswordJs);
    ?>
</div>
