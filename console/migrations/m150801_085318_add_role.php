<?php

use yii\db\Schema;
use yii\db\Migration;

class m150801_085318_add_role extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'role', 'integer NOT NULL DEFAULT 10');
    }

    public function down()
    {
        echo "m150801_085318_add_role cannot be reverted.\n";

        return false;
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
