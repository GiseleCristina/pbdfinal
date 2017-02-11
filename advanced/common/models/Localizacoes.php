<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "localizacoes".
 *
 * @property integer $id
 * @property double $latitude
 * @property double $longitude
 * @property string $dica
 * @property string $referencia
 *
 * @property Perguntas $perguntas
 * @property Perguntasfinais[] $perguntasfinais
 */
class Localizacoes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'localizacoes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude', 'dica', 'referencia'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['dica', 'referencia'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'dica' => 'Dica',
            'referencia' => 'Referencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerguntas()
    {
        return $this->hasOne(Perguntas::className(), ['id_localizacao' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerguntasfinais()
    {
        return $this->hasMany(Perguntasfinais::className(), ['id_localizacao' => 'id']);
    }
}
