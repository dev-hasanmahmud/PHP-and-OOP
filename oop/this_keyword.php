<?php 
	class Project{
		public $name;
		public $duration;
		public $revenue;

		public function __construct($revenue){
			$this->name = "Click Processing";
			$this->duration = "6 Months";
			$this->revenue = $revenue;

			echo "Project name is ".$this->name. '. Total duration '.$this->duration. '. Total revenue '.$this->revenue;
		}
	}

	$obj = new Project('$10M');