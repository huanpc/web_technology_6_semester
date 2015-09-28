<?php namespace App\models;
use Illuminate\Database\Eloquent\Model;

abstract class MyModel extends Model{
	protected static $instance;		
	/*
	*
	*/	
	public static function whereLike($field, $value){
        return self::where($field, 'LIKE', "%$value%")->get()->toArray();

	}
	
}