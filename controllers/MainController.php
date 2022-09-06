<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\StudentForm;

class MainController extends Controller {

    public function addToFile($student)  {
        file_put_contents("student.txt", "{$student}", FILE_APPEND);
    }
    
    public function actionStudent() {
        $model = new StudentForm();        

        if ($model->load(Yii::$app->request->post())) {
            $student = $model->name . ' ' . $model->date . ' ' .$model->address . ' ' . $model->number . "\n";
            $this->addToFile($student);
            $this->refresh();
            return $this->render('student', ['model' => $model]);
        } else {
            return $this->render('student', ['model' => $model]);
        }
    }
}