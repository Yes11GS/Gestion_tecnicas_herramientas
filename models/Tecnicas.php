<?php

	namespace app\models;


	class Tecnicas extends \yii\db\ActiveRecord
	{
		public static function tableName ()
		{
			return "tecnicas";
		}
		public function rules()
		{
			return [
				[["nombre","clasificacion","area","dificultad", "enfoque", "proposito","ingredientes","participantes","procedimiento", "salidas"],"required" ],

				[["nombre"], "string", "max" => 255],
				[["clasificacion"], "string", "max" => 30],
				[["area"], "string", "max" =>255],
				[["dificultad"], "string", "max" =>255],
				[["enfoque"], "string", "max" =>255],
				[["proposito"], "string"],
				[["ingredientes"], "string"],
				[["participantes"], "string"],
				[["procedimiento"], "string"],
				[["salidas"], "string"],
			];
		}

		public function attributeLabels()
		{

			return[

				"id" => "Id",
				"nombre" => "Nombre",
				"clasificacion" =>"Clasificación",
				"area" => "Área",
				"dificultad" => "Dificultad",
				"enfoque" => "Enfoque",
				"proposito" => "Propósito",
				"ingredientes" => "Ingredientes",
				"participantes" => "Participantes",
				"procedimiento" => "Procedimiento",
				"salidas" => "Salidas",
				];
		}
	}