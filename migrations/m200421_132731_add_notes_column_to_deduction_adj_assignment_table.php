<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%deduction_adj_assignment}}`.
 */
class m200421_132731_add_notes_column_to_deduction_adj_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('deduction_adj_assignment', 'notes', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('deduction_adj_assignment', 'notes');
    }
}
