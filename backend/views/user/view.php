<?php

use common\models\User;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <p>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'email:email',
            'status',
            [
                'attribute' => 'status',
                'label' => '账号状态',
                'value' => function($model){
                    return $model->status == User::STATUS_ACTIVE ? '正常' : '停用';
                },
            ],
            [
                'attribute' => 'type',
                'label' => '账号类型',
                'value' => function($model){
                    return $model->type == '1' ? '医师账号' : '用户账号';
                },
            ],
            [
                    'attribute' => 'created_at',
                    'format' => ['date', 'Y-m-d H:i:s'],
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'Y-m-d H:i:s'],
            ],
        ],
    ]) ?>

</div>
