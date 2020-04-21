<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee_assignment}}`.
 */
class m200412_053830_create_employee_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employee_assignment}}', [
            'id'            => $this->primaryKey(),
            'employee_id'   => $this->integer(),
            'designation_id'=> $this->integer(),
            'bps_detail_id' => $this->integer(),
            'start_date'    => $this->date(),
            'end_date'      => $this->date(),
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
        $this->dropTable('{{%employee_assignment}}');
    }
}
