<?php

use App\Http\Controllers\ColorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

function getHex ($num) {
    $hash = hash("md5", $num, true);
    return substr(bin2hex($hash), 0, 6);
}

Route::get('/', [ColorController::class, 'index']);
