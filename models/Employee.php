<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property string|null $employee_name
 * @property string|null $father_name 
 * @property string|null $nic
 * @property string|null $date_of_birth
 * @property string|null $domicile
 * @property string|null $religion
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class Employee extends \app\models\MyActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_of_birth'], 'date', 'format'=>'yyyy-MM-dd'],
            [['created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['employee_name', 'father_name'], 'string', 'max' => 150],
            [['nic'], 'string', 'max' => 15],
            [['domicile', 'religion'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_name' => 'Employee Name',
            'father_name' => 'Father Name',
            'nic' => 'NIC',
            'date_of_birth' => 'Date of Birth',
            'domicile' => 'Domicile',
            'religion' => 'Religion',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
    
//    public function beforeSave($insert)
//    {
//        if (!parent::beforeSave($insert)) {
//            return false;
//        }
//
//        // ...custom code here...
//        $this->fixDate($this, 'date_of_birth');
//        
//        return true;
//    }    
//    
//    public function afterFind() {
//        parent::afterFind();
//        
//        $this->fixDate($this, 'date_of_birth', false);
//    }
    
    public function getAll() {
        $result = Employee::find()->all();
        return \yii\helpers\ArrayHelper::map($result, 'id', 'employee_name');
    }
    
    public function getPays() {
        return $this->hasMany(PayAssignment::className(), ['employee_id' => 'id']);
    }
    
    public function getAllowances() {
        return $this->hasMany(AllowanceAssignment::className(), ['employee_id' => 'id']);
    }

    public function getDeductions() {
        return $this->hasMany(DeductionAssignment::className(), ['employee_id' => 'id']);
    }
    
    public function getAssignments() {
        return $this->hasMany(EmployeeAssignment::className(), ['employee_id' => 'id']);
    }
    
    public function getPaymentMethods() {
        return $this->hasMany(PaymentMethod::className(), ['employee_id' => 'id']);
    }
    
}
