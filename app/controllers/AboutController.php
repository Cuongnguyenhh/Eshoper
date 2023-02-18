<?php
namespace larava\controllers;
use larava\core\Controller;
class AboutController extends Controller{
    
    public $product;
    public $categories;
    public function __construct(){
        $this->categories=$this->Model('CategoryModel');
        $this->product = $this->Model('ProductModel');
    }
    public function index(){
        // $catevalue= array();
        $cate = $this->categories::all()->where('type','0');
        $product = $this->product::all()->where('prd_type','0');
        // echo '<pre>';
        //  var_dump($product);
        // echo '</pre>';
        // foreach($cate as $keycate){
        //     // $i = 0;
        //     $catevalues = $keycate->getAttributes();
        //     $catevalue += $catevalues;
        // }
        $this->View("home/home",["product" =>$product]);
    }
    public function page404(){
        $this->View("home/404");
    }
    public function shop(){
        $this->View("home/shop");
    }
    public function login(){
        $this->View("home/login","","loginlayout");
    }
}