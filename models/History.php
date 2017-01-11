<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property integer $id
 * @property string $vid_sporta
 * @property string $name1
 * @property string $name2
 * @property integer $per1
 * @property integer $per2
 * @property integer $per3
 * @property integer $per4
 * @property integer $per5
 * @property string $date_time
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name1'], 'required'],
            [['per1', 'per2', 'per3', 'per4', 'per5', 'per6', 'per7', 'per8'],  'string', 'max' => 255],
           
            [['vid_sporta', 'name1', 'name2','date_time'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vid_sporta' => 'Vid Sporta',
            'name1' => 'Name1',
            'name2' => 'Name2',
            'per1' => 'Per1',
            'per2' => 'Per2',
            'per3' => 'Per3',
            'per4' => 'Per4',
            'per5' => 'Per5',
            'date_time' => 'Date Time',
        ];
    }
}
