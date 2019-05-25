<?php
use yii\helpers\Html;

$this->title = '添加我的信息';
?>

<div class="patient-create">

    <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
