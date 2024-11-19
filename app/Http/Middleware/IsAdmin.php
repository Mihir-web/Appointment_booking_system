<?php
  
namespace App\Http\Middleware;
  
use Closure;
   
class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(isset(auth()->user()->is_admin) && auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        return redirect('/admin/login')->with('error',"You don't have admin access.");
    }
}