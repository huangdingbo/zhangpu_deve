<?php


namespace frontend\controllers;


use common\models\Appointments;
use Yii;
use yii\web\Controller;

class AppointmentController extends Controller
{
    public function actionIndex(){
        //如果没登录就登录
        if (empty(Yii::$app->user->id)){
            Yii::$app->session->setFlash('warning','请先登录！');
            return $this->redirect(['/site/login']);
        }
        $this->layout = 'myLayout';
        $uid = \Yii::$app->user->id;
        $appointInfo = Appointments::find()->where(['user_id_normal'=>$uid])->orderBy('submit_time desc')->one();
        $aid = '';
        if ($appointInfo){
            $aid = $appointInfo->id;
        }

        return $this->render('index', [
            'model' => Appointments::findOne(['id' => $aid]),
        ]);
    }

    public function actionDel($id){
        Appointments::findOne(['id' => $id])->delete();

        return $this->redirect(['index/index']);
    }
}