<?php

class Example{

	public $publicFoo = 0;
	private $_privateFoo = 'hello';

	function __construct(){
		print('Constructor called' . PHP_EOL);

		print('$this->publicFoo: ' . $this->publicFoo . PHP_EOL);
		$this->publicFoo = 42;
		print('$this->publicFoo: ' . $this->publicFoo . PHP_EOL);

		print('$this->_privateFoo: ' . $this->_privateFoo . PHP_EOL);
		$this->_privateFoo = 'world';
		print('$this->_privateFoo: ' . $this->_privateFoo . PHP_EOL);

		$this->publicBar();
		$this->_privateBar();
		return;
	}
	function __destruct(){
		print('Destructor called'. PHP_EOL);
		return;
	}
	function publicBar(){
		print('Method publicBar called' . PHP_EOL);
		return;
	}
	private function _privateBar(){
	print('Method _privateBar called' . PHP_EOL);
	return;
	}
}

$instance = new Example();

print('$instance->publicFoo: ' . $instance->publicFoo . PHP_EOL);
$instance->publicFoo = 100;
print('$instance->publicFoo: ' . $instance->publicFoo . PHP_EOL);
$instance->publicBar();

print('$instance->_privateFoo: ' . $instance->_privateFoo . PHP_EOL);
$instance->_privateFoo = 'lol';
print('$instance->_privateFoo: ' . $instance->_privateFoo . PHP_EOL);

$instance->_privateBar();

?>