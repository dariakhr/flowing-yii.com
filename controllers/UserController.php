<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\RegistrationForm;
use app\models\User;
use app\models\LoginForm;
use yii\filters\AccessControl;
use Yii;


class UserController extends Controller{
  public  function behaviors(){
    return [
      'access' => [
        'class' => AccessControl::className(),
        'only' => ['new', 'enter', 'signin', 'logout', 'auth-by-token'],
        'rules' => [
          [
            'allow' => true,
            'actions' => ['new', 'create', 'enter', 'signin', 'auth-by-token'],
            'roles' => ['?']
          ],
          [
            'allow' => true,
            'actions' => ['logout'],
            'roles' => ['@']
          ]
        ]
      ]
    ];
  }
  public function actionNew() {
    $model = new RegistrationForm;
    return $this -> render('registration', compact('model'));
  }
  public function actionCreate(){
    $model = new RegistrationForm;
    $model ->load(Yii::$app -> request -> post());
    if ($model -> registrate()) {
      $user = User::findByEmail($model -> email);
      Yii::$app -> session -> setFlash('success', 'thanks for registration, confirm ur email');
      Yii::$app -> mail -> compose('layouts/registration', [
        'user_info' => $model,
        'token' => $user -> auth_token
      ])
         ->setFrom(Yii::$app -> params['sendEmail'])
         ->setTo($model -> email)
         ->setSubject('Thank you for registration!')
         ->send();
      return $this -> goHome();
    }else {
      Yii::$app -> session -> setFlash('error','Smth was wrong, try again.');
      return $this -> render('registration', compact('model'));


    }
  }

  public function actionAuthByToken($token){
    $user = User::findOne(['auth_token' => $token]);
    if ($user) {
      $user -> is_confirmed = 1;
      $user -> save();
      Yii::$app -> user -> login($user);
      return $this -> goHome();
    }else {
      Yii::$app -> session -> setFlash('error', 'Something goes wrong, retry pls');
      return $this -> render('new', compact('model'));;

    }
  }
  public function actionEnter(){
    $model = new LoginForm;
    return $this -> render('enter', compact('model'));
  }

  public function actionSignin(){
      $model = new LoginForm;
      if ($model -> login()) {
         Yii::$app -> session -> setFlash('success','You are successfully entered!');
        return $this -> goHome();
      }else {
        Yii::$app -> session -> setFlash('error','Smth was wrong, try again.');
        return $this -> render('enter', compact('model'));

  }
}
  public function actionLogout() {
      Yii::$app->user->logout();
      return $this->goHome();


}
}
