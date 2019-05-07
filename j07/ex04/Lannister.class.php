<?php

class Lannister{
	public $lan = true;
	public $incest = false;
	public $sexe  = true;

	public function sleepWith($o)
	{
		if ($o->lan && (!$this->incest || $this->sexe == $o->sexe))
			echo "Not even if I'm drunk !";
		elseif ($o->lan && $this->incest && $o->sexe)
			echo "With pleasure, but only in a tower in Winterfell, then.";
		else	
			echo "Let's do this.";
		echo PHP_EOL;
	}
}
?>
