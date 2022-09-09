<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){

        if(Auth::user()->admin=="1"){
            return $next($request);

        }
        else{
        return redirect('/home')->with('stutes',"your not admin");
        }
        }
        else{
            return redirect()->back()->with('stutes','please login firstly') ;
        }


    }
}
