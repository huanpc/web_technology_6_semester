<?php namespace App\Http\Controllers\Member;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\models\Users;
use App\models\Post;

class MemberController extends Controller{	
	private $model;
	public function __construct(){		
		$this->model = Users::getInstance();
	}	
	public function getIndex(){

	}
	public function getEditProfile(){
		return view("member.edit-profile",["user_info"=>Session::get('user_info')]);
	}
	public function postEditProfile(){
		$editMessage = "";
		$imageFilePath = ImageController::uploadImage("avatar");
		$rules = array("full_name"=>"required|min:3|max:32","phone"=>"numeric|min:11");
		if(Validator::make(Input::all(),$rules)->fails())
		{
			$editMessage="Validate false";
			Session::put("editMessage",$editMessage);
			return $editMessage;
		}
		$arrayUpdate=array('full_name'=>Input::get("full_name"),'phone'=>Input::get("phone"),
							'address'=>Input::get("address"),'avatar'=>$imageFilePath);
		if($this->model->updateUserInfor(Input::get("user_id"),$arrayUpdate)){
			$userInfor = Users::getInformation(['param1'=>'user_id','param2'=>Input::get("user_id")]);
			Session::put("user_info",$userInfor);
			return Redirect::to("member/edit-profile");
		}
		else{			
			$editMessage="Update database error!";
			Session::put("editMessage",$editMessage);
			return $editMessage;
		}	
	}
	public function show(){
		$result ="";
		$user = Session::get('user_info');
		$user_id = $user['user_id'];
		$result = Post::getUserPost($user_id);
		if(!empty($result))
			return view("member.show-post",["user_info"=>Session::get('user_info'),"post_list"=>$result]);
		else
			return view("member.show-post",["user_info"=>Session::get('user_info'),"post_list"=>""]);;
	}
}