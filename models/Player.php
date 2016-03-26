<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Player".
 *
 * @property string $dob
 * @property string $name
 * @property integer $playerID
 * @property string $position
 * @property integer $rating
 * @property string $countryname
 * @property string $clubname
 *
 * @property Country $countryname0
 * @property Club $clubname0
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dob'], 'safe'],
            [['playerID', 'position', 'countryname', 'clubname'], 'required'],
            [['playerID', 'rating'], 'integer'],
            [['name', 'countryname', 'clubname'], 'string', 'max' => 100],
            [['position'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dob' => 'Dob',
            'name' => 'Name',
            'playerID' => 'Player ID',
            'position' => 'Position',
            'rating' => 'Rating',
            'countryname' => 'Countryname',
            'clubname' => 'Clubname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryname0()
    {
        return $this->hasOne(Country::className(), ['countryname' => 'countryname']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClubname0()
    {
        return $this->hasOne(Club::className(), ['clubname' => 'clubname']);
    }
}
