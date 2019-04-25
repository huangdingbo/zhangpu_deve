<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $id
 * @property string $user_id 用户表id
 * @property string $name 姓名
 * @property string $sex 性别
 * @property string $age 年龄
 * @property string $tel 电话
 * @property string $address 住址
 * @property string $medical_records 病历
 * @property string $drug_allergy 药物过敏史
 * @property string $create_at 创建时间
 * @property string $update_at 最后修改时间
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'sex', 'age', 'tel', 'address', 'medical_records', 'drug_allergy', 'create_at', 'update_at'], 'required'],
            [['user_id', 'name', 'tel', 'create_at', 'update_at'], 'string', 'max' => 50],
            [['sex', 'age'], 'string', 'max' => 10],
            [['address'], 'string', 'max' => 100],
            [['medical_records', 'drug_allergy'], 'string', 'max' => 500],
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
            'tel' => '电话',
            'address' => '住址',
            'medical_records' => '病历',
            'drug_allergy' => '药物过敏史',
            'create_at' => '创建时间',
            'update_at' => '最后修改时间',
        ];
    }
}
