<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\models\Post;
class DashboardController extends Controller {		
	public function __construct(){
		$this->model = Post::getInstance();
	}
	public function index(){
		$s= array("what"=>"view_count","how"=>"desc" );
		$productList = $this->model->getOrderNumberPostDetail(null,$s);	
		return view("dashboard",["productList"=>$productList]);
	}
}
