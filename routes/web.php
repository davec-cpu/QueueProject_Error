<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\StudyController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route for mailing
Route::get('/email', function() {
    Mail::to('mymail@ddhh.com')->send(new WelcomeMail);
    return new WelcomeMail();
});

Route::get('/sendmailqueue', [EmailController::class, 'sendEmail']);

Route::get('/store-queue', [StudyController::class, 'storeQueue']);