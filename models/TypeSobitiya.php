<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_sobitiya".
 *
 * @property integer $id
 * @property integer $res_id
 * @property string $name_kommand
 * @property string $date_stavki
 * @property string $time_stavki
 * @property string $ishod
 * @property string $k
 * @property string $sum
 * @property string $status
 *
 * @property Sobitie[] $sobities
 */
class TypeSobitiya extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_sobitiya';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['res_id', 'time_stavki'], 'integer'],
            [['name_kommand', 'ishod'], 'string'],
            [['date_stavki'], 'string', 'max' => 80],
            [['k', 'sum', 'status'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'res_id' => 'Res ID',
            'name_kommand' => 'Name Kommand',
            'date_stavki' => 'Date Stavki',
            'time_stavki' => 'Time Stavki',
            'ishod' => 'Ishod',
            'k' => 'K',
            'sum' => 'Sum',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSobities()
    {
        return $this->hasMany(Sobitie::className(), ['type_sobitiya_id' => 'id']);
    }
}
