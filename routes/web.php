<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });
Route::get('/' , function(){
    // fetch all users
    $users = DB::select('select * from users');

    // create new user
    // $user = DB::insert('insert into users (name, email, password) values (?,?,?)',[
    //     'anis',
    //     'webhp.co@gmail.com',
    //     '@1234567890@'
    // ]);

    // user update
    // $userupdate = DB::update("update users set email=? where id=?",[
    //     'anishp13851@gmail.com' , 
    //     '0'
    // ]);

    // delete user
    // $userdelete = DB::delete('delete from user where id=?',[
    //     '5'
    // ]);
    dd($users);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
