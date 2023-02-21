<?php
use Illuminate\Database\Eloquent\Model as Model;
class OderModel extends Model {
    public $table="order";
	public $timestamps=false;
	public $fillable=['name'];
}
?>