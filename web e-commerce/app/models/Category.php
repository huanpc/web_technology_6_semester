<?php namespace App\models;
/*
	Thao tac vs bang danh muc level1
*/

class Category extends MyModel{

	protected $table="category";
	protected $primaryKey = 'category_id';
	public static function getInstance(){
		if(empty(self::$instance))
			self::$instance = new self();
		return self::$instance;
	}	

	/** 
	*	Ham lay ban 1 ghi trong bang category
	*	@var string category_id
	*	@return array {name,created,modified}
	*/
	public static function getItemInfor($category_id){
		$result=Category::where('category_id','=',$category_id)->first();
		if(isset($result))						
			return  $result->toArray();
		else return null;
	}
	/** 
	*	Ham lay tat ca ban ghi trong bang category	
	*	@return array {name,created,modified}
	*/
	public static function getAllItem(){
		return Category::get()->toArray();
	}
	/** 
	*	Them category
	*	@var string name
	*	@return boolean
	*/
	public static function addCategory($name){
		$result=Category::create(['name'=>$name]);
		if(isset($result))
			return true;
		else
			return false;
	}
	/** 
	*	Sua 1 category
	*	@var string category_id
	*	@return boolean
	*/
	public static function renameCategory($category_id,$name){
		$result=Category::where('category_id','=',$category_id)->update($name);	
		if($result>0)
			return true;
		else 
			return false;
	}
	public static function updateCategory($category_id,$array){
		$result=self::where('category_id','=',$category_id)->update($array);		
		if($result>0)
			return true;
		else 
			return false;
	}
	public static function getAllItemOrdered(){
		return Category::orderBy("view_count","desc")->take(6)->get()->toArray();		
	}
}