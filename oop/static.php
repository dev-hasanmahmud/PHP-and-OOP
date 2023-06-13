<?php
	class basic_info{
		static public $name = "Hasan Mahmud";

		public function intro(){
		 	return "My name is ".self::$name;
		}

		public static function info(){
			echo "My basic Informations";
		}

		public function basic(){
			return self::info();
		}
	}

	class full_info{
		public function full_intro(){
			return basic_info::info(). ' Full!';
		}
	}

	class minimum_info extends basic_info{
		public function mini_info(){
			return parent::info(). ' Minimum!';
		}
	}

	$obj = new basic_info();
	echo $obj->intro();

	echo "<br>";

	basic_info::info();

	echo "<br>";

	echo $obj->basic().' Here!';

	echo "<br>";

	$obj2 = new full_info();
	echo $obj2->full_intro();

	echo "<br>";

	$obj3 = new minimum_info();
	echo $obj3->mini_info();
