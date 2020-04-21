<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayAdjAssignment */

$this->title = Yii::t('app', 'Create Pay Adjustment Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Adjustment Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pay-adj-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
