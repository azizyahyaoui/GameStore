<?php

namespace App\controllers;

use App\core\CoreMainController;
use App\core\Request;
use App\models\RegisterModel;


class AuthController extends CoreMainController
{

	public function login()
	{
		$this->setLayout("_auth_layout");
		return $this->render('login');
	}


	public function register(Request $request)
	{
		$errors = [];
		$this->setLayout("_auth_layout");
		$registerModel = new RegisterModel();

		if ($request->isPost()) {

			$registerModel->loadData($request->getBodyAction());

			if ($registerModel->validateData() && $registerModel->register()) {
				return "Success";
			}


			return $this->render('register', [
				'model' => $registerModel,
			]);
		}
		return $this->render('register', ['errors' => $errors]);
	}

}
