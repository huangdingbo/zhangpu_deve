<?php


namespace backend\controllers;


use common\models\Appointments;
use common\models\IndexModel;
use yii\helpers\Url;
use yii\web\Controller;

class IndexController extends CommonController
{
    protected $mustlogin = ['index','welcome','nav'];

    public function actionIndex(){
        $this->getView()->title = false;

        $visitNum = ((new \yii\db\Query())->from('num')->where(['id' => '1'])->select('total')->one())['total'];
        $todayBeginTime = date('Y-m-d',time()).' 00:00:00';
        $todayEndTime = date('Y-m-d',time()).' 23:59:59';
        $todayApponitNum = Appointments::find()->where(['>=','appointment_time',$todayBeginTime])->andWhere(['<=','appointment_time',$todayEndTime])->count();
        $todaySeeDoctorNum = Appointments::find()->where(['>=','appointment_time',$todayBeginTime])->andWhere(['<=','appointment_time',$todayEndTime])->andWhere(['status' => 1])->count();
        //历史就诊率
        $total = Appointments::find()->count();
        $alreadyNum = Appointments::find()->where(['status' => '1'])->count();
        $historyNum = round(($alreadyNum / $total)*100,'2');
        //近三十天预约人数
        $list = IndexModel::getThreeDaysRend();
        $keys = array();
        $values = array();
        foreach ($list as $key=>$value){
            $keys[] = $key;
            $values[] = $value;
        }

        return $this->render('index',[
            'visitNum' => $visitNum,
            'todayApponitNum' => $todayApponitNum,
            'todaySeeDoctorNum' => $todaySeeDoctorNum,
            'historyNum' => $historyNum,
            'keys' => json_encode($keys),
            'values' => json_encode($values),
        ]);

    }

    public function actionWelcome(){
        return $this->renderPartial('welcome');
    }

    public function actionNav(){

        return $this->renderAjax('nav');
    }
}