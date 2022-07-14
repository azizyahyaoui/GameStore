<?php

namespace App\core;

class AppStore
{
    public static string $ROOT_DIR;
    public static AppStore $app;
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

    public function run()
    {
       echo $this->router->resolve();

    }
}
