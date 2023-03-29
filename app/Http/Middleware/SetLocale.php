<?php

namespace App\Http\Middleware;

use Agent;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;

class SetLocale
{
    /**
     * 变更语言
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('locale')) {
            app()->setLocale(Session::get('locale'));
        } elseif ($request->query('locale')) {
            Session::put('locale', $request->query('locale'));
            app()->setLocale($request->query('locale'));
        } elseif (Agent::languages()) {
            $result = array_intersect(str_replace('-', '_', Agent::languages()), array_map('strtolower', array_keys(config('common.language'))));

            if ($result) {
                Session::put('locale', array_values($result)[0]);
                App::setLocale(array_values($result)[0]);
            }
        }

        return $next($request);
    }
}
