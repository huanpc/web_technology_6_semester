<?php namespace App\models;
use App\models\Category;
use App\models\Category_lv2;
use App\models\Users;
/*
	Thao tac vs bang tin rao vat
*/
class Post extends MyModel{
	protected $table="posts";	
	protected $primaryKey = 'post_id';	
	protected $fillable = ['category_id','category_id2','user_id','title','price','description','image','phone','address','location','priority','view_count','score'];
	protected $created_at='';
	protected $updated_at='';
		
	public static function getInstance(){
		if(empty(self::$instance))
			self::$instance = new self();
		return self::$instance;
	}	
	/**
	*	Lay thong tin bai dang
	*	@var string post_id
	*	@return array
	*/
	public static function getPostDetail($post_id){		
		$result=self::where('post_id','=',$post_id)
					 ->first();
		if(isset($result)){
				$temp = Category::getItemInfor($result["category_id"]);						
				$temp = $temp["view_count"]+1;
				$array = array ("view_count"=>$temp);
				Category:: updateCategory($result["category_id"],$array);
				$temp=(Users::getInformation(['param1'=>'user_id','param2'=>$result['user_id']]));
				$result['user_id']=$temp['full_name'];
				$temp=(Category::getItemInfor($result['category_id']));
				$result['category_id']=$temp['name'];
				$temp=(Category_lv2::getItemInfor($result['category_id2']));
				$result['category_id2']=$temp['name'];
				return  $result->toArray();
		}
		else 
			return null;
	}

	/**
	*	Lay thong tin cua N bai dang	
	*	@var integer numOfPost: so bai dang can lay, neu =null lay tat ca bai dang
	*	@return array
	*/
	public static function getNumberPostDetail($numOfPost){
		if($numOfPost=null)
			$result=self::get();
		else		
			$result=self::take($numOfPost)->get();
		if(isset($result))						
			return  $result->toArray();
		else 
			return null;
	}
	/**
	*	Lay thong tin cua N bai dang theo thu tu uu tien 
	*	@var integer numOfPost: so bai dang can lay, neu numOfPost=null lay tat ca bai dang
	*	@var array string orderBy: sap xep theo dieu kien nao do
	*	@return array
	*/
	public static function getOrderNumberPostDetail($cate_1,$cate_2 = NULL,$numOfPost,$orderBy){		
		if($cate_2!=null){
				if($numOfPost=null)
					$result=self::where("category_id","=",$cate_1)->where("category_id2", '=', $cate_2)->orderBy($orderBy['what'],$orderBy['how'])->get();
				else		
					$result=self::where("category_id","=",$cate_1)->where("category_id2", '=', $cate_2)->orderBy($orderBy['what'],$orderBy['how'])->take($numOfPost)->get();
		}
		else{
			if($numOfPost=null)
				$result=self::where("category_id","=",$cate_1)->orderBy($orderBy['what'],$orderBy['how'])->get();
			else		
				$result=self::where("category_id","=",$cate_1)->orderBy($orderBy['what'],$orderBy['how'])->take($numOfPost)->get();
		}
		if(isset($result)){						
			
			foreach ($result as $index => $item) {
				$temp=(Users::getInformation(['param1'=>'user_id','param2'=>$item['user_id']]));
				$item['user_id']=$temp['full_name'];
				$temp=(Category::getItemInfor($item['category_id']));
				$item['category_id']=$temp['name'];
				$temp=(Category_lv2::getItemInfor($item['category_id2']));
				$item['category_id2']=$temp['name'];
			}
			return  $result->toArray();
		}
		else 
			return null;
	}

	/**
	*	Lay bai dang theo user
	*	@var string user_id
	*	@return array 2-D
	*/		
	public static function getUserPost($user_id){
		$result = self::where("user_id","=",$user_id)->get();
		if(isset($result)){
			foreach ($result as $index => $item) {
				$temp=(Users::getInformation(['param1'=>'user_id','param2'=>$item['user_id']]));
				$item['user_id']=$temp['full_name'];
				$temp=(Category::getItemInfor($item['category_id']));
				$item['category_id']=$temp['name'];
				$temp=(Category_lv2::getItemInfor($item['category_id2']));
				$item['category_id2']=$temp['name'];
			}
			return $result->toArray();
		}
		else
			return null;

	}
	/**
	*	Tao bai dang moi
	*	@var string array: lay tu input form
	*	@return boolean
	*/		
	public static function makePost($array){
		if(!isset($array))
			return false;
		try{
			$user=self::create(
				[
						'category_id'=>$array['category_id'],
						'category_id2'=>$array['category_id2'],
						'user_id'=>$array['user_id'],
						'title'=>$array['title'],
						'price'=>$array['price'],
						'description'=>$array['description'],
						'image'=>$array['image'],
						'phone'=>$array['phone'],
						'priority'=>$array['priority'],
						'address'=>$array['address'],
						'location'=>$array['location']
				]);
		}catch(QueryException $e){
			return false;
		}
		if(isset($user))
			return true;
		else 
			return false;
	}
	/**
	*	Cap nhat thong tin bai dang
	*	@var string post_id
	*	@var string array 
	*	@return boolean
	*/
	public static function updatePost($post_id,$array){
		$result=self::where('post_id','=',$post_id)->update($array);		
		if($result>0)
			return true;
		else 
			return false;
	}
	/**
	*	Xoa bai dang
	*	@var string post_id	
	*	@return boolean
	*/
	public static function deletePost($post_id){
		$result=self::where('post_id','=',$post_id)->delete();
		if($result>0)
			return true;
		else
			return false;
	}
}