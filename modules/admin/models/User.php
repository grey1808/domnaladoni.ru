<?php

namespace app\modules\admin\models;
use yii\db\ActiveRecord;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],

        ];
    }

    public static function tableName ()
    {
        return 'user';
    }


    public static function findIdentity($id)
    {
        return static::findOne($id);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {

    }


    public static function findByUsername($username)
    {
        return static::findOne(['username'=>$username]);
    }


    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        return $this->auth_key;
    }


    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
//        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function generateAuthKey(){
        $this -> auth_key = Yii::$app->getSecurity()->generateRandomString();
    }

    const ROLE_ADMIN = 'root';
    const ROLE_USER = 'user';
    const ROLE_ATTORNEY = 'attorney';
    //
    public function can($role) {
        return $this->role == $role;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата создания',
            'username' => 'Логин',
            'password'=>'Пароль',
            'lastname' => 'Имя',
            'firstname' => 'Фамилия',
            'secondname' => 'Отчество',
            'role' => 'Группа',
            'email' => 'Email',
            'status' => 'Статус не активна',
            'birthday'=>'Дата рождения'
        ];
    }
    public function rules()
    {
        return [
            [['lastname','firstname','secondname',],'string'],
            [['username', 'password','role','email'], 'required'],
            [['date','birthday'],'safe'],
            ['email','email'],
            [['username','email'], 'unique'],

            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }
}
