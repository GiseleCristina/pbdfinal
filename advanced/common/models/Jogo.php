<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jogo".
 *
 * @property integer $jogo
 * @property integer $idTime
 * @property string $tempo_inicio
 * @property string $tempo_fim
 *
 * @property Times $idTime0
 */
class Jogo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jogo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTime'], 'required'],
            [['idTime'], 'integer'],
            [['tempo_inicio', 'tempo_fim'], 'safe'],
            [['idTime'], 'exist', 'skipOnError' => true, 'targetClass' => Times::className(), 'targetAttribute' => ['idTime' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jogo' => 'Jogo',
            'idTime' => 'Id Time',
            'tempo_inicio' => 'Tempo Inicio',
            'tempo_fim' => 'Tempo Fim',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTime0()
    {
        return $this->hasOne(Times::className(), ['id' => 'idTime']);
    }
}
