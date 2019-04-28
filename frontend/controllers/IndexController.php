<?php


namespace frontend\controllers;


use common\models\Appointments;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){
        $model = new Appointments();

        return $this->render('index',['model' => $model]);
    }
}