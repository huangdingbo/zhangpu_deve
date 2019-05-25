<?php


namespace backend\controllers;


use common\models\Conf;
use yii\web\Controller;

class JiangController extends CommonController
{
    protected $mustlogin = ['index'];

    public function actionIndex(){
        $model = new Conf();

        if ($model->load(\Yii::$app->request->post())){

            $model->src = \Yii::$app->params['domain'] . $model->src;
            $model->type = '2';
            $model->create_at = (string)time();

            if ($model->save()){
                \Yii::$app->session->setFlash('success','图片上传成功！');
                return $this->redirect(['index']);
            }
        }
        return $this->render('index',[
            'model' => $model
        ]);
    }
}