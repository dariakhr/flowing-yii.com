<?php

use yii\db\Migration;

/**
 * Class m180501_084130_change_userspassword_column
 */
class m180501_084130_change_userspassword_column extends Migration
{

      public function safeUp(){
        $this->alterColumn('users', 'password', $this->string()->notNull());
      }


      public function safeDown()
      {
        $this -> alterColumn('users', 'password', $this->string(40)->notNull());

          return false;
  }
}
