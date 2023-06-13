<?php 
	class Php{
		const lang = "PHP Programming";

		public function lang_name(){
			return self::lang;
		}
	}

	$obj = new Php();
	echo $obj->lang_name();

	// echo "<br>";

	// echo Php::lang;