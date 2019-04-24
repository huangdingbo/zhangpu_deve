<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "appointments".
 *
 * @property int $id
 * @property string $user_id_normal user表普通用户id
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id_normal' => 'User Id Normal',
            'doctor_id' => 'Doctor ID',
            'appointment_time' => 'Appointment Time',
            'submit_time' => 'Submit Time',
            'line_num' => 'Line Num',
        ];
    }
}
