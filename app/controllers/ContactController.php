<?php
namespace larava\controllers;
use larava\core\Controller;
class ContactController extends Controller{
    public function form(){
        $this->View("contact/form");
    }
}