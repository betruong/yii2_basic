<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Hello;

class HelloController extends Controller{
    //create action
    public function actionIndex(){
        return $this->render('index');
    }
    //do something
    //echo "Hello";

    public function actionUser(){
        $model = new Hello();

        $model->setUser('Era', 'Yii.Eravietnam.net', 'yii@gmail.com');
        echo $model->getUser();
    }
}

//http://localhost:8080/index.php?r=hello%2Fuser