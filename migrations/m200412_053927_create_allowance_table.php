<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%allowance}}`.
 */
class m200412_053927_create_allowance_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%allowance}}', [
            'id'            => $this->primaryKey(),
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
        $this->dropTable('{{%allowance}}');
    }
}
