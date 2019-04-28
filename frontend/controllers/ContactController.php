<?php


namespace frontend\controllers;


use common\models\Appointments;
use common\models\Doctor;
use yii\web\Controller;

class ContactController extends Controller
{
    public function actionIndex($id){
        $model = new Doctor();

        $item = $model->getDoctorDetail($id);

        $appointmentsModel = new Appointments();

        if ($appointmentsModel->load(\Yii::$app->request->post())){
            $appointmentsModel->addInfo();
            if ($appointmentsModel->save()){
                //跳到我的预约
            }
        }
        return $this->render('index',[
            'item' => $item,
            'appointmentsModel' => $appointmentsModel
        ]);
    }
}