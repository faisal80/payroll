<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deduction_assignment".
 *
 * @property int $id
 * @property int|null $employee_id
 * @property int|null $deduction_id
 * @property int|null $amount
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class DeductionAssignment extends \app\models\MyActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deduction_assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id', 'deduction_id', 'amount', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_id' => 'Employee ID',
            'deduction_id' => 'Deduction ID',
            'amount' => 'Amount',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function getEmployee() {
        return $this->hasOne(Employee::className(),['id'=>'employee_id']);
    }

    public function getDeduction() {
        return $this->hasOne(Deduction::className(),['id'=>'deduction_id']);
    }

}
