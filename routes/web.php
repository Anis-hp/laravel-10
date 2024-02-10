<?php
namespace App\Models;

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
    // $users = DB::select('select * from users');
    // $users = DB::table('users')->where('id')->get();


    // create new user
    // $user = DB::insert('insert into users (name, email, password) values (?,?,?)',[
    //     'anis',
    //     'webhp.co@gmail.com',
    //     '@1234567890@'
    // ]);
    // create new user
    // $user = DB::table('users')->insert([
    //     'name' => 'anis',
    //     'email' => 'webhp2.co@gmail.com',
    //     'password' => '@1234567890@'
    // ]);
        // create new user
    $user = User::create([
        'name' => 'anis',
        'email' => 'webhp3.co@gmail.com',
        'password' => bcrypt('@1234567890@'),
    ]);
    // user update
    // $userupdate = DB::update("update users set email=? where id=?",[
    //     'anishp13851@gmail.com' , 
    //     '0'
    // ]);

    // delete user
    // $userdelete = DB::delete('delete from user where id=?',[
    //     '5'
    // ]);
    dd($user);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
