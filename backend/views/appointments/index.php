<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AppointmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '挂号信息管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appointments-index">

    <p>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'username',
                'value' => 'userAccount.username',
            ],
            [
                    'attribute' => 'email',
                    'value' => 'userAccount.email',
            ],
            'appointment_time',
            'submit_time',
            'line_num',


            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{patient}{doctor}',
                'buttons' => [
                    'patient' => function ($url, $model, $key) {
                        return Html::a('<button class = "btn btn-warning">病人信息</button>&nbsp;&nbsp;', $url, [
                            'title' => Yii::t('yii','病人信息'),
                            'aria-label' => Yii::t('yii','病人信息'),
                            'data-toggle' => 'modal',
                            'data-target' => '#patient-modal',
                            'class' => 'data-patient',
                            'data-id' => $key,
                        ],['color'=>'red']);
                    },
                    'doctor' => function ($url, $model, $key) {
                        return Html::a('<button class = "btn btn-success">预约医生</button>&nbsp;&nbsp;', $url, [
                            'title' => Yii::t('yii','预约医生'),
                            'aria-label' => Yii::t('yii','预约医生'),
                            'data-toggle' => 'modal',
                            'data-target' => '#doctor-modal',
                            'class' => 'data-doctor',
                            'data-id' => $key,
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
    <?php
    // 病人信息
    Modal::begin([
        'id' => 'patient-modal',
        'header' => '<h4 class="modal-title" style="color: #0d6aad">修改</h4>',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>',
        'size' => 'modal-lg',
    ]);
    Modal::end();
    $requestUpdateUrl = Url::to(['patient']);
    $updateJs = <<<JS
    $('.data-patient').on('click', function () {
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

    // 医生信息
    Modal::begin([
        'id' => 'doctor-modal',
        'header' => '<h4 class="modal-title" style="color: #0d6aad">查看</h4>',
        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">关闭</a>',
        'size' => 'modal-lg',
    ]);
    Modal::end();
    $requestViewUrl = Url::toRoute('doctor');
    $viewJs = <<<JS
    $('.data-doctor').on('click', function () {
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
