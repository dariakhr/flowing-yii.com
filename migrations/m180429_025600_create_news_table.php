<?php

use yii\db\Migration;
use yii\db\Expression;



class m180429_025600_create_news_table extends Migration
{

    public function safeUp() {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this -> string(40) -> notNull(),
            'short_description' => $this -> string(200),
            'full_text' => $this -> string(1000),
            'photo_url' => $this -> string(100) -> notNull(),
            'created_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
            'updated_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
            'posted_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
        ]);
    }


    public function safeDown() {
        $this->dropTable('news');
    }
}
