<?php

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


//tasks 1.01-1.20

// Route::get('/test', function () {
//     return 'какое-нибудь сообщение';
// });
// Route::get('/dir/test', function () {
//     return 'какое-нибудь сообщение2';
// });
// Route::get('/user/{name}', function ($name): string {
//     return 'имя: ' . $name;
// });
// Route::get('/user/{surname}/{name}', function ($surname, $name): string {
//     return 'Имя: ' . $name . 'Фамилия: ' . $surname;
// });
// Route::get('/city/{city?}', function ($city = 'minsk'): string {
//     return 'город: ' . $city;
// });
// Route::get('/user/{id}', function (int $id) {
//     return 'число: ' . $id;
// });
// Route::get('/user/{id}/{name}', function (int $id, string $name) {
//     return 'число: ' . $id . '<br>' . 'Имя: ' . $name;
// })->where('name', '[a-z]{3,}');
// Route::get('/posts/{date}', function ($date) {
//     return 'дата: ' . $date;
// })->where('date', '[0-9-]{10}');
// Route::get('/{year}/{month}/{day}', function (int $year, int $month, int $day) {
//     return 'дата: ' . $year . '-' . $month . '-' . $day;
// })->where('year', '[0-9]{4}')->where('month', '[0-9]{2}')->where('day', '[0-9]{2}');
// Route::get('/users/{order}', function ($surname) {
//     return 'значение: ' . $surname;
// });
// Route::get('/user/{id}', function ($id) {
//     return 'число: ' . $id;
// })->whereNumber('id');
// Route::get('/city/{name}', function ($name): string {
//     return 'имя: ' . $name;
// });
// Route::get('/user/{id}', function ($id) {
//     return 'число: ' . $id;
// })->where('id', '[0-9]');
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'число: ' . $id . '<br>' . 'Имя: ' . $name;
// })->where('id', '[0-9]+')->where('name', '[a-z]{3,}');
// Route::get('/articles/{date}', function ($date) {
//     return 'дата: ' . $date;
// })->where('date', '[0-9-]{10}');
// Route::get('/users/{order}', function ($age) {
//     return 'возраст: ' . $age;
// })->where('date', '[0-9]{1,3}');

// Route::get('/{year}/{month}/{day}', function (int $year, int $month, int $day){
//     return date('l', strtotime("$year-$month-$day"));
// })->where('year', '[0-9]{4}')->where('month', '[0-9]{2}')->where('day', '[0-9]{2}');


//tasks 2.01-2.12

use App\Http\Controllers\UserController;
Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all', [UserController::class, 'all']);
// пишем в консольку 'php artisan make:controller ArticleController'(^Д^)
// теперь 'php artisan make:controller CategoryController'
Route::get('/user/{name}', [UserController::class, 'show']);
Route::get('/user/{surname}/{name}', [UserController::class, 'all']);
Route::get('/city/{id}', [UserController::class, 'cities']);


use App\Http\Controllers\TypeController;
Route::get('/pages/show/{id}', [TypeController::class, 'showOne'])->where('id', '[0-9-]{1,20}');
Route::get('/pages/all', [TypeController::class, 'showAll']);


use App\Http\Controllers\TestController;
Route::get('/test/sum/{sum1}/{sum2}', [TestController::class, 'sum'])->where('id', '[0-9-]{1,20}');

//tasks 3.01-3.11
Route::get('/pages/view', [TypeController::class, 'show']);
Route::get('/pages/view2', [TypeController::class, 'all']);
Route::get('/pages/view3', [TypeController::class, 'show52']);

Route::get('/pages/blade', [TypeController::class, 'bl']);