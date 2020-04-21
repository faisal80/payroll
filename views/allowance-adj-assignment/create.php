<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceAdjAssignment */

$this->title = Yii::t('app', 'Create Allowance Adjustment Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Allowance Adjustment Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-adj-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
