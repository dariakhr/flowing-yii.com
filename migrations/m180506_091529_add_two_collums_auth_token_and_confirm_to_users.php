<?php

use yii\db\Migration;

class m180506_091529_add_two_collums_auth_token_and_confirm_to_users extends Migration
{

  public function safeUp() {
      $this -> addColumn('users', 'auth_token', $this -> string());
      $this -> addColumn('users', 'is_confirmed', $this -> boolean() -> defaultValue(0));
    }

    public function safeDown() {
      $this -> dropColumn('users', 'auth_token');
      $this -> dropColumn('users', 'is_confirmed');
    }

}
