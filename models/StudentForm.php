<?php

namespace app\models;

use yii\base\Model;

    class StudentForm extends Model {
        public $name;
        public $date;
        public $address;
        public $number;

        public function rules() {
        return [
            [['name', 'date', 'address', 'number'], 'required'], 
        ];

    }

}