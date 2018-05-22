<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m180120_143939_create_products_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('products', [
            'id' => $this->bigPrimaryKey(),
            'company_id'=>$this->integer()->notNull(),
            'category_id'=>$this->integer()->notNull(),
            'product_title'=>$this->string()->notNull(),
            'product_price'=>$this->decimal(10,4)->notNull(),
            'product_weight'=>$this->float(),
            'product_in_stock'=>$this->integer()->defaultValue(0)->notNull(),
            'product_on_order'=>$this->integer()->defaultValue(0)->notNull(),
            'product_image'=>$this->string(),
            'product_status'=>$this->smallInteger(1)->defaultValue(0)->notNull(),
            'product_description'=>$this->text(),
            'product_content'=>$this->text(),
            'product_keywords'=>$this->string(),
            'product_description'=>$this->string(),
            'product_hit'=>"ENUM('0','1')",
            'product_new'=>"ENUM('0','1')",
            'product_sale'=>"ENUM('0','1')",


        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('products');
    }
}
