<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payroll_detail}}`.
 */
class m200508_110308_create_payroll_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%payroll_detail}}', [
            'id' => $this->primaryKey(),
            'payroll_master_id' => $this->integer(),
            ''
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%payroll_detail}}');
    }
}
