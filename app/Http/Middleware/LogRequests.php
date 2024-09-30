<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle(Request $request, Closure $next)
    {
        // Prepare the log data with the timestamp, HTTP method, and full URL
        $logData = sprintf(
            "[%s] Method: %s | URL: %s\n",
            now()->toDateTimeString(),
            $request->method(),
            $request->fullUrl()
        );
        
        // Append the log entry to log.txt
        file_put_contents(storage_path('logs/log.txt'), $logData, FILE_APPEND);
        
        // Proceed to the next middleware/request handler
        return $next($request);
    }
}
