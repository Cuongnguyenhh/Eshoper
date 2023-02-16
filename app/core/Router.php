<?php 
namespace larava\core;
class Router{ 
    public $routes=[];   
    public $login = "";
    public function get($path, $callback){
        $this->routes['get'][$path]=$callback;
    }

    public function post($path, $callback){
        $this->routes['post'][$path]=$callback;
    }

    public function run(){
        $method=strtolower($_SERVER['REQUEST_METHOD']);
        $path=isset($_GET['url'])?"/".$_GET['url']:"/";
        $callback=$this->routes[$method][$path]??false;       
        if(is_object($callback)) call_user_func($callback); 
        if(is_array($callback)){
            $controller = new $callback[0];
            $action = $callback[1];
            call_user_func([$controller,$action]);
        }    
          
    }
   
}
?>