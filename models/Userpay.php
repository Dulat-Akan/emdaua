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
 * @property string $access_token
 * @property string $phone
 * @property string $timer
 * @property integer $balance
 * @property string $ul
 * @property string $name1
 * @property string $name2
 * @property string $dateb
 * @property integer $tel
 * @property integer $role
 * @property string $file1
 */
class Userpay extends \yii\db\ActiveRecord
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
            [['balance', 'tel', 'role'], 'integer'],
            [['username', 'auth_key', 'created_at'], 'string', 'max' => 80],
            [['password', 'email'], 'string', 'max' => 100],
            [['status', 'timer', 'ul', 'name1', 'name2', 'dateb'], 'string', 'max' => 255],
            [['updated_at', 'access_token', 'phone', 'file1'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'access_token' => 'Access Token',
            'phone' => 'Phone',
            'timer' => 'Timer',
            'balance' => 'Balance (agp)',
            'ul' => 'Ul',
            'name1' => 'Name1',
            'name2' => 'Name2',
            'dateb' => 'Dateb',
            'tel' => 'Tel',
            'role' => 'Role',
            'file1' => 'File1',
        ];
    }
}
