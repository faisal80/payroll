<?php

namespace app\controllers;

use Yii;
use app\models\Employee;
use app\models\EmployeeFile;
//use app\models\PayAssignment;
//use app\models\AllowanceAssignment;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;


class EmployeeFileController extends \yii\web\Controller
{
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => [],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    public function actionIndex()
    {
        $employee_file = new EmployeeFile();
        $employee = new Employee();
        $actions = new ArrayDataProvider();
        $assignments = new ArrayDataProvider();
        $pays = new ArrayDataProvider();
        $allowances = new ArrayDataProvider();
        $deductions = new ArrayDataProvider();
        $payment_methods = new ArrayDataProvider();
        
        if ($employee_file->load(Yii::$app->request->post())) {
            $employee = Employee::findOne($employee_file->employee_id);
            $actions = new ActiveDataProvider(['query' => $employee->getActions()]);
            $assignments = new ActiveDataProvider(['query'=> $employee->getAssignments()]);
            $pays = new ActiveDataProvider(['query'=> $employee->getPays()]);
            $allowances = new ActiveDataProvider(['query'=> $employee->getAllowances()]);
            $deductions = new ActiveDataProvider(['query'=> $employee->getDeductions()]);
            $payment_methods = new ActiveDataProvider(['query'=> $employee->getPaymentMethods()]);
        }
        
        return $this->render('index', [
            'model' => $employee_file,
            'employee' => $employee,
            'actions' => $actions,
            'assignments' => $assignments,
            'pays' => $pays,
            'allowances' => $allowances,
            'deductions' => $deductions,
            'payment_methods' => $payment_methods,
        ]);
    }

}
