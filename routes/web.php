<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;

Route::middleware([LogRequests::class])->group(function () {

        Route::get('/', function () {
            return view('landing');
        });

        Route::post('/validate-age', function (Request $request) {
            // Validate the age input
            $request->validate([
                'age' => 'required|integer|min:1',
            ]);

            // Store age in the session
            $request->session()->put('age', $request->age);

            // Redirect to the protected welcome page
            return redirect('/welcome');
        });

        // Route for "Access Denied" page
        Route::get('/access-denied', function () {
            return view('access-denied');
        });

        // Route with default age restriction (18 years old)
        Route::middleware(['checkAge:18'])->group(function () {
            Route::get('welcome', function () {
                return view('welcome');
            });

            Route::get('dashboard', function () {
                return view('dashboard');
            });
        });

        // New route with a stricter age restriction (21 years old)
        Route::middleware(['checkAge:21'])->group(function () {
            Route::get('content', function () {
                return view('content');
            });
        });

});