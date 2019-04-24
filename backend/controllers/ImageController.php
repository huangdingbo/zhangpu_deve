<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2019/1/29
 * Time: 11:29
 */

namespace backend\controllers;


use backend\models\ImgUpload;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class ImageController extends Controller
{
    public function actionUpload(){
        try {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $model = new ImgUpload();
            $info = $model->upImage();
            if ($info && is_array($info)) {
                return $info;
            } else {
                return ['code' => 1, 'msg' => 'error'];
            }
        } catch (\Exception $e) {
            return ['code' => 1, 'msg' => $e->getMessage()];
        }
    }
}