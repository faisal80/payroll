<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bps */

$this->title = Yii::t('app', 'Create Pay Scale');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Scales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bps-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
