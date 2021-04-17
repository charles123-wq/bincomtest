<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "party".
 *
 * @property int $result_id
 * @property int $polling_unit_unique_id
 * @property string $PDP
 * @property string $DPP
 * @property string $ACN
 * @property string $PPA
 * @property string $CDC
 * @property string $JP
 * @property string $ANPP
 * @property string $LABO
 * @property string $CPP
 */
class Party extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'party';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['polling_unit_unique_id', 'PDP', 'DPP', 'ACN', 'PPA', 'CDC', 'JP', 'ANPP', 'LABO', 'CPP'], 'required'],
            [['polling_unit_unique_id'], 'integer'],
            [['PDP', 'DPP', 'ACN', 'PPA', 'CDC', 'JP', 'ANPP', 'LABO', 'CPP'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'result_id' => Yii::t('app', 'Result ID'),
            'polling_unit_unique_id' => Yii::t('app', 'Polling Unit Unique ID'),
            'PDP' => Yii::t('app', 'Pdp'),
            'DPP' => Yii::t('app', 'Dpp'),
            'ACN' => Yii::t('app', 'Acn'),
            'PPA' => Yii::t('app', 'Ppa'),
            'CDC' => Yii::t('app', 'Cdc'),
            'JP' => Yii::t('app', 'Jp'),
            'ANPP' => Yii::t('app', 'Anpp'),
            'LABO' => Yii::t('app', 'Labo'),
            'CPP' => Yii::t('app', 'Cpp'),
        ];
    }
}
