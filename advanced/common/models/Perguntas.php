<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "perguntas".
 *
 * @property integer $id
 * @property integer $fase
 * @property integer $id_texto_pergunta
 * @property integer $id_localizacao
 *
 * @property Localizacoes $idLocalizacao
 * @property Textoperguntas $idTextoPergunta
 */
class Perguntas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perguntas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fase', 'id_texto_pergunta'], 'required'],
            [['fase', 'id_texto_pergunta', 'id_localizacao'], 'integer'],
            [['id_localizacao'], 'exist', 'skipOnError' => true, 'targetClass' => Localizacoes::className(), 'targetAttribute' => ['id_localizacao' => 'id']],
            [['id_texto_pergunta'], 'exist', 'skipOnError' => true, 'targetClass' => Textoperguntas::className(), 'targetAttribute' => ['id_texto_pergunta' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fase' => 'Fase',
            'id_texto_pergunta' => 'Id Texto Pergunta',
            'id_localizacao' => 'Id Localizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLocalizacao()
    {
        return $this->hasOne(Localizacoes::className(), ['id' => 'id_localizacao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTextoPergunta()
    {
        return $this->hasOne(Textoperguntas::className(), ['id' => 'id_texto_pergunta']);
    }
}
