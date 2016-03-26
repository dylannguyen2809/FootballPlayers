<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Country".
 *
 * @property string $countryname
 *
 * @property Leagues[] $leagues
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countryname'], 'required'],
            [['countryname'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'countryname' => 'Countryname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagues()
    {
        return $this->hasMany(Leagues::className(), ['countryname' => 'countryname']);
    }
}
