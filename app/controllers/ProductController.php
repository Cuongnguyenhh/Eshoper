<?php

namespace larava\controllers;

use larava\core\Controller;

class ProductController extends Controller
{
    public $product;
    public $cate;
    public function __construct()
    {
        $this->product = $this->Model('ProductModel');
        $this->cate = $this->Model('CategoryModel');
    }

    public function productdetail()
    {
        $id = $_GET['id'];
        $prd = $this->product::all()->where('id', $id)->first();
        $prdvalue = $prd->getAttributes();
        return $this->View('products/productdetail', ['prd' => $prdvalue], 'loginlayout');
    }


    public function index()
    {
        $list = $this->product::all();


        return $this->View('/products/productlist', ['list' => $list], 'admin');
    }
    public function formAddproducts()
    {
        return $this->view("products/addproduct", "", "admin");
    }


    public function addproducts()
    {
        $data = array();
        $imgload = basename($_FILES['imgload']['name']);
        $target_dir = "./public/uploadfiles/";
        $target_file = $target_dir . $imgload;
        move_uploaded_file($_FILES["imgload"]["tmp_name"], $target_file);
        $data['prd_name'] = $_POST['prd_name'];
        $data['prd_price'] = $_POST['prd_price'];
        $data['prd_quantity'] = $_POST['prd_quantity'];
        $data['prd_type'] = $_POST['prd_weight'];
        $data['cate_id'] = $_POST['cate_id'];
        $data['prd_img'] = $imgload;
        $this->product::insert($data);
    }

    public function editproduct()
    {
        $id = $_GET['id'];
        $prduct = $this->product::where('id', $id)->first();
        $cate = $this->cate::all();

        return $this->View('products/editproduct', ['prd' => $prduct, 'cate' => $cate], "admin");
    }
    public function getupdate()
    {
        $now = date('Y-m-d H:i:s');



        $id_prd = $_GET["id"];
        // $get_prd = $this->product::where('id',$id)->first();
        // $prdvalue = $get_prd->getAttributes();
        $data = array();
        if (isset($_FILES['imgput'])) {
            $imgput = basename($_FILES['imgput']['name']);
            $target_dir = "./public/uploadfiles/";
            $target_file = $target_dir . $imgput;
            move_uploaded_file($_FILES["imgput"]["tmp_name"], $target_file);
            var_dump($imgput);
        } else {
            $imgput = null;
        }

        $data['prd_name'] = $_POST['prd_name'];
        $data['prd_price'] = $_POST['prd_price'];
        $data['prd_quantity'] = $_POST['prd_quantity'];
        $data['prd_type'] = $_POST['status'];
        $data['cate_id'] = $_POST['cate_id'];
        $data['prd_img'] = $imgput;
        echo $imgput;

        $this->product::where('id', $id_prd)->update($data);
        header('location:./productlist');
    }

    public function deleteproducts()
    {
        //code to delete
    }
}
