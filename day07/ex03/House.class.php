<?php

abstract class House {

	abstract public function getHouseName();
	abstract public function getHouseMotto();
	abstract public function getHouseSeat();
	public function introduce(){
		$name = static::getHouseName();
		$seat = static::getHouseSeat();
		$moto = static::getHouseMotto();

		$ret = ("$name of $seat : "."\"$moto\"" . PHP_EOL);
		print($ret);

	}
}

?>