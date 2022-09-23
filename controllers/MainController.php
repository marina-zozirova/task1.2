<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Student;
use yii\data\SqlDataProvider;

class MainController extends Controller {
    public function actionIndex() {
        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT * FROM student'
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionStudent() {
        $model = new Student();  
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', true);
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('success', false);
            }
        }
        return $this->render('student', ['model' => $model]);
    }
}