<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceAdj */

$this->title = Yii::t('app', 'Update Allowance Adjustment: {name}', [
    'name' => $model->description,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Allowance Adjustments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->description, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="allowance-adj-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
