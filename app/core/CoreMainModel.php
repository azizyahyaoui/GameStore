<?php

namespace App\core;

abstract class CoreMainModel
{
	public function loadData($data)
	{
		foreach ($data as $key => $value){
			if(property_exists($this,$key)){
				$this->{$key}=$value;
			}
		}
	}

	public function validateData()
	{
		
	}
}