<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/', [MemberController::class, 'welcome'])->name('welcome');
Route::get('/members', [MemberController::class, 'index'])->name('index');
Route::get('/create', [MemberController::class, 'create'])->name('create');
Route::post('/store', [MemberController::class, 'store'])->name('store');
Route::get('/destroy/{id}', [MemberController::class, 'destroy'])->name('destroy');
Route::post('/update', [MemberController::class, 'update'])->name('update');
Route::get('/edit/{id}', [MemberController::class, 'edit'])->name('edit');