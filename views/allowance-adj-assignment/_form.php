<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceAdjAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allowance-adj-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_id')->dropDownList(app\models\Employee::getAll(), ['autofocus'=>'autofocus']) ?>

    <?= $form->field($model, 'allowance_adj_id')->dropDownList(app\models\AllowanceAdj::getAll()) ?>

    <?= $form->field($model, 'amount')->textInput() ?>
    
    <?= $form->field($model, 'notes')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
