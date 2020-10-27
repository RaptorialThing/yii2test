<?php

use yii\db\Migration;
use yii\db\Schema; 

/**
 * Class m201023_073823_chat_message
 */
class m201023_073823_chat_message extends Migration
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
        echo "m201023_073823_chat_message cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
            $tableOptions = null; 
            if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
 
        $this->createTable('{{%chat_message}}', [
            'id' => $this->primaryKey(),
            'chat_id' => $this->integer()->notNull(),
            'messagetext' => $this->string(),
        ], $tableOptions);
 
        $this->createIndex('idx_org_name', '{{%chat_message}}', 'id');

    }

    public function down()
    {
        echo "m201023_073823_chat_message cannot be reverted.\n";

        return false;
    }
    
}
