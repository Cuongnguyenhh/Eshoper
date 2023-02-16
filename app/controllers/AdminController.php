<?php
namespace larava\controllers;
use larava\core\Controller;
class AdminController extends Controller{
    //Action
    public function index(){
     
        $this->View("admin/dashboard","","admin");
    }
}