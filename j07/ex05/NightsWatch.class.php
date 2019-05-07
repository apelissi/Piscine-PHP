<?php

class NightsWatch{
	private $_fighters = array();
	
	public function recruit($new)
	{
		$this->_fighters[] = $new;
	}

	public function fight()
	{
		foreach ($this->_fighters as $warrior){
			if (is_subclass_of($warrior, IFighter))
				$warrior->fight();
		}
	
	}
}

?>
