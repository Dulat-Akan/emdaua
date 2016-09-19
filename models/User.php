<?php

namespace app\models;
use yii\db\ActiveRecord;
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
   public static function tableName()
    {
        return 'user';
    }


    /**
     * @inheritdoc
     */
     public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
   

    
    


    public static function findByUsername($username)
    {   

        $check = static::findOne(['username' => $username]);

        return $check;
       
    }


    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }


    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
     public function validatePassword($password)
    {
       
        $check = \Yii::$app->getSecurity()->validatePassword($password, $this->password);
       
       if($check){
            return true;
       }else{
            return false;
       }
       
    }

    public function generateAuthKey(){
        $this->auth_key = \Yii::$app->getSecurity()->generateRandomString();
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
       return static::findOne(['access_token' => $token]);
    }
}
