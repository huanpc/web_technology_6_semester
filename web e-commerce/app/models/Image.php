<?php namespace App\models;

class Image extends MyModel{
	protected $table="image";	
	protected $primaryKey = 'id';
	protected $fillable = array('id', 'path');

	public static function getInstance(){
		if(empty(self::$instance))
			self::$instance = new self();
		return self::$instance;
	}	
}