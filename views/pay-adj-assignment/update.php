<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayAdjAssignment */

$this->title = Yii::t('app', 'Update Pay Adjustment Assignment: {name}', [
    'name' => $model->payAdj->description,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Adjustment Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->payAdj->description, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pay-adj-assignment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
