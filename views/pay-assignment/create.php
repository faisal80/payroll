<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayAssignment */

$this->title = Yii::t('app', 'Create Pay Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pay-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
