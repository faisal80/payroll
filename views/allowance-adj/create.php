<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceAdj */

$this->title = Yii::t('app', 'Create Allowance Adjustment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Allowance Adjustments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-adj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
