<?php

namespace App\core;

class Router
{
    protected array $route = [];
    public Request $request;
    public  Response $response;

    /**
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response= $response;
    }


    public function get($path, $callBack)
    {
        $this->route['get'][$path] = $callBack;
    }
    public function post( $path, $callBack)
    {
        $this->route['post'][$path] = $callBack;
    }


    public function resolve()
    {
       $path=$this->request->getPath();
       $method = $this->request->reqMethod();
       $callBack=$this->route[$method][$path] ?? false;
       if($callBack === false){
          $this->response->setStatusCode(404);
           return $this->renderView("/layout/_404");

       }
       if(is_string($callBack)){
           return $this->renderView($callBack);
       }
       if (is_array( $callBack)) {
        AppStore::$app->coreMainController = new $callBack[0]();
	       $callBack[0] = AppStore::$app->coreMainController;
       }
     
        return call_user_func($callBack, $this->request);

    }

    public function renderView($view)
    {
        $layoutContent=$this->layoutContent();
        $viewContent=$this->renderInContentView($view);
        return str_replace('{{content}}',  $viewContent,$layoutContent);
    }

    protected function layoutContent()
    {
		$layout =AppStore::$app->coreMainController->layout;
        ob_start();
        include_once AppStore::$ROOT_DIR."/views/layout/$layout.php";
        return ob_get_clean();
    }

    protected function renderInContentView($view)
    {
        ob_start();
        include_once AppStore::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }



}

