<?php

namespace app\controllers;

class PaySimController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $employee = \app\models\Employee::findOne(1);
        $start_date = '2020-04-01';
        $end_date = '2020-04-30';

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

    public function actionPayslip($emp_id=1, $start_date='', $end_date='') 
    {
        $employee = \app\models\Employee::findOne($emp_id);
        $start_date = '2019-05-01';
        $end_date = '2019-05-31';

        if ($employee === null) { // Employee ID does not exist
            throw new \yii\web\HttpException(404, 'The requested Employee ID could not be found.');
        }

        $pays = $employee->getCurrentPays($start_date, $end_date)->all();
        $allowances = $employee->getCurrentAllowances($start_date, $end_date)->all();
        $deductions = $employee->getCurrentDeductions($start_date, $end_date)->all();
        $paymentMethod = $employee->getCurrentPaymentMethod($start_date, $end_date)->one();
        
        return $this->render('payslip', [
            'employee' => $employee,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'pays' => $pays,
            'allowances' => $allowances,
            'deductions' => $deductions,
            'payment_method' => $paymentMethod,
        ]);
        
    }


}
