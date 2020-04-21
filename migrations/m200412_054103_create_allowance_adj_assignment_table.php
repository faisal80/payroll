<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%allowance_adj_assignment}}`.
 */
class m200412_054103_create_allowance_adj_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%allowance_adj_assignment}}', [
            'id'                => $this->primaryKey(),
            'employee_id'       => $this->integer(),
            'allowance_adj_id'  => $this->integer(),
            'amount'            => $this->integer(),
            'start_date'        => $this->date(),
            'end_date'          => $this->date(),
            'created_by'        => $this->integer(11),
            'created_at'        => $this->integer(11),
            'updated_by'        => $this->integer(11),
            'updated_at'        => $this->integer(11),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%allowance_adj_assignment}}');
    }
}
