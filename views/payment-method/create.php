<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PaymentMethod */
/* @var $methods_list yii\db\ActiveQuery */
/* @var $banks yii\db\ActiveQuery */

$this->title = Yii::t('app', 'Create Payment Method');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Payment Methods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-method-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'methods_list' => $methods_list,
        'banks' => $banks,
    ]) ?>

</div>
