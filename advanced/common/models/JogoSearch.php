<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Jogo;

/**
 * JogoSearch represents the model behind the search form about `common\models\Jogo`.
 */
class JogoSearch extends Jogo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jogo', 'idTime'], 'integer'],
            [['tempo_inicio', 'tempo_fim'], 'safe'],
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
        $query = Jogo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'jogo' => $this->jogo,
            'idTime' => $this->idTime,
            'tempo_inicio' => $this->tempo_inicio,
            'tempo_fim' => $this->tempo_fim,
        ]);

        return $dataProvider;
    }
}
