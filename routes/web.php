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

// // View Route عرض الصفحه
// Route::view('hello', 'welcome');

// Route::view('hello2', 'pages.hello');

// // Show User Data
Route::get('/',function (){
    $arr = [
        'name' => 'Ahmed',
        'age' => 20
    ];

    return view('welcome', ['data' => $arr]);
});

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

// // Modelكيانات

