<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionAdj */

$this->title = Yii::t('app', 'Create Deduction Adjustment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deduction Adjustments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deduction-adj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
