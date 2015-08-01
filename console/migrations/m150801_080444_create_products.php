<?php

use yii\db\Schema;
use yii\db\Migration;

class m150801_080444_create_products extends Migration
{
    public function up()
    {
        $this->insert('product', array('name' => 'Надувной матрац','price' => 1000));
        $this->insert('product', array('name' => 'Комплект постельного белья','price' => 1900));
        $this->insert('product', array('name' => 'Отпугиватель комаров','price' => 1111));
        $this->insert('product', array('name' => 'Видеокамера внутренняя','price' => 1330));
        $this->insert('product', array('name' => 'Держатель автомобильный','price' => 690));
        $this->insert('product', array('name' => 'Смартфон Huawei','price' => 12247));
    }

    public function down()
    {
        echo "m150801_080444_create_products cannot be reverted.\n";

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
