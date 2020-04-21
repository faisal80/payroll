<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionAdjAssignment */

$this->title = Yii::t('app', 'Update Deduction Adjustment Assignment: {name}', [
    'name' => $model->employee->employee_name . '\'s '. $model->deductionAdj->description,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deduction Adjustment Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="deduction-adj-assignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
