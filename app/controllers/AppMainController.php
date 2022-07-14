<?php

namespace App\controllers;

use App\core\AppStore;
use App\core\CoreMainController;
use App\core\Request;

class AppMainController extends CoreMainController
{
	public function home()
	{
        return $this->render('home');
	}
    public function contact()
    {
        return $this->render('contact');
}
    public function handleContact(Request $request)
    {
        $body = $request->getBodyAction();
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        exit;
    }
}