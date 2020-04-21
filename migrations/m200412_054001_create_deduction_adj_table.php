<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%deduction_adj}}`.
 */
class m200412_054001_create_deduction_adj_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%deduction_adj}}', [
            'id' => $this->primaryKey(),
            'description'   => $this->string(200),
            'created_by'    => $this->integer(11),
            'created_at'    => $this->integer(11),
            'updated_by'    => $this->integer(11),
            'updated_at'    => $this->integer(11),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%deduction_adj}}');
    }
}
