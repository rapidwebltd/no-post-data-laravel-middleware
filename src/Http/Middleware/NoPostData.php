<?php

namespace RapidWeb\NoPostDataLaravelMiddleware\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * This is the no post data middleware class.
 *
 * @author Jordan Hall <jordan.hall@rapidweb.biz>
 */
class NoPostData
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $errorMessage = config('nopostdata.errorMessage');

        if ($request->isMethod('post') && !count($request->all())) {
            return redirect()->back()->withInput()->withErrors(['no_post_data' => $errorMessage]);
        }

        return $next($request);
    }

}