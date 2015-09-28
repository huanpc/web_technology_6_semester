<?php
use App\models\Users;
use App\models\Post;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');
// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

// Route::get('/dang-nhap',function(){
// 	echo 'Day la trang dang nhap';
// });
// Route::get('/dinh-tuyen/{name}/{id}',function($name,$id)
// {
// 	echo 'Ban dang truy cap den trang '.$name.'va'.$id;
// })->where(array('name'=>'[a-z]+','id'=>'[0-9]+'));
Route::get('/',function(){
	return Redirect::to('home');
});


	

Route::filter("check-login",function(){
	if(!Session::has("logined"))
		return Redirect::to("login");
});
Route::filter("newSession",function(){		
	if(Session::has("admin"))
		Session::forget("admin");
	if(Session::has("logined"))
		Session::forget("logined");
	if(Session::has("email"))
		Session::forget("email");
	if(Session::has("user_info"))
		Session::forget("user_info");
});

Route::get("dashboard",'DashboardController@index');
Route::get("bai-dang/{post_id}",'HomeController@showPostDetail');
Route::group(array("prefix"=>"register"),function(){
	Route::get('',array("before"=>"newSession",'uses'=>'Auth\AuthController@registerIndex'));
	Route::post("",'Auth\AuthController@registerSubmit');
	Route::post("check-email",'Auth\AuthController@checkEmail');
});
Route::group(array("prefix"=>"login"),function(){
	Route::get("",array("before"=>"newSession", "uses"=>"Auth\AuthController@loginIndex"));
	Route::post("",'Auth\AuthController@loginSubmit');
});

Route::group(array("prefix"=>"member"),function(){
	Route::get("edit-profile",array("before"=>"check-login","uses"=>"Member\MemberController@getEditProfile"));
	Route::post("edit-profile",array("uses"=>"Member\MemberController@postEditProfile"));
});
Route::group(array("prefix"=>"user"),function(){
	Route::get("",array("uses"=>"Admin\AccountController@getIndex"));
	Route::get("{user_id}/edit",array("as"=>"user_edit","uses"=>"Admin\AccountController@getEdit"));
	Route::get("{user_id}/delete",array("uses"=>"Admin\AccountController@getDelete"));
	Route::post("{user_id}/edit",array("uses"=>"Admin\AccountController@postEdit"));
});
Route::group(array("prefix"=>"member/post"),function(){	
	Route::get("",array("before"=>"check-login","uses"=>"Member\PostController@index"));
	Route::get("create",array("before"=>"check-login","uses"=>"Member\PostController@create"));
	Route::get("show",array("before"=>"check-login","uses"=>"Member\MemberController@show"));
	Route::get("delete/{post_id}",array("uses"=>"Member\PostController@delete"));
	Route::post("create",array("uses"=>"Member\PostController@store"));
	Route::get("create/getCategoryLv2",array("uses"=>"Member\PostController@getCategoryLv2"));

});

Route::group(array("prefix"=>"home"),function(){	
	Route::get("",array("uses"=>"HomeController@index"));
	Route::get("/{cate_1}",array("uses"=>"HomeController@showPosts"));
	Route::get("/{cate_1}/{cate_2}",array("uses"=>"HomeController@showPosts"));
});

Route::get("logout",function(){
	Session::flush();	
	return Redirect::to("home");
});
Route::get("choose-location/{location}",function($location){
	switch ($location) {
		case 'ha-noi':
			$location="Hanoi";
			break;
		case 'hai-phong':
			$location="Haiphong";
			break;
		case 'da-nang':
			$location="Danang";
			break;
		case 'toan-quoc':
			$location="Toanquoc";
			break;	
		case 'ho-chi-minh':
			$location="Hochiminh";
			break;
		default:
			$location="Toanquoc";
			break;	
	}
	Session::put("location",$location);
	return Redirect("home");
});

Route::get("/encrypt/{pass}",function($pass){
	echo md5(sha1($pass));
});

Route::post("timkiem",function(){
	$location = Input::get("location");
	if($location=="Toan quoc")
		$location=" ";
	$kind = Input::get("the_loai");
	$value = Input::get("key");
	$result="";
	switch ($kind) {
			case '1':			
			$kind ="Tất cả";			
			$result=Post::where("location","LIKE","%$location%")->where("title", 'LIKE', "%$value%")->get()->toArray();
				break;
			case '2':		
			$kind ="Ô tô, xe máy";	
			$result=Post::where("location","LIKE","%$location%")->where("category_id", '=', "3")->where("title", 'LIKE', "%$value%")->get()->toArray();
				break;
			case '3':	
			$kind ="Nhà đất";	
			$result=Post::where("location","LIKE","%$location4")->where("category_id", '=', "1")->orWhere("category_id", '=', "2")->where("title", 'LIKE', "%$value%")->get()->toArray();
			break;			
			case '4':	
			$kind ="Điện thoại, Laptop";	
			$result=Post::where("location","LIKE","%$location%")->where("category_id2", '=', "16")->orWhere("category_id2", '=', "17")->where("title", 'LIKE', "%$value%")->get()->toArray();
			break;			
			default:				
				break;
	}
	if(!empty($result)){
		$count = count($result);
		return View::make("tim_kiem",array("result"=>$result,"count"=>$count,"kind"=>$kind,"key"=>$value));
	}
	else
		return View::make("tim_kiem",array("result"=>"","kind"=>$kind,"key"=>$value));


});
Route::get("/test/{name}/{value}",function($name,$value){
	print_r(Users::whereLike($name,$value));
});
Route::get("member/test2/{user_id}",function($user_id){
	foreach (Post::getUserPost($user_id) as $key => $value) {
		echo "<p>";
		print_r($value)	;
		echo "</p>";
	};
});

