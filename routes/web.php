<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Routes;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
 | Credential routes
 */
Auth::routes(["verify" => true]);

Route::get("/", function () {
    return view("index");
});

/** Loggedin through navbar form */
Route::post("/navlogin", function() {
    $validator = Validator::make(request()->all(), [
        "email"    => "required|email|string|exists:users,email",
        "password" => "required|string"
    ]);

    /* ======= VALIDATE =======|
     * ========================|*/
    if ($validator->fails())
    return redirect()
        ->to("/login")
        ->withInput(request()->all())->withErrors($validator->messages());

    /* ======= ATTEMPT ========|
     * ========================|*/
    if (!(Auth::attempt(request()->except("_token"))))
    return redirect()
        ->to("/login")
        ->withInput(request()->all())->withErrors([
            "email"    => [trans("auth.failed"  )],
            "password" => [trans("auth.password")],
    ]);

    /* ======= SUCCESS ========|
     * ========================|*/
    return redirect()->intended("/login");
})->name("navlogin");







/** =============================================================== */

/*
 | App operation routes
 */
Route::get("/home", [App\Http\Controllers\HomeController::class, "index"])
->middleware(["auth", "verified"])
->name("home");

