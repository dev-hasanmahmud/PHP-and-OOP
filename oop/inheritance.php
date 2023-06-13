<?php 
	class Father{
		public $home;
		protected $car;
		private $money;

		public function cute_home(){
			$this->home = "White House";
			return 'My home name is '.$this->home;
		}

		protected function awsome_car(){
			$this->car = "Range Rover";
			return "My favorite car is ".$this->car;
		}

		private function bank_balance(){
			$this->money = "$10B";
			return "Now, my bank balance is ". $this->money;
		}
	}

	class Son extends Father{
		public function my_bike(){
			return "I have a own Bike.";
		}

		public function my_father_cute_home(){
			return parent::cute_home(). ' for Son after my death.';
		}

		public function my_father_awsome_car(){
			return parent::awsome_car(). ' for Son after my death.';
		}

		public function my_father_bank_balance(){
			// Private method is not accessible in child class inside. Showing errors.
			return parent::bank_balance(). ' for Son after my death.';
		}
	}

	$obj = new Father();
	echo $obj->cute_home();

	echo "<br>";

	// echo $obj->awsome_car(); // Protected method is not accessible from class outside. Showing errors.

	// echo "<br>";

	// echo $obj->bank_balance(); // Private method is not accessible from class outside. Showing errors.

	// echo "<br><br>";

	$obj2 = new Son();
	echo $obj2->my_bike();

	echo "<br>";

	echo $obj2->my_father_cute_home();

	echo "<br>";

	echo $obj2->my_father_awsome_car();

	echo "<br>";

	// echo $obj2->my_father_bank_balance(); // Private method is not accessible in child class outside. Showing errors.

	// echo "<br>";

	echo $obj2->cute_home();

	// echo "<br>";
	
	// echo $obj2->awsome_car(); // Protected method is not accessible in child class outside. Showing errors.

	// echo "<br>";
	
	// echo $obj2->bank_balance(); // Private method is not accessible in child class outside. Showing errors.

