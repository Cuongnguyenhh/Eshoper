<?php 
use Illuminate\Database\Eloquent\Model as Model;
class UserModel extends Model{
    public $table = 'users';
    public $timestap = false;
    public $filltable = ['name'];
}