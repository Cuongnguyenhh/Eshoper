<?php
namespace larava\controllers;
use larava\core\Controller;
class AboutController extends Controller{
    //Action
    public function index(){
        
        $this->View("home/home");
    }
    public function page404(){
        $this->View("home/404");
    }
}