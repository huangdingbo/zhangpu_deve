<?php


use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Doctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doctor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute' => 'sex',
                'label' => '性别',
                'value'=>function($model){
                    return $model->sex == 1 ? '男' : '女';
                },
            ],
            'age',
            [
                'attribute' => 'position',
                'label' => '职称',
                'value'=>function($model){
                    return Yii::$app->params['doctorPositions'][$model->position];
                }
            ],
            [
                'attribute' => 'duty',
                'label' => '职务',
                'value'=>function($model){
                    return Yii::$app->params['doctorDuty'][$model->duty];
                },
            ],
            [
                'attribute' => 'education',
                'label' => '学历',
                'value'=>function($model){
                    return Yii::$app->params['doctorEducation'][$model->education];
                }
            ],
            [
                'attribute' => 'department_id',
                'label' => '科室',
                'value'=>function($model){
                    $map = \common\models\Department::find()->select('name,id')->indexBy('id')->column();
                    return $map[$model->education];
                }
            ],
            'graduate_school',
            'good_field:ntext',
            'introduction:ntext',
            'is_appointment',
            'max_num',
            'create_at',
            'update_at',
        ],
        'template' => '<tr><th style="width: 50%;">{label}</th><td>{value}</td></tr>',
        'options' => ['class' => 'table table-striped table-bordered detail-view'],
    ]) ?>

</div>
