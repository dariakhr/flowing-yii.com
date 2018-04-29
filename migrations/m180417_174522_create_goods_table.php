<?php

use yii\db\Migration;

class m180417_174522_create_goods_table extends Migration
{

    public function safeUp(){
        $this->createTable('goods', [
            'id' => $this->primaryKey(),
            'title' => $this -> string(50) -> unique() -> notNull(),
            'price' => $this-> decimal() -> notNull(),
            'description' => $this -> text(1000) -> notNull(),
            'photo_url' => $this -> string(100) -> notNull(),
            'is_newing' => $this -> boolean() -> defaultValue(false),
            'is_top' => $this -> boolean() -> defaultValue(false),
            'is_visible' => $this -> boolean() -> defaultValue(true),


        ]);
    }


    public function safeDown(){
        $this->dropTable('goods');
    }
}
