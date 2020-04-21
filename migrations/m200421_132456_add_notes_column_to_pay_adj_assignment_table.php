<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%pay_adj_assignment}}`.
 */
class m200421_132456_add_notes_column_to_pay_adj_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pay_adj_assignment', 'notes', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('pay_adj_assignment', 'notes');
    }
}
