<?php namespace App\Http\Controllers\Member;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\models\Post;
use App\models\Category;
use App\models\Image;
use App\models\Users;
use App\models\Category_lv2;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller{
	private $model;
	public function __construct(){
		$this->model = Post::getInstance();		
	}
	public function index(){

	}
	public function create(){		
		$categoryList = Category::getAllItem();
		$categoryLv2List = json_encode(category_lv2::getAllItem());
		return view("member.new-post.new-post",['categoryList'=>$categoryList,'categoryLv2List'=>$categoryLv2List]);
	}
	
	public function store(){		
		$temp=Category_lv2::getItemInfor(Input::get("category_id2"));			
		$category_id = $temp["parent_id"];
		$user = Session::get('user_info');
		$user_id = $user['user_id'];
		$post_count = $user['post_count']+1;
		$target_file = ImageController::uploadImage("image");				
		if(Session::has("imageMessage"))
			echo Session::get("imageMessage");
		$array=array(
			'category_id' =>$category_id ,
			'category_id2' =>Input::get("category_id2") ,
			'user_id' =>$user_id,
			'title' =>Input::get("title"),
			'price' =>Input::get("price"),
			'description' =>Input::get("description"),
			'image' =>$target_file,
			'phone' =>Input::get("phone"),
			'priority' =>Input::get("priority"),
			'address' =>Input::get("address"),
			'location' =>Input::get("location")
			 )	;
		//store to database	
		if($this->model->makePost($array)){
			Users::updateUserInfor($user_id,array("post_count"=>$post_count));
			return Redirect::to('member/post/create');
		}
		else
			echo "Error";
	}
	public function delete($post_id){
		if($post_id!="all")
			{$this->model->deletePost($post_id);
			return Redirect::to("member/post/show");}
		else
			{$this->model->find(1)->delete();
				Redirect::to("user");
			}
		
	}
	public function getCategoryLv2(){
		return json_encode(Category_lv2::getAllItem());
	}
}