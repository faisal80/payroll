<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionAdjAssignment */

$this->title = $model->employee->employee_name . '\'s '. $model->deductionAdj->description;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deduction Adjustment Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deduction-adj-assignment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app', 'Create Deduction Adjustment Assignment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'employee.employee_name',
            'deductionAdj.description',
            'amount:decimal',
            'notes',
            'start_date',
            'end_date',
            'created_by',
            'created_at:datetime',
            'updated_by',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
