<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karti".
 *
 * @property integer $id
 * @property string $name
 * @property integer $code
 * @property string $barcode
 */
class Karti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'barcode'], 'required'],
            [['code', 'barcode'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
            'barcode' => 'Barcode',
        ];
    }
}
