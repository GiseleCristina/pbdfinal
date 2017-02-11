<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Perguntas;

/**
 * PerguntasSearch represents the model behind the search form about `common\models\Perguntas`.
 */
class PerguntasSearch extends Perguntas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fase', 'id_texto_pergunta', 'id_localizacao'], 'integer'],
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
        $query = Perguntas::find();

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
            'fase' => $this->fase,
            'id_texto_pergunta' => $this->id_texto_pergunta,
            'id_localizacao' => $this->id_localizacao,
        ]);

        return $dataProvider;
    }
}
