<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceAssignment */

$this->title = Yii::t('app', 'Create Allowance Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Allowance Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
