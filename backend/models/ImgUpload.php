<?php
/**
 * Created by PhpStorm.
 * User: huang
 * Date: 2019/1/29
 * Time: 11:36
 */

namespace backend\models;


use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class ImgUpload extends Model
{
    public $file;
    private $_appendRules;
    public function init ()
    {
        parent::init();
        $extensions = Yii::$app->params['webuploader']['baseConfig']['accept']['extensions'];
        $this->_appendRules = [
            [['file'], 'file', 'extensions' => $extensions],
        ];
    }
    public function rules()
    {
        $baseRules = [];
        return array_merge($baseRules, $this->_appendRules);
    }
    /**
     *
     */
    public function upImage ()
    {
        $model = new static;
        $model->file = UploadedFile::getInstanceByName('file');

        if (!$model->file) {
            return false;
        }
        $relativePath = $successPath = '';
        if ($model->validate()) {
            $relativePath = Yii::$app->params['imageUploadRelativePath'];
            $successPath = Yii::$app->params['imageUploadSuccessPath'];
            $baseName = time().rand('1','100000');
            $fileName =  $baseName . '.' . $model->file->extension;
            if (!is_dir($relativePath)) {
                FileHelper::createDirectory($relativePath);
            }
            $model->file->saveAs($relativePath . $fileName);
            return [
                'code' => 0,
                'url' => Yii::$app->params['domain'] . $successPath . $fileName,
                'attachment' => $successPath . $fileName
            ];
        } else {
            $errors = $model->errors;
            return [
                'code' => 1,
                'msg' => current($errors)[0]
            ];
        }
    }
}