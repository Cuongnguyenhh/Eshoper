<?php
namespace larava\controllers;
use larava\core\Controller;

class ProductController extends Controller{
    public $product;
    public function __construct(){
        $this->product = $this->Model('ProductModel');
    }

    public function index(){
       $list = $this->product::all();
        

        return $this->View('/admin/allproducts',['list' => $list],'admin');
        
    }
    
    public function addproducts(){
        $data = array();
        $data['prd_name'] = $_POST['prd_name'];
        $data['prd_price'] = $_POST['prd_price'];
        $data['prd_quantity'] = $_POST['prd_quantity'];
        $data['prd_type'] = $_POST['prd_weight'];
        $data['cate_id'] = $_POST['cate_id'];
        $this->product::insert($data);

    }

    public function editproducts(){
        $id = $_POST['id'];

        return $this->View('/editproduct',"['id' =>$id]");
        
    }
    public function updateproducts(){
        $data = array();
    }
    
    public function deleteproducts(){
        //code to delete
    }
}