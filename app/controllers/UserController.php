<?php
namespace larava\controllers;
use larava\core\Controller;
use Illuminate\Contracts\Session\Session;
use larava\core\RedirectTrait;



class UserController extends Controller{
    public $user;   
    public function __construct(){
        $this->user=$this->Model('UserModel');
    }
    public function getsignin(){
        $data =array();
        $data['name'] = $_POST['name'];
        $data['password'] = $_POST['password'];
        $data['phone'] = $_POST['phone'];
        $this->user::insert($data);
        header("location:http://localhost/Eshoper/login");
        
    }
    public function getlogin(){
        $name = $_POST['name'];
        $password = $_POST['password'];
       $check = $this->user::where('name',$name)->where('password',$password)->first();
        if($check){
            $userinfo = $check->getAttributes();
            $_SESSION['login'] = $userinfo;

            if($_SESSION['login']['type'] == '0'){
                header("location:http://localhost/Eshoper/");
            }else{
                header("location:http://localhost/Eshoper/dashboard");

            }
        }else{
            $_SESSION['message']['login'] = 'Your username or password is incorrect';
            return $this->View("/home/login","","loginlayout");
        }
        
       
    }
    public function logout(){
        unset($_SESSION['login']);
        return $this->View('home/home');
    }

}