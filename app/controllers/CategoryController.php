<?php

namespace larava\controllers;

use larava\core\Controller;

class CategoryController extends Controller
{
    public $categories;
    public function __construct()
    {
        $this->categories = $this->Model('CategoryModel');
    }

    public function index()
    {
        $list = $this->categories::all();
        if (isset($_SESSION['login']) && $_SESSION['login']['type'] == 1) {
            return $this->View('admin/dashboard', ['list' => $list], 'admin');
        } else {
            $this->View("home/login", "", "loginlayout");
        }
    }

    public function addcategory()
    {
        if (isset($_SESSION['login']) && $_SESSION['login']['type'] == 1) {
            return $this->View('admin/addcate', '', 'admin');
        } else {
            $this->View("home/login", "", "loginlayout");
        }
    }

    public function getaddcategory()
    {
        $data = array();
        $data['cate_name'] = $_POST['cate_name'];
        $data['type'] = $_POST['type'];
        $data['status'] = $_POST['status'];
        $this->categories::insert($data);
        header('location:http://localhost/Eshoper/dashboard');
    }
    public function editcategory()
    {
        $id_cate = $_GET['id'];
        $category = $this->categories->where('id', $id_cate)->first();
        $thatcate = $category->getAttributes();


        return $this->View('admin/editcate', ['cate' => $category], 'admin');
    }

    public function geteditcate()
    {
        $id_cate = $_GET['id'];
        $data = array();
        $data['cate_name'] = $_POST['cate_name'];
        $data['type'] = $_POST['type'];
        $data['status'] = $_POST['status'];
        $this->categories::where('id', $id_cate)->update($data);
        header('location:http://localhost/Eshoper/dashboard');
    }
}
