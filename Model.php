<?php
	class Model{
		private $attributes =[];


		public function __set($key, $value){
			$this->attributes[$key] = $value;
		}

		public function __get($key){
			return array_key_exists($key, $this->attributes) ? $this->attributes[$key] : null;
		}
	}

	$model = new Model();

	$model->__set("name", "Nico");
	echo $model->__get("name");
