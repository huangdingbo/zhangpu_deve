<?php


namespace frontend\controllers;


use common\models\Appointments;
use common\models\Doctor;
use Yii;
use yii\web\Controller;

class ContactController extends Controller
{
    public function actionIndex($id){
        //如果没登录就登录
        if (empty(Yii::$app->user->id)){
            Yii::$app->session->setFlash('warning','请先登录！');
            return $this->redirect(['/site/login']);
        }
        if (Appointments::findOne(['user_id_normal' => \Yii::$app->user->id])){
            \Yii::$app->session->setFlash('warning','您已经有预约，不能继续预约！');
            return $this->redirect(['doctor/index']);
        }

        $this->layout = 'myLayoutBig';

        $model = new Doctor();

        $item = $model->getDoctorDetail($id);

        $appointmentsModel = new Appointments();

        if ($appointmentsModel->load(\Yii::$app->request->post())){
            $appointmentsModel->addInfo();
            if ($appointmentsModel->save()){
                return $this->redirect(['appointment/index']);
            }

        }
        return $this->render('index',[
            'item' => $item,
            'appointmentsModel' => $appointmentsModel
        ]);
    }
}