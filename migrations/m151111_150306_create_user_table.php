<?php

use yii\db\Schema;
use yii\db\Migration;

class m151111_150306_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL UNIQUE',
            'email' => Schema::TYPE_STRING . '(70) NOT NULL UNIQUE',
            'password' => Schema::TYPE_STRING  . ' NOT NULL',
            'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL UNIQUE',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL'
        ]);
    }

    public function down()
    {

        $this->dropTable('user');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
