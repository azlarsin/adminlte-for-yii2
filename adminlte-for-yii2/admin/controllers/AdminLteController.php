<?php
/**
 * Created by PhpStorm.
 * User: chencheng
 * Date: 2015/3/12
 * Time: 10:45
 */

namespace admin\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
class AdminLteController extends Controller{

    public $layout = 'demo';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                    ],
                ],
            ],
        ];
    }

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionFaIcons(){
        return $this->render('fa-icons');
    }

    public function actionMenu2($button = 1){
        $data['button'] = $button;
        $data['content'] = "This is a page triggered by button{$button}. " ;

        return $this->render('menu2', $data);
    }

    public function actionMenu3($sub = 1){
        $data['sub'] = $sub;
        $data['content'] = "This is a page triggered by sub-menu {$sub}. " ;

        return $this->render('menu3', $data);
    }
}