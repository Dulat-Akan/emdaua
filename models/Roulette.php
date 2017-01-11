<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recept".
 *
 * @property integer $id
 * @property string $mnn
 * @property integer $doctor_id
 * @property integer $pacient_id
 * @property integer $status_p
 * @property integer $status_v
 * @property integer $status_a
 * @property string $date
 * @property integer $lifetime
 * @property integer $doz
 * @property integer $kol_dnei
 */
class Roulette extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roulette';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           
         
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mnn' => 'МНН',

            'doctor_id' => 'Doctor ID',
            'pacient_id' => 'Pacient ID',
            'status_p' => 'Status P',
            'status_v' => 'Status V',
            'status_a' => 'Status A',
            'date' => 'Дата',
            'lifetime' => 'Lifetime',

            'doz' => 'Частота',
            'kol_dnei' => 'Количество дней',
            'ls' => 'Лекарство',
            'howto' => 'Способ применении'


        ];
    }
    
}
