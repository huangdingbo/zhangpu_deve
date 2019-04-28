<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Appointments */

$this->title = 'Update Appointments: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appointments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
