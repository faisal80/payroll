<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Allowance */

$this->title = Yii::t('app', 'Create Allowance');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Allowances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
