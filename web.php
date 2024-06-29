<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;


// use App\Http\Controllers\PageController;
// use App\Http\Controllers\TestingController;
// use App\Http\Controllers\registerController;
// use App\Http\Controllers\ControllerOne;
// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\productController;
// use App\Http\Controllers\studentController;
// use App\Http\Controllers\registrationController;
// use App\Http\Controllers\CartController;
// use App\Http\Controllers\CartController;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormDataController;


use Illuminate\Http\Request;

// use App\Http\Controllers\UserController;

// routes/api.php






Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hell',[PageController::class,'showuser']);

// Route::get('/hello',[PageController::class,'showe'])->name('hello');
// Route::get('/hello/{id}',[PageController::class,'showme']);
// Route::get('/blog',[PageController::class,'showblog'])->name('blog');
// Route::get('/content',TestingController::class);

// Route::get('/array',[PageController::class,'array']);

// Route::get('/formm', function () {
//     return view('formm');
// });
// Route::post('/submit-form', function (Request $request) {
//     $name = $request->input('name');
//     $email = $request->input('email');
//     return "Submitted Data:<br>Name: $name <br>Email: $email";
// })->name('submit-form');


// Route::get('user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('user/store', [UserController::class, 'store'])->name('user.store');
// Route::get('/home',[registerController::class,'index']);

// Route::post('/showdata',[registerController::class,'Data']);


// Route::get('/one',[ControllerOne::class,'one']);
// Route::get('/two',[ControllerOne::class,'two']);
// Route::get('/home1',[PhotoController::class,'index']);
// Route::post('/show',[PhotoController::class,'create']);


// Route::get('/',[productController::class,'index']);
// Route::get('/create',[productController::class,'create']);
// Route::post('/create/product',[productController::class,'store']);
// Route::get('/display',[productController::class,'show']);
// Route::get('/btn',[ItemController::class,'btn']);
// Route::get('/click',[ItemController::class,'click']);
// Route::post('/save',[ItemController::class,'save']);
// Route::get('/btn',[studentController::class,'btn']);
// Route::get('/student',[studentController::class,'student']);
// Route::post('/save',[studentController::class,'save']);
// Route::get('/show',[studentController::class,'show']);
// Route::get('/n',[registrationController::class,'registration']);
// Route::post('/submit',[registrationController::class,'submit']);
// Route::get('/print',[registrationController::class,'print']);
// Route::get('js',function(){
//     return view('java');
// });
// Route::post('/delete/{$id}',[registrationController::class,'delete'])->name('del');

Route::post('/submit',[FormDataController::class,'store']);



// Route::get('/indexx', function () {
    // return view('index');
// });

// routes/api.php


// routes/web.php


// Route::post('/cart/add', [CartController::class, 'addToCart']);


Route::get('/homepage', function () {
        return view('index');
    });
    Route::get('/hi', function () {
        return view('hi');
    });

    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/menu', function () {
        return view('menu');
    });
    Route::get('/shop', function () {
        return view('shop');
    });
    Route::get('/contact', function () {
        return view('contact');
    });



    Route::get('/hello', [HelloController::class, 'showSignupForm']);
    Route::post('/signup', [HelloController::class, 'signup'])->name('signup');
    

// Route::get('/index', [AuthController::class, 'showSignupForm']);
// Route::post('/submit', [AuthController::class, 'signup']);



// Route::get('/submit',[registrationController::class,'submit']);
// Route::get('/print',[registrationController::class,'print']);




Route::get('/page', function () {
    return view('page');
});

 Route::post('/save-form-data',[FormDataController::class,'store'])->name('saveFormData');;

// Route::post('/save-form-data', 'FormDataController@store')->name('saveFormData');

