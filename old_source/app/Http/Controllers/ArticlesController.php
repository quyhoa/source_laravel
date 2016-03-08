<?php

namespace App\Http\Controllers;
use App\Articles;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckArticlesRequest;
class ArticlesController extends Controller
{
    public function index(){
	   $articles = Articles::all();
	   // echo "<pre>";
	   // var_dump($articles);
	   return view("articles.articles")->with("articles", $articles);
	}
	public function create(){
	   return view("articles.create");
	}
	public function store(CheckArticlesRequest $request){
		//Gọi model Articles.php đã được tạo ra ở các bài trước
		$articles = new Articles; 
		//Lấy thông tin từ các input đưa vào thuộc tính name, author
                //trong model Articles
		$dulieu_tu_input 	= $request->all();
		$articles->name 	= $dulieu_tu_input["name"];
		$articles->author 	= $dulieu_tu_input["author"]; 
		//Tiến hành lưu dữ liệu vào database
		$articles->save(); 
		//Sau khi đã lưu xong, tiến hành chuyển hướng tới route articles
        //hiển thị toàn bộ thông tin bảng articles trong database đã được tạo ở các bài trước
		return redirect('articles');
	}
}
