<?php

Class Exemple{

	private $_att = 0;

	function getAtt()
	{ 
		return $this->_att;
	}

	public function setAtt($v){
		if ($this->_att + $v > 50)
			$this->_att = 50;
		else
			$this->_att = $v;
		return;
	}
	public function __get($att){
		print('Attemp to acces \'' . $att . '\' attribute, this script should die' . PHP_EOL);
		return 'arrrg';
	}
	public function __set($att, $value){
		print('Attemp to set \'' . $att . '\' attribute to \'' . $value .' this script should die' . PHP_EOL);
		return ;
	}
	public function __construct(array $kwargs){
		print( 'Constructor called' . PHP_EOL);
		$this->setAtt($kwargs['arg1']);
		print('$this->getAtt(): ' . $this->getAtt() . PHP_EOL);
	}
	public function __destruct(){
		print('Destructor called'. PHP_EOL);
		return;
	}

}

$instance = new Exemple(array('arg => 42'));

print( '$instance->$foo: ' . $instance->$foo . PHP_EOL);
print( '$instance->$_att: ' . $instance->$_att . PHP_EOL);

?>