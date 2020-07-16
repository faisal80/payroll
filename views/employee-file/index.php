<?php

use yii\bootstrap\Tabs;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $employee app\models\Employee */

$this->title = Yii::t('app', 'Employee File');
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>Employee's File</h1>

<p>
    <?= $this->render('_form', ['model'=>$model]) ?>
</p>

<?php
echo Tabs::widget([
    'items' => [
        [
            'label' => 'Personal Information',
            'content' => DetailView::widget([
                'model' => $employee,
                'attributes' => [
                    'id',
                    'employee_name',
                    'father_name',
                    'nic',
                    'date_of_birth:date',
                    'domicile',
                    'religion',
                ],
            ]),
            'active' => true
        ],
        [
            'label' => 'Actions',
            'content' => GridView::widget([
                'dataProvider' => $actions,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'employee_id',
                    'description',
                    'status',
                    'start_date',
                    'end_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]),
        ],
        [
            'label' => 'Pay',
            'content' => GridView::widget([
                'dataProvider' => $pays,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'pay.description',
                    'amount:decimal',
                    'start_date',
                    'end_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]),
        ],
        [
            'label' => 'Allowances',
            'content' => GridView::widget([
                'dataProvider' => $allowances,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'allowance.description',
                    'amount:decimal',
                    'start_date',
                    'end_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]),
        ],
        [
            'label' => 'Deductions',
            'content' => GridView::widget([
                'dataProvider' => $deductions,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'deduction.description',
                    'amount:decimal',
                    'start_date',
                    'end_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]),
        ],
        [
            'label' => 'Assignments',
            'content' => GridView::widget([
                'dataProvider' => $assignments,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'designation.title',
                    'bps.bps',
                    'start_date',
                    'end_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]),
        ],
        [
            'label' => 'Payment Methods',
            'content' => GridView::widget([
                'dataProvider' => $payment_methods,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'employee.employee_name',
                    'through',
                    'bank',
                    'account_number',
                    'start_date',
                    'end_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]),
        ],
    ],
]);

?>

