<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%allowance_adj_assignment}}`.
 */
class m200421_132718_add_notes_column_to_allowance_adj_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('allowance_adj_assignment', 'notes', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('allowance_adj_assignment', 'notes');
    }
}
