<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = '视频上传';
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'file')->fileInput()->label('文件') ?>

<?=$form->field($model,'content')->textarea(['rows' => 6])->label('简介')?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end() ?>