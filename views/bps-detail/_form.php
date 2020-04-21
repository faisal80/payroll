<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Bps;

/* @var $this yii\web\View */
/* @var $model app\models\BpsDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bps-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bps_id')->dropDownList(Bps::getAll(), ['autofocus'=>'autofocus']) ?>

    <?= $form->field($model, 'bps')->textInput() ?>

    <?= $form->field($model, 'minimum')->textInput() ?>

    <?= $form->field($model, 'increment')->textInput() ?>

    <?= $form->field($model, 'maximum')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
