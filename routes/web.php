<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

// // View Route عرض الصفحه
// Route::view('hello', 'welcome');

// Route::view('hi', 'pages.hello');

// // Show User Data
// Route::get('/',function (){
//     $arr = [
//         'name' => 'Ahmed',
//         'age' => 20
//     ];

//     return view('welcome', ['data' => $arr]);
//     // return view('welcome', compact('data'));
// });

// // Named Route
// Route::get('/', function (){
//     return view('welcome');
// })->name('main');

// // Redirect Route إعادة توجيه
// Route::redirect('hello', 'hello2');
// Route::redirect('hello', Link);

// // Group - prefix سابق لاحق
// Route::prefix('admin')->group(function () {
//     Route::get('change-password', function () {
//         dd('Change Password');
//     });
    
//     Route::get('edit-user', function () {
//         dd('Edit User');
//     });
// });

// // Controller Route
// Route::get('greeting', [ArticleController::class, 'sayHello']);
// Route::get('all-articles', [ArticleController::class, 'index']);

// // Resource Route
// Route::resource('articles', ArticleController::class);
// Route::resource('user', UserController::class)->names(
//     [
//         'index' => 'user.all'
//     ]
// );

// // Dashboard
// Route::get('/ahmed', function () {
//     return view('dashboard.index');
// });

// Route::get('/ahmed2', function () {
//     return view('dashboard.master');
// });

// // dashboard
Route::prefix('admin')->group(function(){

    // dashboard - articles
    Route::resource('articles', ArticleController::class);

    // dashboard
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard.index');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
