<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionAssignment */

$this->title = Yii::t('app', 'Update Deduction Assignment: {name}', [
    'name' => $model->employee->employee_name . '\'s ' . $model->deduction->description,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deduction Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="deduction-assignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
