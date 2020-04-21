<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bps */

$this->title = Yii::t('app', 'Update Pay Scale: {name}', [
    'name' => $model->pay_scale,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Scales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pay_scale, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bps-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
