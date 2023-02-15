<?php 
use larava\core\Router;
use larava\controllers\AboutController;
use larava\controllers\ContactController;
use larava\controllers\CategoryController;

$router=new Router;
//frontend router;
$router->get("/",[AboutController::class,"index"]);
$router->get("/home",[AboutController::class,"index"]);


$router->get("/contact",[ContactController::class,"form"]);

$router->get("/category",[CategoryController::class,"index"]);
$router->post("/category",[CategoryController::class,"addCate"]);
$router->get("/delcate",[CategoryController::class,"delCate"]);

$router->get("/editcate",[CategoryController::class,"editCate"]);
$router->post("/editcate",[CategoryController::class,"updateCate"]);

$router->post("/contact",function(){
    echo "Trang Liên Hệ POST";
});

$router->run();
?>