<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DoctorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '医师基本信息管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加医师', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'name',
            [
                'attribute' => 'sex',
                'label' => '性别',
                'value' => function($dataProvider){
                    return $dataProvider->sex == 1 ? '男' : '女';
                },
                'filter' => array('1' => '男' ,'2' => '女'),
            ],
            'age',
            [
                'attribute' => 'position',
                'label' => '职称',
                'value' => function($dataProvider){
                    return Yii::$app->params['doctorPositions'][$dataProvider->position];
                },
                'filter' => Yii::$app->params['doctorPositions'],
            ],
            [
                'attribute' => 'duty',
                'label' => '职务',
                'value' => function($dataProvider){
                    return Yii::$app->params['doctorDuty'][$dataProvider->duty];
                },
                'filter' => Yii::$app->params['doctorDuty'],
            ],
            [
                'attribute' => 'education',
                'label' => '学历',
                'value' => function($dataProvider){
                    return Yii::$app->params['doctorEducation'][$dataProvider->education];
                },
                'filter' => Yii::$app->params['doctorEducation'],
            ],
            [
                'attribute' => 'department_id',
                'label' => '科室',
                'value' => function($dataProvider){
                    return (\common\models\Department::find()->select('name,id')->indexBy('id')->column())[$dataProvider->department_id];
                },
                'filter' => \common\models\Department::find()->select('name,id')->indexBy('id')->column(),
            ],
            'graduate_school',
//            'good_field',
            //'introduction',
            [
                'attribute' => 'is_appointment',
                'label' => '是否可预约',
                'value' => function($dataProvider){
                    return $dataProvider->is_appointment == 1 ? '是' : '否';
                },
                'filter' => array('1' => '是' ,'0' => '否'),
                'headerOptions' => ['width' => '130'],
            ],
            'max_num',
            //'create_at',
            //'update_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{delete}',
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
</div>
<!-- BUG：必须强引，不然加载不出来-->
<?php $this->registerJsFile('assets\4eab3d0d\jquery.js', ['position' => $this::POS_END]);?>
<?php $this->registerJsFile('assets/93e99610/webuploader/init.js', ['position' => $this::POS_END]);?>
