<?php

use yii\db\Migration;
use yii\db\Expression;

class m180417_175928_create_categorys_table extends Migration {

    public function safeUp(){
        $this->createTable('categorys', [
          'id' => $this -> primaryKey(),
         'title' => $this -> string(40) -> notNull(),
         'position' => $this -> integer() -> notNull(),
         'is_visible' => $this -> boolean() -> defaultValue(false),
         'created_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
         'updated_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
     ]);
    }


    public function safeDown(){
        $this->dropTable('categorys');
    }
}
