<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * EmployeeFile is the model behind the employee-file form.
 *
 * @property Integer|null $employee_id This property is set to find the employee.
 * @property Employee|null $_employee This property contains employee model
 *
 */
class EmployeeFile extends Model
{
    public $employee_id;
    private $_employee = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // employee_id is required
            ['employee_id', 'required'],
            // find employee from database
            ['employee_id', 'findEmployee'],
            
        ];
    }
    
    /**
     * Validates and finds the employee.
     * This method serves as the inline validation for employee_id.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function findEmployee($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $employee = $this->getEmployee();

            if (!$employee) {
                $this->addError($attribute, 'Employee not found.');
            }
        }
    }


    /**
     * Finds employee by [[employee_id]]
     *
     * @return Employee|null
     */
    public function getEmployee()
    {
        if ($this->_employee === false) {
            $this->_employee = Employee::findOne($this->employee_id);
        }

        return $this->_employee;
    }
}
