<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "appointments".
 *
 * @property int $id
 * @property string $user_id_normal user 表id
 * @property string $doctor_id 医生id
 * @property string $appointment_time 预约时间
 * @property string $submit_time 提交时间
 * @property string $line_num 排队号
 */
class Appointments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $username;
    public $email;
    public static function tableName()
    {
        return 'appointments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id_normal', 'doctor_id', 'appointment_time', 'submit_time', 'line_num'], 'required'],
            [['user_id_normal', 'doctor_id', 'appointment_time', 'submit_time', 'line_num'], 'string', 'max' => 50],
            [['username,email'],'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id_normal' => 'Patient ID',
            'doctor_id' => '预约医生',
            'appointment_time' => '预约时间',
            'submit_time' => '提交时间',
            'line_num' => '当前排队号',
            'username' => '用户名',
            'email' => '邮箱',
        ];
    }

    public function getUserAccount(){
        return $this->hasOne(User::className(),['id' => 'user_id_normal']);
    }

    public function addInfo(){
        $this->user_id_normal = (string)Yii::$app->user->id;
        $this->submit_time = date('Y-m-d H:i:s',time());
        //排队号
        $totalPerson = self::find()->where(['doctor_id' => $this->doctor_id])->count();
        $this->line_num = (string)($totalPerson + 1);
    }

    public function getDoctor(){
        return $this->hasOne(Doctor::className(),['id' => 'doctor_id']);
    }

}
