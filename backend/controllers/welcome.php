<?php


namespace backend\controllers;


use yii\web\Controller;

class welcome extends Controller
{
    public function actionIndex(){

        return $this->render('index');
    }
}