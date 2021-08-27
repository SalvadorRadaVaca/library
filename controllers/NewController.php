<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessController;
use yii\web\Controller;

use app\models\NewForm;

class NewController extends Controller {

    public function actionBeginning() {
        
        $model= new NewForm; 

        if($model->load(Yii::$app->request->post()) && $model->validate()) {

            $valueAnswer= ("The result is: ". $model->valuea + $model->valueb);

            return $this->render('beginning', ['message' => $valueAnswer, 'model' => $model]);
        }
        
        return $this->render('beginning', ['message' => "", 'model' => $model]);
    }
}

?>