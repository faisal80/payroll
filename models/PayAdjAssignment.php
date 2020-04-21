<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_adj_assignment".
 *
 * @property int $id
 * @property int|null $employee_id
 * @property int|null $pay_adj_id
 * @property int|null $amount
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $notes Description of the adjustment
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class PayAdjAssignment extends \app\models\MyActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_adj_assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id', 'pay_adj_id', 'amount', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['start_date', 'end_date', 'notes'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_id' => 'Employee',
            'pay_adj_id' => 'Description',
            'amount' => 'Amount',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'notes' => 'Notes',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function getEmployee() {
        return $this->hasOne(Employee::className(),['id'=>'employee_id']);
    }

    public function getPayAdj() {
        return $this->hasOne(PayAdj::className(),['id'=>'pay_adj_id']);
    }

}
