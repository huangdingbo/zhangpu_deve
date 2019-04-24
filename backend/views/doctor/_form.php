<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \common\models\Department;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true])->label('年龄') ?>

    <?= $form->field($model, 'pic')->widget('manks\FileInput', [
            //多个图片上传需添加以下参数
//            'clientOptions' => [
//                'pick' => [
//                    'multiple' => true,
//                ],
//            ],
    ]);?>

    <?=$form->field($model,'sex')
        ->dropDownList([1=>'男',2=>'女'],['prompt'=>'请选择性别']);
    ?>

    <?=$form->field($model, 'position')->widget(Select2::classname(), [
        'data' => Yii::$app->params['doctorPositions'],
        'options' => ['placeholder' => '请选择 ...'],
    ]);?>

    <?=$form->field($model, 'duty')->widget(Select2::classname(), [
        'data' => Yii::$app->params['doctorPositions'],
        'options' => ['placeholder' => '请选择 ...'],
    ]);?>

    <?=$form->field($model, 'education')->widget(Select2::classname(), [
        'data' => Yii::$app->params['doctorPositions'],
        'options' => ['placeholder' => '请选择 ...'],
    ]);?>

    <?=$form->field($model, 'department_id')->widget(Select2::classname(), [
        'data' => Department::find()->select('name,id')->indexBy('id')->column(),
        'options' => ['placeholder' => '请选择 ...'],
    ]);?>

    <?= $form->field($model, 'graduate_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'good_field')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'introduction')->textarea(['rows' => 6]) ?>



    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
