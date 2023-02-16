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
        // foreach($list as  $colec){
        //     $all = $colec->getAttributes();
        //     echo "<pre>";
        //     print_r($all);
        //     echo "</pre>";
        // }   
        // return $this->View('admin/dashboard', $list,'admin');
        $test = 'This is a test';
        return $this->View('admin/dashboard',['list' => $list],'admin');
    }

    public function addcategory(){
        return $this->View('admin/addcate','','admin');
       
    }

    public function getaddcategory(){
        $data = array();
        $data['cate_name'] = $_POST['cate_name'];
        $data['type'] = $_POST['type'];
        $data['status'] = $_POST['status'];
        $this->categories::insert($data);
        header('location:http://localhost/Eshoper/dashboard');
    }
    public function editcategory(){
        $id_cate = $_GET['id'];
        $category = $this->categories->where('id', $id_cate)->first();
        $thatcate = $category->getAttributes();
     
        
        return $this->View('admin/editcate',['cate' => $category],'admin');
       
    }
        
    public function geteditcate(){
        $id_cate = $_GET['id'];
        $data = array();
        $data['cate_name'] = $_POST['cate_name'];
        $data['type'] = $_POST['type'];
        $data['status'] = $_POST['status'];
        $this->categories::where('id', $id_cate)->update($data);
        header('location:http://localhost/Eshoper/dashboard');
    }
        

  


    

    

    // public function addCate(){
    //     $name=isset($_POST['txtname'])?$_POST['txtname']:"";
    //     if($name!="")
    //     $this->categories::create([
    //         'name' => $name
    //     ]);
    //     header("location:/larava/category");
    // }

    // public function delCate(){
    //     $id=isset($_GET['id'])?$_GET['id']:"";
    //     if($id!="") $this->categories::where("id",$id)->delete();
    //     header("location:/larava/category");
    // }

    // public function editCate(){        
    //     $id=isset($_GET['id'])?$_GET['id']:"";
    //     if($id!=""){
    //         $cate=$this->categories::where("id",$id)->get();           
    //         $this->View("category/editcate",$cate);
    //     }        
    // }

    // public function updateCate(){
    //     $name=isset($_POST['txtname'])?$_POST['txtname']:"";
    //     $id=isset($_GET['id'])?$_GET['id']:"";
    //     if($name!="") 
    //         $this->categories::where("id",$id)->update([
    //             "name"=>$name
    //         ]);
    //     header("location:/larava/category");
    // }
}