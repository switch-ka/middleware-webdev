<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next, $minAge)
    {
        // Retrieve the age from the session
        $age = $request->session()->get('age');

        // If no age is set or the age is less than the minimum required, deny access
        if (is_null($age) || $age < $minAge) {
            return redirect('access-denied');
        }

        // If the age meets the requirement, proceed to the next middleware/request
        return $next($request);
    }
}
