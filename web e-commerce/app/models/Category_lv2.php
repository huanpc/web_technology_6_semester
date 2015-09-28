<?php namespace App\models;
/*
	Thao tac vs bang danh muc level2
*/
class Category_lv2 extends MyModel{

	protected $table="category_lv2";
	protected $primaryKey = 'id';
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
	public static function getItemInfor($id){
		$result=self::where('id','=',$id)->first();
		if(isset($result))						
			return  $result->toArray();
		else return null;
	}
	/** 
	*	Ham lay ban cac ban ghi cung parent_id trong bang category_lv1
	*	@var string parent_id
	*	@return array {name,created,modified}
	*/
	public static function getItemByPanrentId($parent_id){
		$result=self::where('parent_id','=',$parent_id)->get();
		if(isset($result))						
			return  $result->toArray();
		else 
			return "false";		
	}
	/** 
	*	Ham lay tat ca ban ghi trong bang category	
	*	@return array {name,created,modified}
	*/
	public static function getAllItem(){
		return self::get()->toArray();
	}
	/** 
	*	Them category
	*	@var string name
	*	@return boolean
	*/
	// public static function addCategory($name){
	// 	$result=self::create(['name'=>$name]);
	// 	if(isset($result))
	// 		return true;
	// 	else
	// 		return false;
	// }
	/** 
	*	Sua 1 category
	*	@var string category_id
	*	@return boolean
	*/
	public static function renameCategory($category_id,$name){
		$result=self::where('category_id','=',$category_id)->update($name);	
		if($result>0)
			return true;
		else 
			return false;
	}
}