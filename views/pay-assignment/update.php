<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayAssignment */

$this->title = Yii::t('app', 'Update Pay Assignment: {name}', [
    'name' => $model->employee->employee_name . '\'s ' . $model->pay->description,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pay-assignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
