<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "backend_user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $firstName
 * @property string $lastName
 * @property string $authKey
 */
class BackendUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'backend_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'password', 'firstName', 'lastName', 'authKey'], 'required'],
            [['id'], 'integer'],
            [['username', 'password'], 'string', 'max' => 100],
            [['firstName', 'lastName'], 'string', 'max' => 20],
            [['authKey'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'authKey' => 'Auth Key',
        ];
    }

    public function getAuthKey() {
        return $this->authKey;
    }

    public function getId() {
        return $this->id;
    }

    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;;
    }

    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        throw new \yii\base\NotSupportedException();
    }
    
    public static function findByUsername($username){
        return self::findOne(['username' =>$username]);       
        
    }
    
    public function validatePassword($password){
        
        return $this->password===$password;
    }
}
