<?php


namespace frontend\controllers;


use common\models\Appointments;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        $model = new Appointments();

        return $this->render('index',['model' => $model]);
    }
}