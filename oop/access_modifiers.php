<?php 
	class AccessPermission{
		public $name = "Ayon Ahmed";
		protected $age = "50";
		private $address = "Dhaka";

		public function info(){
			// Protected and Private property class is accessible from inside.
			return "This is ". $this->name.'. My age is '. $this->age. '. My address is '.$this->address;
		}
	}

	$obj = new AccessPermission();
	echo $obj->info();

	// Protected and Private property class is not accessible from outside. Showing errors.
	// echo 'My age is '. $obj->age. '. My address is '.$obj->address;