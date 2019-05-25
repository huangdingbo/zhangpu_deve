<?php


namespace backend\controllers;


use common\models\Conf;
use yii\web\Controller;

class GalleryController extends CommonController
{
    protected $mustlogin = ['index'];

    public function actionIndex(){
        $model = new Conf();

        if ($model->load(\Yii::$app->request->post())){
            $model->src = \Yii::$app->params['domain'].$model->src;
            $model->type = '3';
            if ($model->save()){
                \Yii::$app->session->setFlash('success','数据添加成功！');
                return $this->redirect(['/gallery/index']);
            }
        }
        return $this->render('index',[
            'model' => $model
        ]);
    }
}