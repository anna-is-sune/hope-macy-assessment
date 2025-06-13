<?php

use yii\db\Migration;

class m250613_145042_application extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('application', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'data_of_birth' => $this->date()->notNull(),
            'description' => $this->text(),
            'income' => $this->decimal(10, 2)->notNull()->defaultValue(0.00),
            'number_of_dependents' => $this->integer()->notNull()->defaultValue(0),
            'created_at' => $this->integer()->defaultValue(time())->notNull(),
            'updated_at' => $this->integer()->defaultValue(time())->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250613_145042_application cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250613_145042_application cannot be reverted.\n";

        return false;
    }
    */
}
