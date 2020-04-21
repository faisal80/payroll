<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Deduction */

$this->title = Yii::t('app', 'Create Deduction');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Deductions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deduction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
