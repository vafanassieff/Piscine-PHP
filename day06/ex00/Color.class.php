<?php

class Color {

	public static $verbose = FALSE;
	public $red;
	public $blue;
	public $green;

public function __construct( array $kwargs )
	{
		if (array_key_exists('rgb', $kwargs))
		{
			$rgbArray = $this->hex_to_rgb($kwargs['rgb']);
			$this->red = $rgbArray['red'];
			$this->green = $rgbArray['green'];
			$this->blue = $rgbArray['blue'];
		}
		else if ($kwargs['red'] !== NULL && $kwargs['green'] !== NULL && $kwargs['blue'] !== NULL)
		{
			foreach ($kwargs as $key => $val)
				$val = intval($val);
			$this->red = round($kwargs['red']);
			$this->green = round($kwargs['green']);
			$this->blue = round($kwargs['blue']);
		}
		if ($this->red < 0)
			$this->red = 0;
		if ($this->green < 0)
			$this->green = 0;
		if ($this->blue < 0)
			$this->blue = 0;
		if ($this->red > 255)
			$this->red = 255;
		if ($this->green > 255)
			$this->green = 255;
		if ($this->blue > 255)
			$this->blue = 255;
		if (self::$verbose === True)
			print('Color constructed.'.PHP_EOL);
	}
	public function __destruct()
	{
		if (self::$verbose === True)
			print('Color destructed.'.PHP_EOL);
	}
	static function doc(){
			return file_get_contents('Color.doc.txt');
	}
}
?>