<?php


namespace frontend\controllers;


use yii\web\Controller;

class AboutController extends Controller
{
    public function actionIndex(){

        return $this->renderPartial('index');
    }
}