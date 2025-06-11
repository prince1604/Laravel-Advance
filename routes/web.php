<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DeviceController;




// use Illuminate\Support\Str;
// $info="hi, let's learn laravel";
// // $info=Str::ucfirst($info);
// // $info=Str::replaceFirst("Hi","Hello",$info);
// // $info=Str::camel($info);    // camle case (space remove thai jaay )
// echo $info;

// $info=Str::of($info)->ucfirst($info)->replaceFirst("Hi","Hello",$info);    // fluent string 


Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');


Route::view('home','home');

Route::view('login','login');
          
Route::view('admin','admin');

// Route::get('list',[StudentController::class,'list']);

Route::get('save',[StudentController::class,'save']);

Route::post('/save', [App\Http\Controllers\StudentController::class, 'save']);

Route::get('list',[SellerController::class,'list']);

Route::get('/many-Rel',[SellerController::class,'manyrel']);

Route::get('many-To-One',[SellerController::class,'manyToOne']);

// Route::get('sendEmail',[MailController::class,'sendEmail']);

Route::post('/send-Email',[MailController::class,'sendEmail']);
Route::view('/send-Email','send-Email');


Route::get('device/{key:member_id}',[DeviceController::class,'index']);