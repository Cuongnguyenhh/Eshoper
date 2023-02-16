<?php
use Illuminate\Database\Eloquent\Model as Model;
class CategoryModel extends Model {
    public $table="categorys";
	public $timestamps=false;
	public $fillable=['name'];
}
?>