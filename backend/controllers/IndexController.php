<?php


namespace backend\controllers;


use yii\helpers\Url;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){

        return $this->render('index');

    }

    public function actionWelcome(){
        return $this->renderPartial('welcome');
    }

    public function actionNav(){

        return $this->renderAjax('nav');
    }
}