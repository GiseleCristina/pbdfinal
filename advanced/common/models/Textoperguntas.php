<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "textoperguntas".
 *
 * @property integer $id
 * @property string $texto
 * @property string $op1
 * @property string $op2
 * @property string $op3
 * @property string $op4
 * @property string $op5
 * @property integer $resposta
 *
 * @property Perguntas $perguntas
 * @property Perguntasfinais[] $perguntasfinais
 */
class Textoperguntas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'textoperguntas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['texto', 'op1', 'op2', 'op3', 'op4', 'op5', 'resposta'], 'required'],
            [['texto'], 'string'],
            [['resposta'], 'integer'],
            [['op1', 'op2', 'op3', 'op4', 'op5'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'texto' => 'Texto',
            'op1' => 'Op1',
            'op2' => 'Op2',
            'op3' => 'Op3',
            'op4' => 'Op4',
            'op5' => 'Op5',
            'resposta' => 'Resposta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerguntas()
    {
        return $this->hasOne(Perguntas::className(), ['id_texto_pergunta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerguntasfinais()
    {
        return $this->hasMany(Perguntasfinais::className(), ['id_texto_pergunta' => 'id']);
    }
}
