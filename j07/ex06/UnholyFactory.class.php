<?php

class UnholyFactory{

	private $_soldiers = array();

	public function absorb($soldier){
		$a = 0;
		if (is_subclass_of($soldier, 'Fighter'))
		{
			foreach ($this->_soldiers as $b){
				if ($soldier->typ == $b ->typ)
					$a = 1;
			}
			if ($a == 0)	{
				echo '(Factory absorbed a fighter of type ' . $soldier->typ . 
					')' . PHP_EOL;
				$this->_soldiers[] = $soldier;
			}
			else
				echo '(Factory already absorbed a fighter of type ' 
				. $soldier->typ . ')' . PHP_EOL;
		}
		else
			echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
	}

	public function fabricate($rf)
	{
	$a = 0;
	foreach ($this->_soldiers as $b){
		if ($rf == $b ->typ)
		{
			$a = 1;
			$t = $b;
		}
	}
	if ($a == 1)
	{
		echo "(Factory fabricates a fighter of type " . $rf . ")" . PHP_EOL;
		return $t;
	}
	else
	{
		echo "(Factory hasn't absorbed any fighter of type " . $rf . ")" . PHP_EOL;
		return null;
	}
	}
}

?>
