<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin_panel".
 *
 * @property integer $id
 * @property string $pole1
 * @property string $pole2
 * @property string $pole3
 * @property string $pole4
 * @property string $pole5
 * @property string $pole6
 * @property string $pole7
 * @property string $pole8
 * @property string $pole9
 * @property string $pole10
 * @property string $pole11
 * @property string $pole12
 * @property string $pole13
 * @property string $pole14
 * @property string $pole15
 * @property string $pole16
 * @property string $pole17
 * @property string $pole18
 * @property string $pole19
 * @property string $pole20
 * @property string $pole21
 * @property string $pole22
 * @property string $pole23
 * @property string $pole24
 * @property string $pole25
 * @property string $pole26
 * @property string $pole27
 * @property string $pole28
 * @property string $pole29
 * @property string $pole30
 * @property string $pole31
 * @property string $pole32
 * @property string $pole33
 * @property string $pole34
 * @property string $pole35
 * @property string $pole36
 * @property string $pole37
 * @property string $pole38
 * @property string $pole39
 * @property string $pole40
 * @property string $pole41
 * @property string $pole42
 * @property string $pole43
 * @property string $pole44
 * @property string $pole45
 * @property string $pole46
 * @property string $pole47
 * @property string $pole48
 * @property string $pole49
 * @property string $pole50
 * @property string $pole51
 * @property string $pole52
 * @property string $pole53
 * @property string $pole54
 * @property string $pole55
 * @property string $pole56
 * @property string $pole57
 * @property string $pole58
 * @property string $pole59
 * @property string $pole60
 * @property string $pole61
 * @property string $pole62
 * @property string $pole63
 * @property string $pole64
 * @property string $pole65
 * @property string $pole66
 * @property string $pole67
 * @property string $pole68
 * @property string $pole69
 * @property string $pole70
 * @property string $pole71
 * @property string $pole72
 * @property string $pole73
 * @property string $pole74
 * @property string $pole75
 * @property string $pole76
 * @property string $pole77
 * @property string $pole78
 * @property string $pole79
 * @property string $pole80
 * @property string $pole81
 * @property string $pole82
 * @property string $pole83
 * @property string $pole84
 * @property string $pole85
 * @property string $pole86
 * @property string $pole87
 * @property string $pole88
 * @property string $pole89
 * @property string $pole90
 * @property string $pole91
 * @property string $pole92
 * @property string $pole93
 * @property string $pole94
 * @property string $pole95
 * @property string $pole96
 * @property string $pole97
 * @property string $pole98
 * @property string $pole99
 * @property string $pole100
 * @property string $imageurl1
 * @property string $imageurl2
 * @property string $imageurl3
 * @property string $imageurl4
 * @property string $imageurl5
 * @property string $imageurl6
 * @property string $imageurl7
 * @property string $imageurl8
 * @property string $imageurl9
 * @property string $imageurl10
 * @property string $imageurl11
 * @property string $imageurl12
 * @property string $imageurl13
 * @property string $imageurl14
 * @property string $imageurl15
 * @property string $imageurl16
 * @property string $imageurl17
 * @property string $imageurl18
 * @property string $imageurl19
 * @property string $imageurl20
 */
