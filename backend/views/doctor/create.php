<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */

$this->title = '添加医师';
$this->params['breadcrumbs'][] = ['label' => '医师基本信息管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
