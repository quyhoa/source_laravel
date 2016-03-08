<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Auth\AuthController;//my add

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	public function __construct()
	{
		// dd($request->session()->keep(['username', 'email']));
	}

}
