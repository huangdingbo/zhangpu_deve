<?php


namespace frontend\controllers;


use common\models\Appointments;
use common\models\Conf;
use common\models\Doctor;
use yii\db\Query;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){
        $this->layout = 'myLayoutNone';
        $model = new Appointments();
        $jiang = Conf::find()->where(['type' => '2','is_join' => '1'])->orderBy('create_at desc')->asArray()->all();
        //更新访问量
        $item = (new Query())->from('num')->one();
        $num = $item['total'] + 1;
        (new Query())->createCommand()->update('num',['total' => $num],['id' => $item['id']])->execute();
        return $this->render('index',[
            'model' => $model,
            'videos' => Conf::find()->where(['type' => '1','is_join' => '1'])->orderBy('create_at desc')->asArray()->one(),
            'doctors' => Doctor::find()->orderBy('create_at desc')->limit('3')->asArray()->all(),
            'jiang' => $jiang,

        ]);
    }
}