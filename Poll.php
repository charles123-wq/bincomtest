<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poll".
 *
 * @property int $result_id
 * @property string $polling_unit_unique_id
 * @property string $party_abbreviation
 * @property int $party_score
 * @property string $entered_by_user
 * @property string $date_entered
 * @property string $user_ip_address
 */
class Poll extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poll';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['polling_unit_unique_id', 'party_abbreviation', 'party_score', 'entered_by_user', 'date_entered', 'user_ip_address'], 'required'],
            [['party_score'], 'integer'],
            [['date_entered'], 'safe'],
            [['polling_unit_unique_id', 'entered_by_user', 'user_ip_address'], 'string', 'max' => 50],
            [['party_abbreviation'], 'string', 'max' => 4],
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
            'party_abbreviation' => Yii::t('app', 'Party Abbreviation'),
            'party_score' => Yii::t('app', 'Party Score'),
            'entered_by_user' => Yii::t('app', 'Entered By User'),
            'date_entered' => Yii::t('app', 'Date Entered'),
            'user_ip_address' => Yii::t('app', 'User Ip Address'),
        ];
    }
}
