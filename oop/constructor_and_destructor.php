<?php 
	class Man{
		public $name;
		public $age;

		function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}

		function __destruct(){
			echo 'My name is '.$this->name.' and Age is '.$this->age;
		}
	}

	$obj = new Man('Rohim Ullah','65');