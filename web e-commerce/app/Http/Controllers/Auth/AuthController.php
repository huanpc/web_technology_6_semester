<?php namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\models\Users;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
define ('ADMIN','admin');
define ('ADMIN_PASSWORD','8843028fefce50a6de50acdf064ded27');
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{				
		$this->model = Users::getInstance(); 
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function registerIndex()
	{
		return view('register');
	}
	
	/**
	 *
	 *
	 */
	public function registerSubmit(){
		$rules=array(
		// "username"=>"required|min:3",
		"password"=>"required|min:6",
		"email"=>"required|email"
		);

		if(!Validator::make(Input::all(),$rules)->fails()){
			if(!Users::isExistedEmail(Input::get("email"))){
				$user=new Users();
				// $user->username=Input::get("username");
				$user->password=md5(sha1(Input::get("password")));
				$user->email=Input::get("email");
				$user->save();						
				Session::put("logined","true");
				Session::put("email",Input::get("email"));
				$userInfor = Users::getInformation(['param1'=>'email','param2'=>Input::get("email")]);
				Session::put("user_info",$userInfor);
				return Redirect::to("home");
			}else
				return "false";
		}
	}
	/**
	*
	*
	*/
	public function checkEmail(){
		if($this->model->isExistedEmail(Input::get("email")))
			return "false";
		else
			return "true";
	}
	/**
	 *
	 */	
	public function loginIndex(){
		return view('login');
	}
	//
	public function loginSubmit(){		
		$username  =	Input::get("user_input");	
		$pass = md5(sha1(Input::get("password_login")));
		if(($username==ADMIN)&&($pass=ADMIN_PASSWORD)){
			Session::put("logined","true");
			Session::put("admin","true");
			return Redirect::to("user");
		}
		if(Users::checkLogin($username,$pass))
		{
			Session::put("logined","true");
			Session::put("email",Input::get("user_input"));
			$userInfor = Users::getInformation(['param1'=>'email','param2'=>Input::get("user_input")]);
			Session::put("user_info",$userInfor);
			return Redirect::to("member/edit-profile");
		}
		else
			return view("login")->with("error_message","Ten dang nhap hoac mat khau khong dung");		
	}
}
