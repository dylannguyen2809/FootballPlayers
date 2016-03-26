<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Leagues".
 *
 * @property string $leaguename
 * @property integer $division
 * @property string $countryname
 *
 * @property Club[] $clubs
 * @property Country $countryname0
 */
class Leagues extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Leagues';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['leaguename', 'division', 'countryname'], 'required'],
            [['division'], 'integer'],
            [['leaguename', 'countryname'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'leaguename' => 'Leaguename',
            'division' => 'Division',
            'countryname' => 'Countryname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClubs()
    {
        return $this->hasMany(Club::className(), ['leaguename' => 'leaguename']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryname0()
    {
        return $this->hasOne(Country::className(), ['countryname' => 'countryname']);
    }
}
