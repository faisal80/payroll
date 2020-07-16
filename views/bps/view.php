<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Bps */
/* @var $bps_detail app\models\BpsDetail */

$this->title = $model->pay_scale;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pay Scales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bps-view">

    <h1><?= Html::encode('Pay Scale ' . $this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pay_scale',
            'reference',
            'date',
            'authority',
            'wef',
            'created_by',
            'created_at:datetime',
            'updated_by',
            'updated_at:datetime',
        ],
    ]) ?>

<?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $bps_detail,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'payScale.pay_scale',
            'bps',
            'minimum:decimal',
            'increment:decimal',
            'maximum:decimal',
            //'created_by',
            //'created_at',
            //'updated_by',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
