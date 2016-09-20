<?php

Class Divider implements OperatorInterface{
	
	public function run($number,$result){
		return $result / $number; 
		
	}
}