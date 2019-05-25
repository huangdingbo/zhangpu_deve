<?php


namespace frontend\controllers;


use common\models\Patient;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class MeController extends Controller
{
    public function actionIndex(){
        //如果没登录就登录
        if (empty(Yii::$app->user->id)){
            Yii::$app->session->setFlash('warning','请先登录！');
            return $this->redirect(['/site/login']);
        }
        //如果没增加个人信息就增加
        $isOk = Patient::findOne(['user_id' => Yii::$app->user->id]);
        if (empty($isOk)){
            Yii::$app->session->setFlash('warning','请先添加我的信息！');
            return $this->redirect(['/me/create']);
        }

        $this->layout = 'myLayoutBig';

        return $this->render('index',[
            'model' => $isOk
        ]);
    }

    public function actionCreate()
    {
        $this->layout = 'myLayout';
        $model = new Patient();
        if (Yii::$app->user->id){
            $model->user_id = (string)Yii::$app->user->id;
            $model->update_at = date('Y-m-d H:i:s',time());
            $model->create_at = date('Y-m-d H:i:s',time());
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['me/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $this->layout = 'myLayout';
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Patient::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}