<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Perguntasfinais;

/**
 * PerguntasfinaisSearch represents the model behind the search form about `common\models\Perguntasfinais`.
 */
class PerguntasfinaisSearch extends Perguntasfinais
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_texto_pergunta', 'id_localizacao'], 'integer'],
            [['dica1', 'dica2', 'dica3', 'dica4'], 'safe'],
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
        $query = Perguntasfinais::find();

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
            'id_texto_pergunta' => $this->id_texto_pergunta,
            'id_localizacao' => $this->id_localizacao,
        ]);

        $query->andFilterWhere(['like', 'dica1', $this->dica1])
            ->andFilterWhere(['like', 'dica2', $this->dica2])
            ->andFilterWhere(['like', 'dica3', $this->dica3])
            ->andFilterWhere(['like', 'dica4', $this->dica4]);

        return $dataProvider;
    }
}
