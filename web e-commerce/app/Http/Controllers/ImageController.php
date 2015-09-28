<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\models\Users;
use App\models\Image;
define("DIR_IMAGE_FOLDER","assets/img/postImg/");
class ImageController extends Controller{
	// private $model;
	// public function __construct(){
	// 	$this->model = Image::getInstance();		
	// }

	public static function uploadImage($nameOfImageInput){
		$message = "";
		$target_dir = DIR_IMAGE_FOLDER;
		$imageId = Image::count()+1;
		$imageExt = substr($_FILES[$nameOfImageInput]["name"],-4);
		$target_file = $target_dir . basename($imageId.$imageExt);		
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES[$nameOfImageInput]["tmp_name"]);
		    if($check !== false) {		        
		        $uploadOk = 1;
		    } else {		        
		        $uploadOk = 0;
		    }
		}
		// Check file size
		if ($_FILES[$nameOfImageInput]["size"] > 500000) {
		    $message  = "Sorry, your file is too large.";
		    $uploadOk = 0;
		    echo "loi";
		    die();
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {		    
		    $uploadOk = 0;
			$message  = $message. "Not Image file type!";
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			Session::put("imageMessage",$message);
		    return "";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$nameOfImageInput]["tmp_name"], $target_file)) {
		    	Image::create(['id'=>$imageId,'path'=>$target_file]);
		    	echo("");
		        return $target_file;
		    } else {
		    	$message = $message."Cannot upload!";
		    	Session::put("imageMessage",$message);
		        return "";
		    }
		}
	}
}