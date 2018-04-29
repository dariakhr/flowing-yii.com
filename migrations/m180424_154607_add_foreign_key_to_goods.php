<?php

use yii\db\Migration;

class m180424_154607_add_foreign_key_to_goods extends Migration
{

  public function safeUp() {
      $this -> addColumn('goods', 'category_id', $this -> integer(11));
      $this -> addForeignKey(
            'categoryId',
            'goods',
            'category_id',
            'categorys',
            'id',
            'CASCADE'
        );
    }

    public function safeDown() {
      $this -> dropColumn('goods', 'category_id');
      $this -> dropForeignKey(
              'categoryId',
              'categorys'
          );
    }

}
