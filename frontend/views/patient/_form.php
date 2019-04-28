<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model,'sex')
        ->dropDownList([1=>'男',2=>'女'],['prompt'=>'请选择学生性别']);
    ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'medical_records')->textarea(['maxlength' => true,'rows' => 6]) ?>

    <?= $form->field($model, 'drug_allergy')->textarea(['maxlength' => true,'rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
