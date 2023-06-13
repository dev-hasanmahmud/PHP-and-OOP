<?php 
	class Person{
		public $name = "Hasan Mahmud";
		public $age;
		public $address;
		protected $country = "Bangladesh";
		private $religion;

		public function info(){
			$this->age = 50;
			$this->religion = "Islam";
			return "This is ".$this->name. '. I am '.$this->age. ' years old. '. 'My present address is '.$this->address;
		}

		public function other_info(){
			return "I am from ".$this->country. '. My religion is '.$this->religion;
		}
	}

	$obj = new Person();
	$obj->address = "Dhaka";
	echo $obj->info();

	echo "<br>";

	echo $obj->other_info();

