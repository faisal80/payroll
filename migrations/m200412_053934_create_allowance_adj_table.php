<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%allowance_adj}}`.
 */
class m200412_053934_create_allowance_adj_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%allowance_adj}}', [
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
        $this->dropTable('{{%allowance_adj}}');
    }
}
