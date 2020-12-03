<?php

abstract class parentClass
{
	abstract protected function calc($a,$b);
}

class childClass extends parentClass
{
	
	public function calc($c,$d);
	echo $c+$d;
}

$result = new childClass();
$result->calc(10,20);