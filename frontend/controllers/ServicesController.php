<?php


namespace frontend\controllers;


use yii\web\Controller;

class ServicesController extends Controller
{
    public function actionIndex(){

        return $this->renderPartial('index');
    }
}