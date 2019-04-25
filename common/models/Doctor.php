<?php

namespace common\models;

use common\lib\Chinese2PinyinTool;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\ForbiddenHttpException;

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
            [[ 'name', 'sex','pic', 'age', 'position', 'duty', 'education', 'department_id', 'graduate_school', 'good_field', 'introduction'], 'required'],
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

    /**
     * @param $name
     * @return mixed
     * 添加用户账户,返回新增主键ID
     */
    public function addUser($name){
        $nameForPinyin = (new Chinese2PinyinTool())->get_pinyin($name).rand('0','10000');
        if ($this->CheckUserIsExit($nameForPinyin)){
            throw new ForbiddenHttpException('用户名重复，请稍后重试！！！');
        }
        $userModel = new User();
        $userModel->username = $nameForPinyin;
        $userModel->setPassword('123456');
        $userModel->generateAuthKey();
        $userModel->password = '*';
        $userModel->email = $nameForPinyin.'@qq.com';
        $userModel->status = User::STATUS_ACTIVE;
        $userModel->type = '1';
        $userModel->created_at = time();
        $userModel->updated_at = time();
        $userModel->save();

        return $this->CheckUserIsExit($nameForPinyin);

    }

    /**
     * @param $username
     * @return mixed
     * 检查用户是否已经存在
     */
    public function CheckUserIsExit($username){

        $user = User::findOne(['username' => $username]);

        return ArrayHelper::getValue($user,'id');
    }

    /**
     * @param bool $insert
     * @return bool
     * 数据保存前的操作
     */
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if($insert){
                $this->create_at = date('Y-m-d H:i:s',time());
                $this->update_at = date('Y-m-d H:i:s',time());
            }else{
                $this->update_at = date('Y-m-d H:i:s',time());
            }
            return true;
        }else{
            return false;
        }
    }
}
