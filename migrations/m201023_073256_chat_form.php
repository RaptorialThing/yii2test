<?php

use yii\db\Migration;
use yii\db\Schema; 

/**
 * Class m201023_073256_chat_form
 */
class m201023_073256_chat_form extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201023_073256_chat_form cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
            $tableOptions = null; 
            if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
 
        $this->createTable('{{%chat_form}}', [
            'id' => $this->primaryKey(),
            'chatname' => $this->string()->notNull(),
        ], $tableOptions);
 
        $this->createIndex('idx_org_name', '{{%chat_form}}', 'id');
    }

    public function down()
    {
        echo "m201023_073256_chat_form cannot be reverted.\n";

        return false;
    }
    
}
