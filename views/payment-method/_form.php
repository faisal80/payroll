<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentMethod */
/* @var $form yii\widgets\ActiveForm */
/* @var $methods_list yii\db\ActiveQuery */
/* @var $banks yii\db\ActiveQuery */

$list_of_methods = '';
$list_of_banks = '';

foreach ($methods_list as $value) {
    $list_of_methods .= '<option value="' . $value->through . '">';
}

foreach ($banks as $value) {
    $list_of_banks.= '<option value="' . $value->bank . '">';
}

?>

<div class="payment-method-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_id')->dropDownList(app\models\Employee::getAll(), ['autofocus'=>'autofocus']) ?>

    <?= $form->field($model, 'through')->textInput(['maxlength' => true, 'list'=>'paymentmethods']) ?>
    
    <?= Html::tag('datalist', 
            $list_of_methods, 
            ['id' => 'paymentmethods']
            );
    ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true, 'list'=>'bankslist']) ?>

    <?= Html::tag('datalist', 
            $list_of_banks, 
            ['id' => 'bankslist']
            );
    ?>

    <?= $form->field($model, 'account_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
