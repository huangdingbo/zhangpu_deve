<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="section-w3ls agileits-gallery" id="portfolio">
    <div class="w3-heading-all">
        <h3>我的信息</h3>
        <div class="site-login" style="text-align: center">
            <h1><?= Html::encode($this->title) ?></h1>

            <div class="row" style="display: flex;justify-content: center">
                <div class="col-lg-5">

                        <p>
                            <?= Html::a('修改我的信息', ['update','id' => $model->id], ['class' => 'btn btn-success']) ?>
                        </p>
                        <br>
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
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
                <br>
            </div>
        </div>
    </div>
</div>
