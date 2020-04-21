<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%designation}}`.
 */
class m200412_053749_create_designation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%designation}}', [
            'id'        => $this->primaryKey(),
            'title'     => $this->string(200),
            'created_by'=> $this->integer(11),
            'created_at'=> $this->integer(11),
            'updated_by'=> $this->integer(11),
            'updated_at'=> $this->integer(11),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%designation}}');
    }
}
