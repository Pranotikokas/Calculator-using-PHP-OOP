<?php

Class Calculator{
	
	protected $result;
	protected $operation;
	
	public function setOperation(OperatorInterface $operation){
		$this->operation  = $operation;
		//var_dump ($operation);
	}
	
	public function calculate(){
		foreach(func_get_args() as $num)
		{
			$this->result = $this->operation->run($num, $this->result);
		}
	}
	
	public function getResult(){
		return $this->result;
	}
}
