<?php

Class Substractor implements OperatorInterface{
	
	public function run($number,$result){
		return $result - $number; 
		
	}
}

