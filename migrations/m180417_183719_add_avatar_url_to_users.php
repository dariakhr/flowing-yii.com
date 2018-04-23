<?php

use yii\db\Migration;


class m180417_183719_add_avatar_url_to_users extends Migration
{

    public function safeUp()
    {
$this -> addColumn('users', 'avatar_url', $this -> string(200) -> after('password'));
    }


    public function safeDown()
    {
      $this -> dropColumn('users', 'avatar_url');

        return false;
    }
}
