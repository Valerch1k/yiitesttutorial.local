<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180120_133634_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'parent_id'=> $this->integer(),
            'title'=> $this->string('255'),
            'keywords'=>$this->string('255'),
            'description'=>$this->string('255'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
