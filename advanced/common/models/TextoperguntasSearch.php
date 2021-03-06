<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Textoperguntas;

/**
 * TextoperguntasSearch represents the model behind the search form about `common\models\Textoperguntas`.
 */
class TextoperguntasSearch extends Textoperguntas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'resposta'], 'integer'],
            [['texto', 'op1', 'op2', 'op3', 'op4', 'op5'], 'safe'],
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
        $query = Textoperguntas::find();

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
            'resposta' => $this->resposta,
        ]);

        $query->andFilterWhere(['like', 'texto', $this->texto])
            ->andFilterWhere(['like', 'op1', $this->op1])
            ->andFilterWhere(['like', 'op2', $this->op2])
            ->andFilterWhere(['like', 'op3', $this->op3])
            ->andFilterWhere(['like', 'op4', $this->op4])
            ->andFilterWhere(['like', 'op5', $this->op5]);

        return $dataProvider;
    }
}
