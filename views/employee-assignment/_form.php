<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_id')->dropDownList(app\models\Employee::getAll()) ?>

    <?= $form->field($model, 'designation_id')->dropDownList(app\models\Designation::getAll()) ?>

    <?= $form->field($model, 'bps_detail_id')->dropDownList(app\models\BpsDetail::getAll()) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
