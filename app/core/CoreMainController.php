<?php

namespace App\core;

class CoreMainController
{
	public string $layout ="_main_layout";
	public function setLayout($layout)
	{
		$this->layout = $layout;

	}

	public function render($view)
	{
		return AppStore::$app->router->renderView($view);
	}

}