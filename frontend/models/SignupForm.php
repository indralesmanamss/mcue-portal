<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $fname;
    public $lname;
    public $address;
    public $country;
    public $zipCode;
    public $imageFile;
    public $imgUrl;
    public $email;
    public $password;
    public $confirmPassword;
    public $role;
    public $captcha;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username','fname','address','country','zipCode','email','password','confirmPassword'], 'required'],

            ['username', 'trim'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            [['fname','lname','address','country'], 'string'],

            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'string', 'min' => 6],
            ['confirmPassword', 'compare', 'compareAttribute'=>'password', 'message'=>"Password not match" ],

            [['role','zipCode'], 'integer'],

            ['captcha', 'required'],
            ['captcha', 'captcha'],


        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->fname = $this->fname;
        $user->lname = $this->lname;
        $user->address = $this->address;
        $user->country = $this->country;
        $user->zip_code = $this->zipCode;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;

        
    }
}
