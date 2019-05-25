<?php

namespace backend\controllers;

use common\models\Doctor;
use common\models\Patient;
use Yii;
use common\models\Appointments;
use common\models\AppointmentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AppointmentsController implements the CRUD actions for Appointments model.
 */
class AppointmentsController extends CommonController
{
    protected $mustlogin = ['index','view','patient','doctor'];


    /**
     * Lists all Appointments models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppointmentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Appointments model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     * 病人基本信息
     */
    public function actionPatient($id){
        $appointModel = $this->findModel($id);
        $patientId = $appointModel->user_id_normal;

        $model = Patient::findOne(['user_id' => $patientId]);

        return $this->renderAjax('patient',['model' => $model]);
    }

    public function actionDoctor($id){

        $appointModel = $this->findModel($id);
        $doctorId = $appointModel->doctor_id;
        $model = Doctor::findOne(['id' => $doctorId]);
        return $this->renderAjax('doctor',['model' => $model]);
    }


    protected function findModel($id)
    {
        if (($model = Appointments::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
