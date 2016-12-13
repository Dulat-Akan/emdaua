<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poker".
 *
 * @property integer $id
 * @property string $hand
 * @property integer $ves
 * @property integer $partiya
 * @property integer $status1
 * @property integer $status2
 */
class Poker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'poker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ves', 'partiya', 'status1', 'status2'], 'integer'],
            [['hand'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hand' => 'Hand',
            'ves' => 'Ves',
            'partiya' => 'Partiya',
            'status1' => 'Status1',
            'status2' => 'Status2',
        ];
    }
}
