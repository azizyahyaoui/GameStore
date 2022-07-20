<?php

namespace App\core\form;

class Form
{
	public static function formBegin($action, $method)
	{
		echo sprintf("<from action='%s' method='%s'>",$action, $method);
		return new Form();
	}
	public function creatField($model,$attribute)
	{
		return new Field($model, $attribute);
	}

	public static function endForm(): void
	{
		echo "</form>";
	}



}