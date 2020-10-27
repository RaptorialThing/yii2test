<?php

use yii\db\Migration;

/**
 * Class m201026_121655_users
 */
class m201026_121655_users extends Migration
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
        echo "m201026_121655_users cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
            $tableOptions = null; 
            if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
 
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'user_name' => $this->string(),
            'email' => $this->string(),
            'accesslevel' => $this->int(),
        ], $tableOptions);
 
        $this->createIndex('idx_user_id', '{{%id}}', 'id');
    }

    public function down()
    {
        echo "m201026_121655_users cannot be reverted.\n";

        return false;
    }
    
}
