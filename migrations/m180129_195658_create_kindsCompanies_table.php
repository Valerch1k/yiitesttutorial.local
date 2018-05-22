<?php

use yii\db\Migration;

/**
 * Handles the creation of table `kindsCompanies`.
 */
class m180129_195658_create_kindsCompanies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('kindsCompanies', [
            'id' => $this->bigPrimaryKey(),
            'kind_name'=>$this->string()->unique()->notNull(),
            'kind_description'=>$this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('kindsCompanies');
    }
}
