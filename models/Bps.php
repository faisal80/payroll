<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bps".
 *
 * @property int $id
 * @property string|null $pay_scale
 * @property string|null $reference
 * @property string|null $date
 * @property string|null $authority
 * @property string|null $wef
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $updated_by
 * @property int|null $updated_at
 */
class Bps extends \app\models\MyActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'wef'], 'safe'],
            [['created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['pay_scale'], 'string', 'max' => 100],
            [['reference', 'authority'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pay_scale' => 'Pay Scale',
            'reference' => 'Reference',
            'date' => 'Date',
            'authority' => 'Authority',
            'wef' => 'WEF',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
    
    /**
     * 
     * @return list of all pay scales
     */
    public function getAll() {
        $result = Bps::find()->all();
        return \yii\helpers\ArrayHelper::map($result, 'id', 'pay_scale');
    }
}
