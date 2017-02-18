<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "perguntasfinais".
 *
 * @property integer $id
 * @property string $dica1
 * @property string $dica2
 * @property string $dica3
 * @property string $dica4
 * @property integer $id_texto_pergunta
 * @property integer $id_localizacao
 *
 * @property Localizacoes $idLocalizacao
 * @property Textoperguntas $idTextoPergunta
 * @property Times[] $times
 */
class Perguntasfinais extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perguntasfinais';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dica1', 'dica2', 'dica3', 'dica4', 'id_texto_pergunta', 'id_localizacao'], 'required'],
            [['id_texto_pergunta', 'id_localizacao'], 'integer'],
            [['dica1', 'dica2', 'dica3', 'dica4'], 'string', 'max' => 500],
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
            'dica1' => 'Dica1',
            'dica2' => 'Dica2',
            'dica3' => 'Dica3',
            'dica4' => 'Dica4',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimes()
    {
        return $this->hasMany(Times::className(), ['id_pergunta_final' => 'id']);
    }
}
