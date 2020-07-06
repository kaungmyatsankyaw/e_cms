<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Auth;
use Config;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $_user = Auth::user();

        $_roles = ['admin', 'shop_owner'];
        $_roles_count = count($_roles);
        for ($i = 0; $i <= $_roles_count; $i++) {
            if (in_array($_roles[$i], array_values($_user->getRoleNames()->toArray()))) {
                $_menu = Config::get('menu.' . $_roles[$i]);
                break;
            } else {
                return redirect('/')->with('error', "You don't have an access");
            }
        }


        /** @var TYPE_NAME $_menu */
        $request['menu'] = $_menu;

        return $next($request);
    }
}
