<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Patient */

$this->title = '完善基本信息';

?>
<div class="patient-create">

    <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
    <div style="width:900px;height: 700px;position: absolute;top:50%;left: 50%;transform: translate(-50%,-50%);">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
