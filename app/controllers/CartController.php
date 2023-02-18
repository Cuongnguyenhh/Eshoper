<?php

namespace larava\controllers;

use larava\core\Controller;

class CartController extends Controller
{

    public $product;
    public $categories;
    public function __construct()
    {
        $this->categories = $this->Model('CategoryModel');
        $this->product = $this->Model('ProductModel');
    }

    public function index(){
        return $this->View('/card/card',"","loginlayout");
    }

    public function addcart()
    {
        $idprd = $_GET['id'];
        
        $prd =  $this->product::all()->where('id', $idprd)->first();
        $roduct = $prd->getAttributes();
        
        $_SESSION['card'][$idprd] = $roduct;
        header('location:./tocart');
        
        // var_dump($_POST);
      
        // unset($_SESSION['card']);
    }
    public function delcart(){
        $prdid = $_GET['id'];
        unset($_SESSION['card'][$prdid]);
        return $this->View('/card/card','','loginlayout');
    }
}
