<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BpsDetail */

$this->title = Yii::t('app', 'Update BPS : {name}', [
    'name' => $model->BPS_with_date,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bps Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BPS_with_date, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bps-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
