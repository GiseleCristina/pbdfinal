<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Times;

/**
 * TimesSearch represents the model behind the search form about `common\models\Times`.
 */
class TimesSearch extends Times
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_pergunta_final'], 'integer'],
            [['nome'], 'safe'],
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
        $query = Times::find();

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
            'id' => $this->id,
            'id_pergunta_final' => $this->id_pergunta_final,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}
