<?php namespace App\Http\Middleware;

use Closure;

class Mymiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// handler code here
		return $next($request);
	}

}
