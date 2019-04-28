<?php


namespace frontend\controllers;


use common\models\Doctor;
use yii\web\Controller;

class AboutController extends Controller
{
    public function actionIndex(){
        $model = new Doctor();
        $list = $model->getDoctorInfo();
        return $this->render('index',['list' => $list]);
    }
}