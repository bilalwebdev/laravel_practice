<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DemoController;
use App\Http\Controllers\PhtoController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
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

Route::get('/', function () {

    return view('index');

});
//Route::get('/home', [DemoController::class, 'index']);
Route::get('/about', function(){
    return view('about');
});
Route::resource('photo', PhtoController::class);
Route::get('/register', [RegistrationController::class, 'submit'])->name('customer.create');
Route::get('/customer/delete/{id}', [RegistrationController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [RegistrationController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [RegistrationController::class, 'update'])->name('customer.update');
Route::get('/customer/restore/{id}', [RegistrationController::class, 'restore'])->name('customer.restore');
Route::get('/customer/force-delete/{id}', [RegistrationController::class, 'forceDelete'])->name('customer.forcedel');
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/customer', [RegistrationController::class, 'view'])->name('customer.view');
Route::get('/customer/trash', [RegistrationController::class, 'trash'])->name('customer.trash');
Route::get('get-all-session', function()
{
    $session = session()->all();
    echo '<pre>';
    print_r($session);
    echo '<pre>';
});
Route::get('set-session', function(Request $req)
{
    $req->session()->put('first_name', 'Bilal');
  //  $req->session()->put('name', 'Bilal');
      return redirect('get-all-session');
});
Route::get('destroy-session', function()
{
    session()->forget('first_name');
 //   session()->forget('name' );
      return redirect('get-all-session');
});
