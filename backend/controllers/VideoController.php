<?php


namespace backend\controllers;


use backend\models\UploadForm;
use common\models\Conf;
use yii\web\Controller;
use yii\web\UploadedFile;

class VideoController extends CommonController
{
    protected $mustlogin = ['index'];

    public function actionIndex(){
        $model = new UploadForm();
        if (\Yii::$app->request->isPost){
           $model->file = UploadedFile::getInstance($model,'file');

           $model->content = (\Yii::$app->request->post())['UploadForm']['content'];

           if ($model->file && $model->validate()){
                $host = \Yii::$app->request->getHostInfo();
                $webRoot = \Yii::getAlias('@web',false);
                $fileName = 'uploads/video/' . time() . '.'.$model->file->extension;
                $src = $host . $webRoot. '/' . $fileName;

               if ( $model->file->saveAs($fileName)){
                   $confModel = new Conf();
                   $confModel->name = $model->file->baseName;
                   $confModel->type = '1';
                   $confModel->src = $src;
                   $confModel->content1 = $model->content;
                   if ($confModel->save()){
                       \Yii::$app->session->setFlash('success','文件上传成功！');
                       return $this->redirect(['/video/index']);
                   }
               }

           }
        }
        return $this->render('index',['model' => $model]);
    }
}