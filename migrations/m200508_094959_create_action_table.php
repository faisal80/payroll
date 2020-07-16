<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%action}}`.
 */
class m200508_094959_create_action_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%action}}', [
            'id'            => $this->primaryKey(),
            'employee_id'   => $this->integer(),
            'description'   => $this->string(),
            'status'        => $this->string(),
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
        $this->dropTable('{{%action}}');
    }
}
