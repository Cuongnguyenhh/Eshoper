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
        $data['user_adr'] = $_POST['user_adr'];
       $list =$this->user::all();
       $cout = 0;
       foreach( $list as $list){
        $nameuser = $list->getAttributes();
            if($data['name']==$nameuser['name']){
                $cout ++;
                $_SESSION['siguplog'] = 'Name Account is already exists, please choose another name.';
                $create =false;
                header("location:./login");
                exit();
                break;
            }else{
                $cout = 0;
            }
       }
       echo $cout;
       if($cout==0){
        $this->user::insert($data);
        $_SESSION['siguplog'] = 'Create Susses! Please login';
        header("location:./login");
        exit();
       }
       
        
    }
    public function getlogin(){
        $name = $_POST['name'];
        $password = $_POST['password'];
       $check = $this->user::where('name',$name)->where('password',$password)->first();
        if($check){
            $userinfo = $check->getAttributes();
            $_SESSION['login'] = $userinfo;

            if($_SESSION['login']['type'] == '0'){
                header("location:./");
            }else{
                header("location:./dashboard");

            }
        }else{
            $_SESSION['message']['login'] = 'Your username or password is incorrect';
            header('Location:./login');
        }
        
       
    }
    public function logout(){
        unset($_SESSION['login']);
        header('Location:./home');
    }

}