<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Adminuser */

$this->title = '创建医生账号';
$this->params['breadcrumbs'][] = ['label' => '账号管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminuser-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
