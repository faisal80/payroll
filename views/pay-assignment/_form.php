<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PayAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pay-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_id')->dropDownList(app\models\Employee::getAll(), ['autofocus'=>'autofocus']) ?>

    <?= $form->field($model, 'pay_id')->dropDownList(\app\models\Pay::getAll()) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
