<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payroll_master}}`.
 */
class m200508_110259_create_payroll_master_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%payroll_master}}', [
            'id'            => $this->primaryKey(),
            'employee_id'   => $this->integer(),
            'from'          => $this->date(),
            'to'            => $this->date(),
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
        $this->dropTable('{{%payroll_master}}');
    }
}
