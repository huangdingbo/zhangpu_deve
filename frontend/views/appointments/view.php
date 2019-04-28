<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Appointments */

$this->title = '我的预约信息';
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="appointments-view">


    <div style="width:600px;height: 700px;position: absolute;top:50%;left: 50%;transform: translate(-50%,-50%);">
        <h1><?= Html::encode($this->title) ?></h1>
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                [
                        'attribute' => 'doctor_id',
                        'value' => $model->doctor->name
                ],
                'appointment_time',
                'submit_time',
                'line_num',
            ],
        ]) ?>
    </div>



</div>
