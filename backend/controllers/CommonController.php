<?php


namespace backend\controllers;


use yii\web\Controller;


class CommonController extends Controller
{

    //acf
    protected $actions = ['*'];
    protected $except = [];
    protected $mustlogin = [];
    protected $verbs = ['delete' => ['POST']];

    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => $this->actions,
                'except' => $this->except,
                'rules' => [
                    [
                        'allow' => false,
                        'actions' => empty($this->mustlogin) ? [] : $this->mustlogin,
                        'roles' => ['?'], // guest
                    ],
                    [
                        'allow' => true,
                        'actions' => empty($this->mustlogin) ? [] : $this->mustlogin,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => \yii\filters\VerbFilter::className(),
                'actions' => $this->verbs,
            ],
        ];
    }
}