<?php 
	interface Facilities{
		public function basic_salary();

		public function house_rents();

		public function conveyance_allowance();

		public function medical_allowance();
	}

	class Employee implements Facilities{
		public function basic_salary(){
			echo "Basic Salary is 10K";
		}

		public function house_rents(){
			echo "House Rents is 5K";
		}

		public function conveyance_allowance(){
			echo "Conveyance Allowance is 1K";
		}

		public function medical_allowance(){
			echo "Medical Allowance is 2K";
		}
	}

	$obj = new Employee();
	echo $obj->basic_salary();
	echo "<br>";
	echo $obj->house_rents();
	echo "<br>";
	echo $obj->conveyance_allowance();
	echo "<br>";
	echo $obj->medical_allowance();
