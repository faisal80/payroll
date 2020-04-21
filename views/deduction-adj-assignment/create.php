<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionAdjAssignment */

$this->title = Yii::t('app', 'Create Deduction Adjustment Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deduction Adjustment Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deduction-adj-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
