<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Users extends ActiveRecord{
    
     public static function getDb()
    {
        return Yii::$app->db;
    }
    
		public static function tableName ()
		{
			return "users";
		}
	/*	public function rules()
		{
			return [
				[["username","email","role"],"required" ],
				[["username"], "string", "max" => 255],
				[["email"], "string", "max" =>255],
				[["role"], "string", "max" =>1],
				];
		}

		public function attributeLabels()
		{

			return[

				"id" => "Id",
				"username" => "Usuario",
				"email" => "Email",
				"role" => "Rol",
			
				];
		}*/
		
	}