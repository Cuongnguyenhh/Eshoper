<?php

namespace larava\controllers;

use larava\core\Controller;

class CartController extends Controller
{

    public $order;
    public $product;
    public $categories;
    public function __construct()
    {
        $this->categories = $this->Model('CategoryModel');
        $this->product = $this->Model('ProductModel');
        $this->order = $this->Model('OderModel');
    }

    public function index()
    {
        return $this->View('/card/card', "", "loginlayout");
    }

    public function addcart()
    {
        $idprd = $_GET['id'];

        $prd =  $this->product::all()->where('id', $idprd)->first();
        $product = $prd->getAttributes();

        // echo $product['prd_price'];
        $_SESSION['card'][$idprd] = $product;
        return $this->View('/card/card', ['prd' => $product], 'loginlayout');
        header('location:./home');
    }
    public function delcart()
    {
        $prdid = $_GET['id'];
        unset($_SESSION['card'][$prdid]);
        return $this->View('/card/card', '', 'loginlayout');
    }
    public function checkout()
    {
        // echo "hoho";
        // var_dump($_POST);
        if (isset($_SESSION['login'])) {
            return $this->View('/card/checkout', '', 'loginlayout');
        } else {
            $_SESSION['message'] = "Please Login to continute";
            return $this->View('/home/login', '', 'loginlayout');
        }
    }
    public function addorder()
    {
        //   var_dump($_POST);
        // echo '<pre>';
        // var_dump($_SESSION['card']);
        // echo '</pre>';
        $data = array();
        $cout = 1;
        foreach ($_SESSION['card'] as $card) {
            // echo $card['prd_name'];
            $data['name'] = $card['prd_name'];
            $data['quan'] = $_POST["name.$cout"] = $cout;
            $this->order::insert($data);
            $cout++;
        }
    }
}
