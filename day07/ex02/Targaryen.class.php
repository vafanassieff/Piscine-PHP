<?php
class Targaryen {
	public function getBurned(){
		if(static::resistsFire() == TRUE)
			return('emerges naked but unharmed');
		else
			return('burns alive');
	}
	public function resistsFire() {
		return False;
	 }
}
?>