<?php

namespace app\models;

use yii\base\Model;

class NewForm extends Model {

    public $valuea;
    public $valueb;

    public function rules() {

        return[
            [['valuea', 'valueb'], 'required'],
            ['valuea', 'number'], ['valueb', 'number']
        ];
    }
}

?>