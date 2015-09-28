<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\models\Post;
use App\models\Category;
use App\models\Category_lv2;
class HomeController extends Controller {		
	public function __construct(){
		$this->model = Post::getInstance();
	}
	public function index(){	
		$categoryList = Category::getAllItemOrdered();	
		return view("home",["categoryList"=> $categoryList]);
	}
	public function showPosts($cate_1,$cate_2 = NULL){			
		$result = "";		
		$s= array("what"=>"updated_at","how"=>"desc" );
		$title="";
		switch ($cate_1) {
			case 'mua-ban-nha-dat':	$cate_1=1;	$title="Mua bán nhà đất"; break;
			case 'cho-thue-nha':	$cate_1=2;	$title="Thuê, cho thuê nhà"; break;
			case 'oto-xe-may':	$cate_1=3;	$title="Ô tô, xe máy"; break;
			case 'thoi-trang':	$cate_1=4;	$title="Thời trang"; break;
			case 'nha-vuon':	$cate_1=5;	$title="Nhà, vườn"; break;
			case 'dien-may':	$cate_1=6;	$title="Điện máy"; break;
			case 'dt-sim':	$cate_1=7;	$title="Điện thoại, chợ SIM"; break;
			case 'viec-lam':	$cate_1=8;	$title="Việc làm"; break;
			case 'dich-vu':	$cate_1=9;	$title="Dịch vụ"; break;
			case 'du-lich':	$cate_1=10;	$title="Du lịch"; break;
			default:	$cate_1=1;	break;						
		}		
		$category_lv2_array = Category_lv2::getItemByPanrentId($cate_1);		
		if($cate_2!=NULL){
			$result=$this->model->getOrderNumberPostDetail($cate_1,$cate_2,null,$s);
		}
		else{
			$result=$this->model->getOrderNumberPostDetail($cate_1,null,null,$s);
		}
		if(!empty($result))
			return view("list_post",["productList"=>$result,"title"=>$title,"category_lv2_array"=>$category_lv2_array, "cate_2"=>$cate_2]);
		else
			return view("list_post",["productList"=>"","title"=>$title,"category_lv2_array"=>$category_lv2_array,"cate_2"=>$cate_2 ]);
	}
	public function showPostDetail($post_id){		
		$postDetail = "";
		$postDetail = $this->model->getPostDetail($post_id);		
		if(!empty($postDetail))	{
			// tang bien dem so nguoi xem trong csdl
			$postDetail["view_count"] = $postDetail["view_count"]+1;
			$array=  array('view_count' => $postDetail["view_count"] );
			$this->model->updatePost($post_id,$array);
			return view("post_detail",["postDetail"=>$postDetail]);
		}
		else
			return view("post_detail",["postDetail"=>""]);

	}

}
