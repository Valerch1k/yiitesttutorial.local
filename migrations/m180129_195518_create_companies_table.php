<?php

use yii\db\Migration;

/**
 * Handles the creation of table `companies`.
 */
class m180129_195518_create_companies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('companies', [
            'id' => $this->bigPrimaryKey(),
            'kind_company_id'=>$this->bigInteger()->notNull(),
            'company_name'=>$this->string(65)->notNull(),
            'company_address'=>$this->string(65)->notNull(),
            'contact_name'=>$this->string(65)->notNull(),
            'city'=>$this->string(65)->notNull(),
            'region'=>$this->string(65)->notNull(),
            'postal_code'=>$this->string(65)->notNull(),
            'country'=>$this->string(65)->notNull(),
            'phone'=>$this->string(65)->notNull(),
            'homepage'=>$this->string(65)->notNull(),
            'email'=>$this->string(65)->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('companies');
    }
}
