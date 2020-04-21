<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bps_detail".
 *
 * @property int $id
 * @property int|null $bps_id
 * @property int|null $bps
 * @property int|null $minimum
 * @property int|null $increment
 * @property int|null $maximum
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class BpsDetail extends \app\models\MyActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bps_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bps_id', 'bps', 'minimum', 'increment', 'maximum', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bps_id' => 'Pay Scale',
            'bps' => 'BPS',
            'minimum' => 'Minimum',
            'increment' => 'Increment',
            'maximum' => 'Maximum',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function getPayScale() {
        return $this->hasOne(Bps::className(),['id'=>'bps_id']);
    }

    public function getBPS_with_date(){
        return $this->bps . ' (' . $this->payScale->wef . ')';
    }
    public function getAll() {
        $result = BpsDetail::find()->all();
        return \yii\helpers\ArrayHelper::map($result, 'id', 'BPS_with_date');
    }
}
