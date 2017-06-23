<?php

Class Exemple{

	private $_x = 0;
	private $_y = 0;
	


	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }

	public function setX( $x ) { $this->_x = $x; return; }
	public function setY( $y ) { $this->_y = $y; return; }

	public function __construct(){
		print('Constructor called' . PHP_EOL);
	}

	public function __destruct(){
		print('Destructor called'. PHP_EOL);
		return;
	}

	public function __invoke(){
		return $this->getX() + $htis->getY();
	}
	


}


?>