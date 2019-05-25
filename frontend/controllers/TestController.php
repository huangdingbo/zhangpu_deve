<?php


namespace frontend\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        $this->layout = 'myLayout';
        return $this->render('index');
    }

    public function actionEmail(){
        $mail = \Yii::$app->mailer->compose();
        $mail->setTo('1534003110@qq.com')
            ->setSubject('测试邮件')
            ->setTextBody('fssfdfdsfd');
        if ($mail->send()){
            echo '成功';
        }else{
            echo "失败";
        }
    }
}