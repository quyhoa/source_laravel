<?php

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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//register restfull
Route::resource('photo','PhotoController');

//api restfull
// Route::group(['middlewareGroups' => ['api']], function(){
// 	Route::get('api/news/{id?}', ['middleware' => 'auth.basic', function($id = null) {
// 	if ($id == null) {
// 		$news = App\News::all(array('id', 'name'));
// 	} else {
// 		$news = App\News::find($id, array('id', 'name'));
// 	}
// 		return Response::json(array(
// 		'error' => false,
// 		'news' => $news,
// 		'status_code' => 200
// 		));
// 	}]);
// });
// 
Route::group(['middleware' => ['auth']], function () {
	Route::get('test',function(){
		dd(Auth::user());
		echo 'quyhoa';
	});
	Route::get('/','UsersController@index');
	// Route::get('/','NewsController@index');
	Route::get('show/{id}','UsersController@show');
	Route::get('delete/{id}',function($id){
		App\News::destroy($id);
		return redirect('show/'.session('admin'));
	});	 
	Route::get('demo/{id}','NewsController@demo');
    Route::get('form/layout','NewsController@add');
	Route::post('form/addNews',['as'=>'addNews','uses'=>'NewsController@add']);
	Route::get('view/{id}','NewsController@view');
});
// 

Route::get('thongin/{ten}/{tuoi}',function($ten,$tuoi){
	echo 'My name is '.$ten.".I'm ".$tuoi.' old';
})->where(['tuoi'=>'[0-9]+']);
// url has prefix is create
Route::group(['prefix'=>'test'],function(){
	Route::get('tin-tuc',function(){
		echo 'Đây là trang tin tức';
	});
	Route::get('thanh-vien',function(){
		echo 'Đây là trang thành viên';
	});
	Route::get('get-url',function(){
		return asset('/css/demo.xml',true);
	});
	// true useing for https:\\
	Route::get('to',function(){
		return URL::to('baiviet',['thamso1','thamso2'],true);
	});
	// 
	// Route::get('create/{ten_bang}',function($ten_bang){
	// 	Schema::create($ten_bang,function($table){
	// 		$table->increments('id');
	// 		$table->string('ten mon hoc');
	// 		$table->integer('hoc phi');
	// 		$table->text('mo ta');
	// 		$table->timestamps();
	// 	});
	// });
	Route::get('change-col',function(){
		// echo 'ok';
		Schema::table('product',function($table){
			$table->string('name',100)->change();
		});
	});
	// create table category
	Route::get('create/cate',function(){
		Schema::create('category',function($table){
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
	});
	// create table product
	Route::get('create/product',function(){
		Schema::create('product',function($table){
			$table->increments('id');
			$table->string('name');
			$table->integer('price');
			$table->integer('cate_id')->unsigned();
			// onDelete('cascade') do delete all and foreign if need
			$table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');
			$table->timestamps();
		});
	});

});
Route::group(['namespace' => 'Admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['namespace' => 'User'], function() {
       // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
       // code in here
    });
});
// do work with buil query
Route::get('query/select-all',function(){
	$test = DB::table('category')->get();
	echo "<pre>";
	print_r($test);
});
Route::get('query/join',function(){
	$test = DB::table('category')
		->join('product',function($join){
			$join->on('category.id','=','product.cate_id');
		})
		->get();
	echo "<pre>";
	print_r($test);
});
// do work with model
Route::get('model/raw',function(){
	$data = App\product::whereRaw('name = ? and id = ?',['ao balo',3])->get()->toArray();
	echo "<pre>";
	print_r($data);
});
Route::get('model/insert',function(){
	$data = new App\Product;
	$data->name = 'ao thun';
	$data->price = 1000000000;
	$data->cate_id = 1;
	$data->save();
});
Route::get('model/create',function(){
	$data = [
		'name'		=>'Ao thun 2 lop',
		'price'		=>'500000',
		'cate_id'	=>1
	];
	App\Product::create($data);
});
Route::get('model/update',function(){
	$product = App\Product::find(1);
	$product->price = 1;
	$product->save();
});
Route::get('model/destroy/{id}',function($id){
	App\Product::destroy($id);
});
Route::get('model/hasMany',function(){
	$data = App\News::find(1)->images->toArray();
	dd($data);
});
Route::get('form/layout',function (){
	return view('form.layout');
});
// Route::post('form/addNews',['as'=>'addNews','uses'=>'NewsController@add']);

// Route::put('user/{id}', 'UserController@update');


Route::get('reponse/demo',['as'=>'resdemo',function(){
	return view('user.demo');
}]);
Route::get('reponse/back',function(){
	return redirect()->route('resdemo')->with([
		'level'=>'info',
		'message'=>'Đây là thông báo mới'
	]);
});

Route::get('reponse/download',function(){
	$url = 'public/download/demodownload.zip';
	return Response::download($url);
});

Route::get('response/macro',function(){
	return response()->test('demo but chi gho');
});


Route::any('{all}','WelcomeController@index')->where('all','(.*)');