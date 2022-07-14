<?php

namespace App\core;

class CoreMainController
{
	public function render($view)
	{
		return AppStore::$app->router->renderView($view);
	}

}