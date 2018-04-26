<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $content;
    public $email;

    public function rules()
    {
        return [
            [['content', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}

