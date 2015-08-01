<?php

use yii\db\Schema;
use yii\db\Migration;

class m150801_073743_create_tables extends Migration
{
	public
	function up()
	{
		$tableOptions = null;
		if($this->db->driverName === 'mysql')
		{
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}
		$this->createTable('{{%product}}', [
				'id' => Schema::TYPE_PK,
				'name' => Schema::TYPE_STRING . ' NOT NULL',
				'price' => Schema::TYPE_INTEGER . ' NOT NULL'
			], $tableOptions);
		$this->createIndex('name', '{{%product}}', 'name', true);
	}

	public
	function down()
	{
		echo "m150731_085113_create_tables cannot be reverted.\n";
        
        $this->dropTable('{{%product}}');

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
	*/}
