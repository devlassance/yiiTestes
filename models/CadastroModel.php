<?php

namespace app\models;

use Yii;
use yii\base\Model;


class CadastroModel extends Model
{
    public $nome;
    public $email;
    public $idade;

    
    public function rules(){
        //fazendo algumas validações nos seguintes campos
        return[
            [['nome', 'email', 'idade'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly' => true],
        ];
        
    }

    public function attributeLabels(){
        return [
            'nome' => 'Nome Completo',
            'email' => 'Email',
            'idade' => 'Idade'
        ];
    }
}
