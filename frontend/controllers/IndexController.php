<?php


namespace frontend\controllers;


use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){


        return $this->renderPartial('index');
    }
}