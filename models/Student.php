<?php

namespace app\models;

use yii\db\ActiveRecord;

    class Student extends ActiveRecord {

        public function rules() {
            return [
                [['surname', 'firstName', 'dateOfBirth', 'address', 'number'],'required'], 
                [['surname', 'firstName', 'patronymic'], 'match', 'pattern' => '/^[а-яА-Я]+$/ui'],

                [['number'], 'match', 'pattern'=>'/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}+$/'],
            ]; 
        }

        public function attributeLabels() {
            return [
                'surname' => 'Введите вашу фамилию',
                'firstName' => 'Введите ваше имя',
                'patronymic' => 'Введите ваше отчество',
                'dateOfBirth' => 'Введите вашу дату рождения',
                'address' => 'Введите ваш адрес прописки',
                'number' => 'Введите ваш номер телефона',
            ];
        }

        public static function tableName() {
            return 'student';
        }

}