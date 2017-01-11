<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history2".
 *
 * @property integer $id
 * @property string $vid_sporta
 * @property string $name1
 * @property string $name2
 * @property string $per1
 * @property string $per2
 * @property string $per3
 * @property string $per4
 * @property string $per5
 * @property string $per6
 * @property string $per7
 * @property string $per8
 * @property string $date_time
 */
class History2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'history2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name1'], 'required'],
            [['vid_sporta', 'name1', 'name2', 'per1', 'per2', 'per3', 'per4', 'per5', 'per6', 'per7', 'per8', 'date_time'], 'string', 'max' => 255]
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
            'per6' => 'Per6',
            'per7' => 'Per7',
            'per8' => 'Per8',
            'date_time' => 'Date Time',
        ];
    }
}
