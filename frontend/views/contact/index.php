<?php

use kartik\datetime\DateTimePicker;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>

<div class="contact-page-w3ls inner-padding">
    <div class="container">
        <div class="w3-heading-all">
            <h3>在线预约</h3>
        </div>
        <div class="contact-info-w3ls">
            <div class="contact-left-w3layouts">
                <div class="contact-w3-agileits" style="width:500px ">
                    <img style="height: 200px;width: 200px" src="<?=Yii::$app->params['domain'].$item->pic?>" alt="img">
                    <div class="right-contact-w3ls">
                        <div><h6>姓名：<?=$item->name?></h6></div>
                        <div style="margin-top:12px "><p class="work-w3">科室：<?=(\common\models\Department::findOne(['id' => $item->department_id]))->name?></p></div>
                        <div class="span-sub-w3ls" style="margin-top:12px ">
                            <p class="number-w3">职称：<?=$item->position?></p>
                        </div>
                        <div class="span-sub-w3ls" style="margin-top:12px ">
                            <p>学历：<?=$item->education?></p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div style="float: left;width: 600px">
                <h5 class="title-w3">请在下方填写预约信息！</h5>
                <br>
                <?php
                $list = [];
                if (Yii::$app->request->get('id') == 0){
                    $list = \common\models\Doctor::find()->select('name,id')->indexBy('id')->asArray()->column();
                }else{
                    $list = \common\models\Doctor::find()->select('name,id')->where(['id' => $item['id']])->indexBy('id')->asArray()->column();
                }
                ?>
                <?php $form = ActiveForm::begin()?>
                <?=$form->field($appointmentsModel,'doctor_id')->dropDownList($list)->label('医生姓名')?>

                <?= $form->field($appointmentsModel, 'appointment_time')->widget(DateTimePicker::classname(), [
                    'options' => ['placeholder' => '请选择任务开始时间'],
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd hh:ii:00',
                        'todayHighlight' => true
                    ]
                ]); ?>
                <div class="clearfix"> </div>

                <div class="date_btn">
                    <?= Html::submitButton('提交预约', ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                </div>
                <?php ActiveForm::end()?>

            </div>
            <div class="clearfix"> </div>
        </div>
        <!---728x90--->
    </div>
</div>
