<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee_assignment".
 *
 * @property int $id
 * @property int|null $employee_id
 * @property int|null $designation_id
 * @property int|null $bps_detail_id
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class EmployeeAssignment extends \app\models\MyActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee_assignment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id', 'designation_id', 'bps_detail_id', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
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
            'employee_id' => 'Employee',
            'designation_id' => 'Designation',
            'bps_detail_id' => 'BPS',
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
    
    public function getDesignation() {
        return $this->hasOne(Designation::className(),['id'=>'designation_id']);
    }
    
    public function getBps() {
        return $this->hasOne(BpsDetail::className(),['id'=>'bps_detail_id']);
    }
}
