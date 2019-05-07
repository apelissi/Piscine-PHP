<?php

abstract class Fighter{

	public $typ = 'bob';

	public function __construct($val)
	{
		$this->typ = $val;
	}

	abstract public function fight($target);
}
?>
