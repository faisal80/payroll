<?php

namespace app\controllers;

class PaySimController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $employee = \app\models\Employee::findOne(1);
        $start_date = '2020-03-01';
        $end_date = '2020-03-31';

        $pays = $employee->getCurrentPays($start_date, $end_date)->all();
        $allowances = $employee->getCurrentAllowances($start_date, $end_date)->all();
        $deductions = $employee->getCurrentDeductions($start_date, $end_date)->all();
        
        
        return $this->render('index', [
            'employee' => $employee,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'pays' => $pays,
            'allowances' => $allowances,
            'deductions' => $deductions,
            
        ]);
    }

}
