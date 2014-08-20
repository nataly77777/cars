<?php

class Car{
	public function go(){
		echo 'go';
	}
}
class Light extends Car{
	public function courpuse(){
		echo 'courpuse';
	}
	public function weight(){
		echo 'weight';
	}
	public function power(){
		echo 'power';
	}
}

class Bus extends Car{
	public function courpuse(){
		echo 'courpuse';
	}
	public function weight(){
		echo 'weight';
	}
	public function power(){
		echo 'power';
	}
}

class Wen extends Car{
	public function courpuse(){
		echo 'courpuse';
	}
	public function weight(){
		echo 'weight';
	}
	public function power(){
		echo 'power';
	}
}

class BMW extends Light{
	public $color='red';
	public $doors=2;
	public $maxSpeed=300;
}

class Audi extends Light{
	public $color='yellow';
	public $doors=3;
	public $maxSpeed=200;
}

class Nissan extends Light{
	public $color='blue';
	public $doors=4;
	public $maxSpeed=250;
}

