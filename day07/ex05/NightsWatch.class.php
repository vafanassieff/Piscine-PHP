<?php

class  NightsWatch {
	private $soldier = array();

	public function recruit($who){
		$this->soldier[] = $who;
	}
	public function fight(){
		foreach ($this->soldier as $elem)
			if ($elem instanceof IFighter)
				$elem->fight();
	}
}
?>