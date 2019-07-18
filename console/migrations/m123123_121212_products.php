<?php

use \yii\db\Migration;

class m123123_121212_products extends Migration
{
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'code' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('products');
    }
}
