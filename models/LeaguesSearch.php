<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Leagues;

/**
 * LeaguesSearch represents the model behind the search form about `app\models\Leagues`.
 */
class LeaguesSearch extends Leagues
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['leaguename', 'countryname'], 'safe'],
            [['division'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Leagues::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'division' => $this->division,
        ]);

        $query->andFilterWhere(['like', 'leaguename', $this->leaguename])
            ->andFilterWhere(['like', 'countryname', $this->countryname]);

        return $dataProvider;
    }
}
