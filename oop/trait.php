<?php 
	trait form_validations{
		public function required_fields(){
			echo "All fields are mandatory.";
		}
	}

	trait store_data{
		public function store(){
			echo "Data store Successfully!";
		}
	}

	class basic_information{
		use form_validations, store_data;

		public function show_information(){
			echo "This is your Information.";
		}
	}

	$obj = new basic_information();
	echo $obj->required_fields();
	echo "<br>";
	echo $obj->store();
	echo "<br>";
	echo $obj->show_information();
