<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketsController;

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
    return view('welcome');
});

Route::post('/contact',[Controller::class,'contacto'])->name('mail.contact');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('password/reset', [HomeController::class, 'password'])->name('password');

Route::get('/admin/users', [HomeController::class, 'users'])->name('users');
Route::post('/admin/users', [HomeController::class, 'usersStore'])->name('users.store');
Route::get('/admin/users/{user}', [HomeController::class, 'usersEdit'])->name('users.edit');
Route::put('/admin/users/{user}', [HomeController::class, 'usersUpdate'])->name('users.update');
Route::delete('/admin/users/{user}', [HomeController::class, 'usersDestroy'])->name('users.destroy');

Route::get('/admin/role', [HomeController::class, 'role'])->name('role');
Route::post('/admin/role', [HomeController::class, 'roleStore'])->name('roles.store');
Route::get('/admin/role/{role}', [HomeController::class, 'roleEdit'])->name('roles.edit');
Route::put('/admin/role/{role}', [HomeController::class, 'roleUpdate'])->name('roles.update');
Route::delete('/admin/role/{role}', [HomeController::class, 'roleDestroy'])->name('roles.destroy');

Route::post('/admin/role/assign', [HomeController::class, 'permissionsAssign'])->name('permissions.assign');
Route::get('/admin/permissions', [HomeController::class, 'permissions'])->name('permissions');
Route::post('/admin/permissions', [HomeController::class, 'permissionsStore'])->name('permissions.store');
Route::get('/admin/permissions/{permission}', [HomeController::class, 'permissionsEdit'])->name('permissions.edit');
Route::put('/admin/permissions/{permission}', [HomeController::class, 'permissionsUpdate'])->name('permissions.update');
Route::delete('/admin/permissions/{permission}', [HomeController::class, 'permissionsDestroy'])->name('permissions.destroy');

Route::get('/admin/companies', [HomeController::class, 'companies'])->name('companies');
Route::post('/admin/companies', [HomeController::class, 'companiesStore'])->name('companies.store');
Route::put('/admin/companies/{empresa}', [HomeController::class, 'companiesUpdate'])->name('companies.update');
Route::delete('/admin/companies/{empresa}', [HomeController::class, 'companiesDestroy'])->name('companies.destroy');

Auth::routes();

Route::apiResource('ticket', TicketsController::class);
Route::get('/ticket/{ticket}/edit', [TicketsController::class, 'edit'])->name('ticket.edit');
Route::post('ticket-activity', [TicketsController::class, 'activity'])->name('ticket.activity');