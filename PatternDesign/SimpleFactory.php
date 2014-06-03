<?php

namespace simpleFactory;
// abstract product
interface iCar {
	public function drive();
}

// concrete product
class Benz implements iCar {
	public function drive() {
		echo "Driving Benz";
	}
}
class Bmw implements iCar {
	public function drive() {
		echo "Driving Bmw";
	}
}

// factory
class Driver {
	// return abstract
	public static function driverCar ($s) {
		if (strcasecmp($s, 'benz') == 0) {
			return new Benz();
		} elseif (strcasecmp($s, 'bmw') == 0) {
			return new Bmw();
		} else {
			throw new Exception();
		}
	}
}
?>