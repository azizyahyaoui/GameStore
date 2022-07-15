<?php

namespace App\core;

class AppStore
{
    public static string $ROOT_DIR;
    public static AppStore $app;
	public CoreMainController $coreMainController;
    public Request $request;
    public Router $router;
    public  Response $response;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR=$rootPath;
        self::$app=$this;
        $this->request= new Request();
        $this->response= new Response();
        $this->router = new Router($this->request,$this->response);

    }

	public function getCoreMainController(): CoreMainController
	{
		return $this->coreMainController;
	}
	public function setCoreMainController(CoreMainController $coreMainController): void
	{
		$this->coreMainController = $coreMainController;
	}


    public function run()
    {
       echo $this->router->resolve();

    }
}
