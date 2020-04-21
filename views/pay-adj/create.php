<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayAdj */

$this->title = Yii::t('app', 'Create Pay Adjustment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Adjustments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pay-adj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
