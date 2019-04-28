<?php

use common\models\Patient;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Patient */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="patient-view">

    <p>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'sex',
                'value' => function($model){
                    return $model->sex == 1 ? '男' : '女';
                }
            ],
            'sex',
            'age',
            'tel',
            'address',
            'medical_records',
            'drug_allergy',
            [
                'attribute' => 'create_at',
                'format' => ['date','Y-m-d H:i:s'],
            ],
            [
                'attribute' => 'update_at',
                'format' => ['date','Y-m-d H:i:s'],
            ],
        ],
    ]) ?>

</div>
