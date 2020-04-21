<?php

namespace app\controllers;

use Yii;
use app\models\Employee;
use app\models\EmployeeFile;
//use app\models\PayAssignment;
//use app\models\AllowanceAssignment;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;


class EmployeeFileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $employee_file = new EmployeeFile();
        $employee = new Employee();
        $assignments = new ArrayDataProvider();
        $pays = new ArrayDataProvider();
        $allowances = new ArrayDataProvider();
        $deductions = new ArrayDataProvider();
        
        if ($employee_file->load(Yii::$app->request->post())) {
            $employee = Employee::findOne($employee_file->employee_id);
            $assignments = new ActiveDataProvider(['query'=> $employee->getAssignments()]);
            $pays = new ActiveDataProvider(['query'=> $employee->getPays()]);
            $allowances = new ActiveDataProvider(['query'=> $employee->getAllowances()]);
            $deductions = new ActiveDataProvider(['query'=> $employee->getDeductions()]);
        }
        
        return $this->render('index', [
            'model' => $employee_file,
            'employee' => $employee,
            'assignments' => $assignments,
            'pays' => $pays,
            'allowances' => $allowances,
            'deductions' => $deductions,
        ]);
    }

}
