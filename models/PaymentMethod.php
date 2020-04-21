<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_method".
 *
 * @property int $id
 * @property int|null $employee_id
 * @property string|null $through
 * @property string|null $bank
 * @property string|null $account_number
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class PaymentMethod extends \app\models\MyActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_method';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_id', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['through', 'bank', 'account_number'], 'string', 'max' => 255],
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
            'through' => 'Through',
            'bank' => 'Bank',
            'account_number' => 'Account Number',
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
    
    public function getMethodsList() {
        return PaymentMethod::findBySql('SELECT DISTINCT through FROM payment_method ORDER BY through')->all();
    }
    
    public function getBanksList() {
        return PaymentMethod::findBySql('SELECT DISTINCT bank FROM payment_method ORDER BY bank')->all();
    }
}
