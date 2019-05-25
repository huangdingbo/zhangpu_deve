<?php


namespace frontend\controllers;


use common\models\Doctor;
use yii\web\Controller;

class DoctorController extends Controller
{
    public function actionIndex(){
        $this->layout = 'myLayoutBig';

        $model = new Doctor();
        $list = $model->getDoctorInfo();
        return $this->render('index',['list' => $list]);
    }
}