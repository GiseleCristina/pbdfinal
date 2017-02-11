<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jogador".
 *
 * @property integer $id
 * @property integer $cor
 * @property integer $id_time
 * @property integer $fase
 *
 * @property Times $idTime
 */
class Jogador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jogador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cor', 'id_time', 'fase'], 'required'],
            [['cor', 'id_time', 'fase'], 'integer'],
            [['id_time'], 'exist', 'skipOnError' => true, 'targetClass' => Times::className(), 'targetAttribute' => ['id_time' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cor' => 'Cor',
            'id_time' => 'Id Time',
            'fase' => 'Fase',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTime()
    {
        return $this->hasOne(Times::className(), ['id' => 'id_time']);
    }
}
