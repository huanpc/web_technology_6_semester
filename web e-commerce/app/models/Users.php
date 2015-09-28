<?php namespace App\models;
use Illuminate\Support\Facades\Validator;
/*
	Thao tac vs bang tai khoan user
*/
class Users extends MyModel{
	protected $table = 'users';	
	protected $primaryKey = 'user_id';
	public $timestamps = "false";
	protected $full_name='';
	protected $created_at='';
	protected $updated_at='';
	protected $email='';
	protected $guarded=['user_id'];
	protected $hidden = ['password'];

	public static function getInstance(){
		if(empty(self::$instance))
			self::$instance = new self();
		return self::$instance;
	}	
	
	/**
	*	@var string email : email nguoi dung nhap tu form login
	*	@var string password: password nguoi dung nhap tu form dang nhap
	*	Ham kiem tra email va password khi nguoi dung login
	*/
	public static function checkLogin($email,$password){
		$array=array('user_input'=>$email);
		$rules=array('user_input'=>'email');
		if(Validator::make($array,$rules)->fails())
			return false;
		else
			$check=self::where("email","=",$email)->where("password","=",$password)->count();
		if($check>0)
			return true;
		else
			return false;
	}

	// public static function checkUserName($userName){}
	/** 
	*	Ham kiem tra email da ton tai trong CSDL chua trong form Register
	*	@var string email: email do nguoi dung nhap trong form Register
	*/
	public static function isExistedEmail($email){
		if(self::where("email","=",$email)->count()>0)
			return true;
		else 
			return false;
	}
	/**
	*	Lay thong tin nguoi dung ca nhan
	*	@var string $where->array('param1'=>'','param2'=>'') 
	*	@return array : mang thong tin nguoi dung
	*/
	public static function getInformation($where){
		$selectWhat=array('user_id','email','full_name','phone','address','avatar','user_type','status','score','post_count','created_at');
		$result=self::select($selectWhat)->where($where['param1'],'=',$where['param2'])
					 ->first();//->toArray();
		if(isset($result))						
			return  $result->toArray();
		else return null;
	}
	/**
	*	Lay thong tin tat ca nguoi dung
	*	@var string numOfuser 
	*	@return array : mang thong tin nguoi dung
	*/
	public static function getAllUserInformation($numOfuser){
		$selectWhat=array('user_id','email','full_name','phone','address','avatar','user_type','status','score','post_count','created_at');
		$result=self::select($selectWhat)->get();
		if(isset($result))						
			return  $result->toArray();
		else return null;
	}
	/**
	*	Lay thong tin bai dang cua nguoi dung
	*	@var string userId: 
	*	@return array : mang thong tin nguoi dung
	*/
	public static function getInvidualPost($userId){

	}
	/**
	*	Tao moi nguoi dung
	*	@var array: mang du lieu lay tu form dang ky
	*	@return boolean
	*/
	public static function createNewUser($array){
		if(!isset($array))
			return false;
		try{
			$user=self::create([
						'password'=>$array['password'],
						'full_name'=>$array['full_name'],
						'email'=>$array['email'],
						'phone'=>$array['phone'],
						'user_type'=>$array['user_type']
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
	*	Cap nhat thong tin nguoi dung
	*	@var string user_id: 
	*	@var array string : mang thong tin can thay doi vd: ("field1"=>"val1")
	* 	Note: k the thay doi user_id, full_name, email
	*	@return boolean
	*/
	public static function updateUserInfor($user_id,$array){
		$result=self::where('user_id','=',$user_id)->update($array);		
		if($result>0)
			return true;
		else 
			return false;
	}
	/**
	*	Xoa nguoi dung
	*	@var string user_id: 	
	*	@return boolean
	*/
	public static function deleteUser($user_id){
		$result=self::where('user_id','=',$user_id)->delete();
		if($result>0)
			return true;
		else
			return false;
	}

}