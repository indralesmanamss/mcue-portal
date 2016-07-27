<?php
namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

class Culinary extends ActiveRecord{

	public $imageFile;
	public static function tableName()
	{
		return 'culinary';
	}

	public function rules()
	{
		return[
			[['title','content'], 'required', 'message'=>'can not be blank'],
			['img_url', 'string'],
			[['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
			[['imageFile'], 'safe'],
		];
	}
}