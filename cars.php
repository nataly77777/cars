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

class Lada extends Bus{
	public $color='lime';
	public $doors=4;
	public $maxSpeed=150;
}
class Kamaz extends Bus{
	public $color='black';
	public $doors=2;
	public $maxSpeed=100;
}
class Bogdan extends Bus{
	public $color='white';
	public $doors=6;
	public $maxSpeed=75;
}
class Moskvich extends Wen{
	public $color='red';
	public $doors=4;
	public $maxSpeed=50;
}
class Opel extends Wen{
	public $color='pink';
	public $doors=3;
	public $maxSpeed=80;
}
class Tayota extends Wen{
	public $color='orange';
	public $doors=4;
	public $maxSpeed=250;
}
