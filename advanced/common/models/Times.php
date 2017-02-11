<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "times".
 *
 * @property integer $id
 * @property string $nome
 * @property integer $id_pergunta_final
 *
 * @property Jogador[] $jogadors
 * @property Jogo[] $jogos
 * @property Perguntasfinais $idPerguntaFinal
 */
class Times extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'times';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['id_pergunta_final'], 'integer'],
            [['nome'], 'string', 'max' => 25],
            [['id_pergunta_final'], 'exist', 'skipOnError' => true, 'targetClass' => Perguntasfinais::className(), 'targetAttribute' => ['id_pergunta_final' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'id_pergunta_final' => 'Id Pergunta Final',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogadors()
    {
        return $this->hasMany(Jogador::className(), ['id_time' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJogos()
    {
        return $this->hasMany(Jogo::className(), ['idTime' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPerguntaFinal()
    {
        return $this->hasOne(Perguntasfinais::className(), ['id' => 'id_pergunta_final']);
    }
}
