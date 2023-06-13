<?php

	abstract class Driver{
		public $fual;

		public function __construct($fual){
			$this->fual = $fual;
		}

		abstract public function need_fual();
	}

	class Vehicle extends Driver{
		public function need_fual(){
			return "I Need ". $this->fual. " to run!";
		}
	}

	$obj = new Vehicle('Diesel');
	echo $obj->need_fual();
