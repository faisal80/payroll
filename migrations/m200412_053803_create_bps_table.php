<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bps}}`.
 */
class m200412_053803_create_bps_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bps}}', [
            'id'        => $this->primaryKey(),
            'pay_scale' => $this->string(100),
            'reference' => $this->string(200),
            'date'      => $this->date(),
            'authority' => $this->string(200),
            'wef'       => $this->date(),
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
        $this->dropTable('{{%bps}}');
    }
}
