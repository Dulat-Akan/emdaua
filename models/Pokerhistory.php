<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pokerhistory".
 *
 * @property integer $id
 * @property string $time
 * @property string $event
 * @property integer $price
 * @property integer $userid
 */
class Pokerhistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pokerhistory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id', 'time', 'event', 'price', 'userid'], 'required'],
            [[ 'price'], 'required'],
            [['id', 'price', 'userid'], 'integer'],
            [[ 'event','stage'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'Time',
            'event' => 'Event',
            'price' => 'Price',
            'userid' => 'Userid',
        ];
    }
}
