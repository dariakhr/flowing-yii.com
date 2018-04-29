<?php

use yii\db\Migration;
use yii\db\Expression;

class m180424_170629_create_recalls_table extends Migration
{
  public function safeUp() {
          $this -> createTable('recalls', [
              'id' => $this -> primaryKey(),
              'phone_number' => $this -> string(16),
              'created_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
          ]);
      }

    public function safeDown(){

        $this -> dropTable('recalls');
    }
}
