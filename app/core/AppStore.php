<?php

namespace App\core;

class AppStore
{
    public static string $ROOT_DIR;
    public Request $request;
    public Router $router;
    public  Response $response;
	public Database $db;
	public static AppStore $app;
	public CoreMainController $coreMainController;

    public function __construct($rootPath,array $dbConfig)
    {
        self::$ROOT_DIR=$rootPath;
        self::$app=$this;
        $this->request= new Request();
        $this->response= new Response();
        $this->router = new Router($this->request,$this->response);
		$this->db = new Database($dbConfig['db']);
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
