<?php


namespace frontend\controllers;


use common\models\Conf;
use yii\web\Controller;

/**
 * Class GalleryController
 * @package frontend\controllers
 * 画廊
 */
class GalleryController extends Controller
{
    public function actionIndex(){
        $this->layout = 'myLayoutBig';

        return $this->render('index',[
            'list' => Conf::find()->where(['type' => '3'])->asArray()->all(),
        ]);
    }
}