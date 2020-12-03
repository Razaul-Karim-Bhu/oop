<?php
/**
 * 
 */
class Math
{
	public $a;
	public $b; 
	public $c;
	
	function __construct($a=4, $b=6){
		$this->a = $a;
		$this->b = $b;
	}

	function sum(){
		$this->c = $this->a + $this->b;
		echo $this->c;
	}
}



$result = new Math();
// $result->a = 10;
// $result->b = 20;

$result->sum();



// 