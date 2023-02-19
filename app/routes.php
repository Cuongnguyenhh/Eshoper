<?php 
use Illuminate\Contracts\Session\Session;
use larava\core\Router;
use larava\controllers\AboutController;
use larava\controllers\AdminController;
use larava\controllers\ContactController;
use larava\controllers\CategoryController;
use larava\controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use larava\controllers\CartController;
use larava\controllers\ProductController;

$router=new Router;
//frontend router;
$router->get("/",[AboutController::class,"index"]);
$router->get("/home",[AboutController::class,"index"]);
$router->get("/login",[AboutController::class,"login"]);
$router->get("/shop",[AboutController::class,"shop"]);
$router->get('/productdetail',[ProductController::class,"productdetail"]);
$router->get('/checkout',[CartController::class,"checkout"]);


//user routers;
$router->post('/getsignin',[UserController::class,"getsignin"]);
$router->post('/getlogin',[UserController::class,"getlogin"]);
$router->get('/logout',[UserController::class,"logout"]);



//admin routes
if(isset($_SESSION['login'])&& ($_SESSION['login']['type'])!=0){
    $router->get('/dashboard',[CategoryController::class,"index"]);

    //category routes
    $router->get('/allcate',[CategoryController::class,"index"]);
    $router->get('/addcate',[CategoryController::class,"addcategory"]);
    $router->post('/getaddcate',[CategoryController::class,"getaddcategory"]);
    $router->get('/editcate',[CategoryController::class,"editcategory"]);
    $router->post('/geteditcate',[CategoryController::class,"geteditcate"]);


    //products routes
    $router->get('/productlist',[ProductController::class,"index"]);
    $router->get('/addproducts',[ProductController::class,"formAddproducts"]);
    $router->post('/getaddproduct',[ProductController::class,"addproducts"]);
    $router->get('/editproduct',[ProductController::class,"editproduct"]);
    $router->post('/getupdate',[ProductController::class,"getupdate"]);




$router->get("/contact",[ContactController::class,"form"]);
$router->get("/category",[CategoryController::class,"index"]);
$router->post("/category",[CategoryController::class,"addCate"]);
$router->get("/delcate",[CategoryController::class,"delCate"]);
}
  //cart routes
  $router->get('/tocart',[CartController::class,"index"]);
  $router->get('/getcart',[CartController::class,"addcart"]);
  $router->get('/delcart',[CartController::class,"delcart"]);
// $router->get("/editcate",[CategoryController::class,"editCate"]);
// $router->post("/editcate",[CategoryController::class,"updateCate"]);

$router->post("/contact",function(){
    echo "Trang Liên Hệ POST";
});

$router->run();
?>