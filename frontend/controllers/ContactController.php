<?php


namespace frontend\controllers;


use yii\web\Controller;

class ContactController extends Controller
{
    public function actionIndex(){

        return $this->renderPartial('index');
    }
}