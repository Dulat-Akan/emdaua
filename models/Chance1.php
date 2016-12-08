<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chance1".
 *
 * @property integer $id
 * @property integer $ves
 * @property integer $suit
 * @property string $perc
 * @property string $st1
 * @property integer $st2
 */
class Chance1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chance1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vesom', 'suit', 'perc', 'st1', 'st2'], 'required'],
            [['vesom', 'suit', 'st2'], 'integer'],
            [['perc'], 'number'],
            [['st1'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vesom' => 'Ves',
            'suit' => 'Suit',
            'perc' => 'Perc',
            'st1' => 'St1',
            'st2' => 'St2',
        ];
    }
}
