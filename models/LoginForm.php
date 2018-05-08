<?php

namespace app\models;

use Yii;
use yii\base\Model;


class LoginForm extends Model
{
    public $email;
    public $password;
    public $rememberMe = true;




    public function rules(){
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['rememberMe', 'boolean'],

            ['password', 'validatePassword'],
        ];
    }


    public function validatePassword($attribute, $params){
        if (!$this->hasErrors()) {
            $user = $this -> getUser(User::findByEmail($this -> email));
            if (!$user || !$user->validatePassword($this -> password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }


    public function login(){
        if ($this->validate()) {
          $user = $this -> getUser(User::findByEmail($this -> email));
            return Yii::$app->user->login($user, $this->rememberMe ? 3600*24*30 : 0);
        }
      }
    }
