<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\News;
use App\Http\Requests\NewsRequest;
class NewsController extends Controller {
	public function index()
	{
		// $listNews = News::all()->toArray();
		// dd($listNews);
		// return view('news.index',compact('listNews'));
		$test = new News();
		dd($test->test(5));
	}
	public function demo($id){
		// test session
		// $value = $request->session()->get('key');		
		$news = News::findOrFail($id)->toArray();
		// dd($news);
		// echo "<pre>";
		// print_r($news);
		// return view('form.layout',['news'=>'quyhoa']);
		// return view('form.layout')->withNews($news);
	}

	public function add(NewsRequest $requests){
		dd($requests);
		$infoImage = $requests->file('image');
		$des = 'public/files/images';//noi se luu
		$nameImage = $infoImage->getClientOriginalName();//ten anh se duoc luu
		$uploaded = $infoImage->move($des,$nameImage);//da luu thanh cong
		$news = new News();
		$news->name = $requests->name;
		$news->user_id = $requests->user_id;
		session(['admin' => $news->user_id]);
		$news->images = $nameImage;
		$news->description = trim($requests->description);
		$news->content = $requests->content;
		$news->save();
		return view('form.layout');
	}
	public function view($id){
		$detail = News::findOrFail($id)->toArray();
		return view('news.view')->withDetail($detail);
	}
}
