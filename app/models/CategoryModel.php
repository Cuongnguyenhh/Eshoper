<?php
use Illuminate\Database\Eloquent\Model as Model;
class CategoryModel extends Model {
    public $table="category";
	public $timestamps=false;
	public $fillable=['name'];
}
?>