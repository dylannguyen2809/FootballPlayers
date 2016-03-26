<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Club".
 *
 * @property string $clubname
 * @property string $abbreviation
 * @property string $leaguename
 *
 * @property Leagues $leaguename0
 */
class Club extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Club';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clubname', 'abbreviation', 'leaguename'], 'required'],
            [['clubname', 'leaguename'], 'string', 'max' => 100],
            [['abbreviation'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'clubname' => 'Clubname',
            'abbreviation' => 'Abbreviation',
            'leaguename' => 'Leaguename',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeaguename0()
    {
        return $this->hasOne(Leagues::className(), ['leaguename' => 'leaguename']);
    }
}
