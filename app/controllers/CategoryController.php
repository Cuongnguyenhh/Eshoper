<?php
namespace larava\controllers;
use larava\core\Controller;
class CategoryController extends Controller{
    public $categories;   
    public function __construct(){
        $this->categories=$this->Model('CategoryModel');
    }

    public function index(){        
        $list=$this->categories::all();       
        $this->View("category/index",$list);
    }

    public function addCate(){
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        if($name!="")
        $this->categories::create([
            'name' => $name
        ]);
        header("location:/larava/category");
    }

    public function delCate(){
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!="") $this->categories::where("id",$id)->delete();
        header("location:/larava/category");
    }

    public function editCate(){        
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($id!=""){
            $cate=$this->categories::where("id",$id)->get();           
            $this->View("category/editcate",$cate);
        }        
    }

    public function updateCate(){
        $name=isset($_POST['txtname'])?$_POST['txtname']:"";
        $id=isset($_GET['id'])?$_GET['id']:"";
        if($name!="") 
            $this->categories::where("id",$id)->update([
                "name"=>$name
            ]);
        header("location:/larava/category");
    }
}