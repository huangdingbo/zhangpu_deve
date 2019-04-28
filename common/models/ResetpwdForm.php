<?php
namespace common\models;

use common\models\User;
use yii\base\Model;
use common\models\Adminuser;

/**
 * Signup form
 */
class ResetpwdForm extends Model
{
    public $username;
    public $password;
    public $password_repeat;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['password','username'], 'required'],
            ['password', 'string', 'min' => 6],

            ['password_repeat','compare','compareAttribute'=>'password','message'=>'两次输入密码不一致'],

        ];
    }

    public function attributeLabels()
    {
        return [

            'password' => '密码',
            'password_repeat' => '重新输入密码',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function resetpassword($id)
    {
        if (!$this->validate()) {
            return null;
        }

        $user = User::findOne($id);
        $user->setPassword($this->password);


        return $user->save() ? true : false;
    }
}
