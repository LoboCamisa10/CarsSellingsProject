<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\OperationsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;

Route::get('/', function () {

    // Consegue pegar as info da route mais facil pelo route(name:), mas não é a rota real
    $login = route('login'); 
    dump($login);
    
    return Inertia::render('Welcome');
})->name('home');


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::view('/about', view:'about');


// Route::get("{lang}/product/{id}/review/{reviewID}", function (string $lang, string $id, string $reviewID) {
//     return "Language $lang <br>
//     Product ID = $id <br>
//     reviewID = $reviewID";

// })->whereAlpha("lang")
// ->whereIn("lang", ["en", "br", "jp"])
// ->whereNumber("id")
// ->whereAlphaNumeric("reviewID");


// Route::get("/product/{id?}", function (string $id = null){
//     return "Product ID = $id";
// })-> whereNumber("id");


// Route::get("/user/{username}", function(string $username){
//     return "username = $username";
// })->whereAlphaNumeric("username")
// ->name("login");


// Route::get("/challenge/{id}/{age}", function (int $id = 0, int $age = 0) {
//     $sum = $id + $age;
//     return "A soma é: ". $sum;
// })->whereNumber(["id","age"]);


// Route::controller(OperationsController::class)->group(function(){
//     Route::get('/sum/{num1}/{num2}',  'sum')->whereNumber(['num1', 'num2']);
//     Route::get('/subtract/{num1}/{num2}', 'subtract')->whereNumber(['num1', 'num2']);
// });


// Route::get('/welcome', [HelloController::class,'welcome']);


// Route::fallback(function () {
//     return "Algo errado";
// });


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
