<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\models\Users;

class AccountController extends Controller{
	private $model;
	public $restful = true;
	
	public function __construct(){		
		$this->model =Users::getInstance();
		if(!$this->isAdmin())
			return Redirect::to("logout");		
	}

	public  function getIndex(){						
		$result=$this->model->getAllUserInformation(0);
		return view("admin.index",['userList'=>$result]);		
	}
	/**
	 *	Check admin
	 */
	private function isAdmin(){
		if(Session::get("logined")&&Session::get("admin"))
			return true;
		else 
			return false;
	}
	/**
	*
	*
	*/
	public function getEdit($user_id){				
		$user = $this->model->getInformation(['param1'=>'user_id','param2'=>$user_id]);
		return view("user.edit")->with('userInfo',$user);
	}
	
	/**
	*
	*
	*/
	public function getDelete($user_id){
		if($user_id!="all")
			$this->model->deleteUser($user_id);
		else
			$this->model->find(1)->delete();
		return Redirect::to('user');		
	}
	/**
	*
	*
	*/
	//Use ajax here!
	public function postEdit($user_id){
		$arrayUpdate=array('full_name'=>Input::get("full_name"),
							'phone'=>Input::get("phone"),'address'=>Input::get("address"),
							'avatar'=>Input::get("avatar"),'user_type'=>Input::get("user_type"),
							'status'=>Input::get("status"),'post_count'=>Input::get("post_count"));	
		if($this->model->updateUserInfor($userId,$arrayUpdate))
			return Redirect::to("user");
		else
			echo "Them loi";
		}
}