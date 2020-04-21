<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BpsDetail */

$this->title = Yii::t('app', 'Create BPS Detail');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'BPS Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bps-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
