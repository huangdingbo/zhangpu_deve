<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property int $id
 * @property string $user_id user表id
 * @property string $name 姓名
 * @property string $sex 性别
 * @property string $age 年龄
 * @property string $position 职称
 * @property string $duty 职务
 * @property string $education 学历
 * @property string $department_id 科室id
 * @property string $graduate_school 毕业院校
 * @property string $good_field 擅长领域
 * @property string $introduction 简介
 * @property string $is_appointment 是否可预约，0不可1可以
 * @property string $max_num 每日最多预约人数
 * @property string $create_at 创建时间
 * @property string $update_at 最后更新时间
 * @property string $pic 照片
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'sex','pic', 'age', 'position', 'duty', 'education', 'department_id', 'graduate_school', 'good_field', 'introduction', 'max_num', 'create_at', 'update_at'], 'required'],
            [['user_id', 'department_id'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 30],
            [['sex', 'age', 'max_num'], 'string', 'max' => 10],
            [['position', 'duty', 'education', 'create_at', 'update_at'], 'string', 'max' => 50],
            [['graduate_school'], 'string', 'max' => 100],
            [['good_field', 'introduction','pic'], 'string', 'max' => 500],
            [['is_appointment'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => '姓名',
            'sex' => '性别',
            'age' => '年龄',
            'position' => '职称',
            'duty' => '职务',
            'education' => '学历',
            'department_id' => '科室id',
            'graduate_school' => '毕业院校',
            'good_field' => '擅长领域',
            'introduction' => '简介',
            'is_appointment' => '是否可预约',
            'max_num' => '每日最多预约人数',
            'create_at' => '创建时间',
            'update_at' => '最后更新时间',
            'pic' => '照片',
        ];
    }
}
