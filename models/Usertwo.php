<?php

namespace app\models;

use Yii;

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
			[['username'], 'unique'],
			[['password', 'email'], 'string', 'max' => 255],
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
        ];
    }
}
