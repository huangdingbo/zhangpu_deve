<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = '画廊数据添加';
?>
<?php $form = ActiveForm::begin(); ?>
<?=$form->field($model, 'src')->widget('manks\FileInput', [
    //多个图片上传需添加以下参数
    'clientOptions' => [
        'pick' => [
            'multiple' => false,
        ],
    ]])->label('获奖图片');
?>
<?=$form->field($model,'name')->textInput()->label('名称')?>

<?=$form->field($model,'content1')->textarea(['rows' => 6])->label('简介')?>
<div class="form-group">
    <?= Html::submitButton('上传', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>
