<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $status
 * @property string $auth_key
 * @property string $created_at
 * @property string $updated_at
 * @property string $accessToken
 */
class Usertwo extends \yii\db\ActiveRecord
{	

	public $file1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                    [['username'], 'string', 'max' => 80],
                    [['phone'], 'string'],
                    [['email'], 'email'],
                    [[ 'balance','tel'], 'integer'],
	[['username'], 'unique'],
	[['password', 'email','ul','name1','name2','dateb'], 'string', 'max' => 255],
	[['username', 'phone', 'email','password'], 'required' ],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
                    'id' => 'ID',
                    'username' => 'Логин',
                    'password' => 'Пароль',
                    'email' => 'Email',
                    'phone' => 'Телефон',
                    'status' => 'Статус',
                    'auth_key' => 'Auth Key',
                    'created_at' => 'Created At',
                    'updated_at' => 'Updated At',
                    'accessToken' => 'Access Token',
                    'balance' => 'Баланс',
                    'ul' => 'Фото У\Л',
                    'file1'=>'Фото удостоверения личности',
                    'name1' => 'Имя',
                    'name2' => 'Фамилия',
                    'dateb' => 'Дата рождения',
                    'tel' => 'Телефон'
        ];
    }
}
