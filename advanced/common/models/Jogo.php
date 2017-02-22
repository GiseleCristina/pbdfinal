<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jogo".
 *
 * @property integer $jogo
 * @property integer $idTime
 * @property integer $duracao
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
            [['idTime', 'duracao'], 'required'],
            [['idTime', 'duracao'], 'integer'],
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
            'duracao' => 'Duracao',
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
