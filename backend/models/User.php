<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord{

	public $imageFile;
	public static function tableName()
	{
		return 'user';
	}

	public function rules()
	{
		return[
			['username', 'string'],
			[['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
			[['imageFile'], 'safe'],
		];
	}
}