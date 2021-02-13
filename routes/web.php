<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Models\Ip;



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

// Route::get('/', function () {
//     $ipAddress = $request->ip();
// $newIpAddress = new Ip;
// $newIpAddress->ip = $ipAddress;
// $newIpAddress->save();

//     return view('createpost');
// });
Route::get('/', [PostController::class, 'index']);



Route::post('/createpost', [PostController::class,'create']);

Route::get('/all-posts', [PostController::class, 'all']);
Route::get('/view-post/{id}', [PostController::class, 'view']);






