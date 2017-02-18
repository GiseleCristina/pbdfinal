<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Localizacoes;

/**
 * LocalizacoesSearch represents the model behind the search form about `common\models\Localizacoes`.
 */
class LocalizacoesSearch extends Localizacoes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['dica', 'referencia'], 'safe'],
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
        $query = Localizacoes::find();

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
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $query->andFilterWhere(['like', 'dica', $this->dica])
            ->andFilterWhere(['like', 'referencia', $this->referencia]);

        return $dataProvider;
    }
}
