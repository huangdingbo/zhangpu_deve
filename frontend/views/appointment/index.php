<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="section-w3ls agileits-gallery" id="portfolio">
    <div class="w3-heading-all">
        <h3>我的预约</h3>
        <?php if ($model){?>
            <div style="width: 900px;margin: 0 auto">
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
            <div style="text-align: center"><?=Html::a('删除预约',['appointment/del','id' => $model->id])?></div>
        <?php }else{?>
            <div style="text-align: center"> 你还没有预约！</div>
        <?php }?>
    </div>
</div>
