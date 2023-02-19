<?php
namespace larava\controllers;
use larava\core\Controller;
class AdminController extends Controller{
    //Action
   
    public function index(){
        
        if(isset($_SESSION['login'])&&$_SESSION['login']['type']==1){
        $this->View("admin/dashboard","","admin");
        }else{
            $this->View("home/login","","loginlayout");
        }

    }
   
}