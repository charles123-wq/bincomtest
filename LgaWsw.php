<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lga_wsw".
 *
 * @property int $id
 * @property string $PDP
 * @property string $DPP
 * @property string $ACN
 * @property string $PPA
 * @property string $CDC
 * @property string $JP
 * @property string $ANPP
 * @property string $LABO
 * @property int $summed_total_polling_unit_results
 */
class LgaWsw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lga_wsw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PDP', 'DPP', 'ACN', 'PPA', 'CDC', 'JP', 'ANPP', 'LABO', 'summed_total_polling_unit_results'], 'required'],
            [['summed_total_polling_unit_results'], 'integer'],
            [['PDP', 'DPP', 'ACN', 'PPA', 'CDC', 'JP', 'ANPP', 'LABO'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'PDP' => Yii::t('app', 'Pdp'),
            'DPP' => Yii::t('app', 'Dpp'),
            'ACN' => Yii::t('app', 'Acn'),
            'PPA' => Yii::t('app', 'Ppa'),
            'CDC' => Yii::t('app', 'Cdc'),
            'JP' => Yii::t('app', 'Jp'),
            'ANPP' => Yii::t('app', 'Anpp'),
            'LABO' => Yii::t('app', 'Labo'),
            'summed_total_polling_unit_results' => Yii::t('app', 'Summed Total Polling Unit Results'),
        ];
    }
}
