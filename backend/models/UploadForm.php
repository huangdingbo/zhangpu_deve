<?php


namespace backend\models;


use yii\base\Model;

class UploadForm extends Model
{
    public $file;
    public $content;

    public function rules()
    {
        return [
            [['file'], 'file'],
            ['content','safe']
        ];
    }

}