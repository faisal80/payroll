<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PayAdjAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pay-adj-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_id')->dropDownList(app\models\Employee::getAll(), ['autofocus'=>'autofocus']) ?>

    <?= $form->field($model, 'pay_adj_id')->dropDownList(\app\models\PayAdj::getAll()) ?>

    <?= $form->field($model, 'amount')->textInput() ?>
    
    <?= $form->field($model, 'notes')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
