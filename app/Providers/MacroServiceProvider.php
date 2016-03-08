<?php namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Response;//add my chosse
class MacroServiceProvider extends ServiceProvider {
	public function boot()
	{
		//add name macro 
		Response::macro('test',function($value){
			return Response::make(strtoupper($value));
		});
	}
	public function register()
	{
		//
	}
}
