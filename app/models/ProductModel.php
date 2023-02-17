<?php 
use Illuminate\Database\Eloquent\Model as Model;

class ProductModel extends Model{
    public $table = 'products';
    public  $timestamp = false;
    public $filltable = ['name'];
}