class AdminPanel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_panel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pole1', 'pole2', 'pole3', 'pole4', 'pole5', 'pole6', 'pole7', 'pole8', 'pole9', 'pole10', 'pole11', 'pole12', 'pole13', 'pole14', 'pole15', 'pole16', 'pole17', 'pole18', 'pole19', 'pole20', 'pole21', 'pole22', 'pole23', 'pole24', 'pole25', 'pole26', 'pole27', 'pole28', 'pole29', 'pole30', 'pole31', 'pole32', 'pole33', 'pole34', 'pole35', 'pole36', 'pole37', 'pole38', 'pole39', 'pole40', 'pole41', 'pole42', 'pole43', 'pole44', 'pole45', 'pole46', 'pole47', 'pole48', 'pole49', 'pole50', 'pole51', 'pole52', 'pole53', 'pole54', 'pole55', 'pole56', 'pole57', 'pole58', 'pole59', 'pole60', 'pole61', 'pole62', 'pole63', 'pole64', 'pole65', 'pole66', 'pole67', 'pole68', 'pole69', 'pole70', 'pole71', 'pole72', 'pole73', 'pole74', 'pole75', 'pole76', 'pole77', 'pole78', 'pole79', 'pole80', 'pole81', 'pole82', 'pole83', 'pole84', 'pole85', 'pole86', 'pole87', 'pole88', 'pole89', 'pole90', 'pole91', 'pole92', 'pole93', 'pole94', 'pole95', 'pole96', 'pole97', 'pole98', 'pole99', 'pole100'], 'string'],
            [['imageurl1', 'imageurl2', 'imageurl3', 'imageurl4', 'imageurl5', 'imageurl6', 'imageurl7', 'imageurl8', 'imageurl9', 'imageurl10', 'imageurl11', 'imageurl12', 'imageurl13', 'imageurl14', 'imageurl15', 'imageurl16', 'imageurl17', 'imageurl18', 'imageurl19', 'imageurl20'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pole1' => 'Pole1',
            'pole2' => 'Pole2',
            'pole3' => 'Pole3',
            'pole4' => 'Pole4',
            'pole5' => 'Pole5',
            'pole6' => 'Pole6',
            'pole7' => 'Pole7',
            'pole8' => 'Pole8',
            'pole9' => 'Pole9',
            'pole10' => 'Pole10',
            'pole11' => 'Pole11',
            'pole12' => 'Pole12',
            'pole13' => 'Pole13',
            'pole14' => 'Pole14',
            'pole15' => 'Pole15',
            'pole16' => 'Pole16',
            'pole17' => 'Pole17',
            'pole18' => 'Pole18',
            'pole19' => 'Pole19',
            'pole20' => 'Pole20',
            'pole21' => 'Pole21',
            'pole22' => 'Pole22',
            'pole23' => 'Pole23',
            'pole24' => 'Pole24',
            'pole25' => 'Pole25',
            'pole26' => 'Pole26',
            'pole27' => 'Pole27',
            'pole28' => 'Pole28',
            'pole29' => 'Pole29',
            'pole30' => 'Pole30',
            'pole31' => 'Pole31',
            'pole32' => 'Pole32',
            'pole33' => 'Pole33',
            'pole34' => 'Pole34',
            'pole35' => 'Pole35',
            'pole36' => 'Pole36',
            'pole37' => 'Pole37',
            'pole38' => 'Pole38',
            'pole39' => 'Pole39',
            'pole40' => 'Pole40',
            'pole41' => 'Pole41',
            'pole42' => 'Pole42',
            'pole43' => 'Pole43',
            'pole44' => 'Pole44',
            'pole45' => 'Pole45',
            'pole46' => 'Pole46',
            'pole47' => 'Pole47',
            'pole48' => 'Pole48',
            'pole49' => 'Pole49',
            'pole50' => 'Pole50',
            'pole51' => 'Pole51',
            'pole52' => 'Pole52',
            'pole53' => 'Pole53',
            'pole54' => 'Pole54',
            'pole55' => 'Pole55',
            'pole56' => 'Pole56',
            'pole57' => 'Pole57',
            'pole58' => 'Pole58',
            'pole59' => 'Pole59',
            'pole60' => 'Pole60',
            'pole61' => 'Pole61',
            'pole62' => 'Pole62',
            'pole63' => 'Pole63',
            'pole64' => 'Pole64',
            'pole65' => 'Pole65',
            'pole66' => 'Pole66',
            'pole67' => 'Pole67',
            'pole68' => 'Pole68',
            'pole69' => 'Pole69',
            'pole70' => 'Pole70',
            'pole71' => 'Pole71',
            'pole72' => 'Pole72',
            'pole73' => 'Pole73',
            'pole74' => 'Pole74',
            'pole75' => 'Pole75',
            'pole76' => 'Pole76',
            'pole77' => 'Pole77',
            'pole78' => 'Pole78',
            'pole79' => 'Pole79',
            'pole80' => 'Pole80',
            'pole81' => 'Pole81',
            'pole82' => 'Pole82',
            'pole83' => 'Pole83',
            'pole84' => 'Pole84',
            'pole85' => 'Pole85',
            'pole86' => 'Pole86',
            'pole87' => 'Pole87',
            'pole88' => 'Pole88',
            'pole89' => 'Pole89',
            'pole90' => 'Pole90',
            'pole91' => 'Pole91',
            'pole92' => 'Pole92',
            'pole93' => 'Pole93',
            'pole94' => 'Pole94',
            'pole95' => 'Pole95',
            'pole96' => 'Pole96',
            'pole97' => 'Pole97',
            'pole98' => 'Pole98',
            'pole99' => 'Pole99',
            'pole100' => 'Pole100',
            'imageurl1' => 'Imageurl1',
            'imageurl2' => 'Imageurl2',
            'imageurl3' => 'Imageurl3',
            'imageurl4' => 'Imageurl4',
            'imageurl5' => 'Imageurl5',
            'imageurl6' => 'Imageurl6',
            'imageurl7' => 'Imageurl7',
            'imageurl8' => 'Imageurl8',
            'imageurl9' => 'Imageurl9',
            'imageurl10' => 'Imageurl10',
            'imageurl11' => 'Imageurl11',
            'imageurl12' => 'Imageurl12',
            'imageurl13' => 'Imageurl13',
            'imageurl14' => 'Imageurl14',
            'imageurl15' => 'Imageurl15',
            'imageurl16' => 'Imageurl16',
            'imageurl17' => 'Imageurl17',
            'imageurl18' => 'Imageurl18',
            'imageurl19' => 'Imageurl19',
            'imageurl20' => 'Imageurl20',
        ];
    }
}
