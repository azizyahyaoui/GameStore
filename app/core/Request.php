<?php

namespace App\core;

class Request
{
    public function getPath(){
        //
        $path =$_SERVER['REQUEST_URI'] ?? '/';
        $position= strpos($path,'?');
       if($position === false){
           return $path;
       }
        return substr($path, 0, $position);
    }


    public function reqMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

	public function isGet()
	{
		return $this->reqMethod() === 'get';
	}

	public function isPost()
	{
		return $this->reqMethod() === 'post';
	}

     public function getBodyAction(): array
     {
        $bodyAction= [];
        if ($this->reqMethod()==='get') {
            foreach($_GET as $key => $value){
	            $bodyAction[$key]=filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if ($this->reqMethod()==='post') {
            foreach($_POST as $key => $value){
                $bodyAction[$key]=filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $bodyAction;
    }
}