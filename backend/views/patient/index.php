<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '病人进本信息管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <p>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'name',
            'sex',
            [
                    'attribute' => 'sex',
                    'value' => function($dataProvider){
                        return $dataProvider->sex == '1' ? '男' : '女';
                    },
                    'filter' => ['1' => '男', '2' => '女'],
            ],
            'age',
            'tel',
            'address',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{delete}',
                'buttons' => [
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
</div>
