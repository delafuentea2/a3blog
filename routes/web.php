<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PostController;
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

//require __DIR__.'\auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users/{user}/posts', 'UserController@userPosts')->name('posts.index');

//manejar posts
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index'); //ver posts
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create'); //crear posts
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store'); //guardar post
Route::post('/comment', [App\Http\Controllers\CommentController::class, 'store']); //guardar comentario

Route::get('/posts/{id}', [App\Http\Controllers\ShowController::class, 'show'])->name('posts.show'); //ver un post especifico con sus comentarios

//manejar perfil
Route::get('/profile', [App\Http\Controllers\UserController::class, 'userProfile'])->name('profile');
Route::post('/profile', [App\Http\Controllers\UserController::class, 'userProfileUpdate'])->name('profile.update');;


//administrador
//middleware('auth', 'role:3'); //solo usuarios administradores 

Route::get('/tablename/{tablename}', [App\Http\Controllers\TableController::class, 'getTabla'])->name('admin.tabla');

Route::get('/admin/users', [App\Http\Controllers\TableController::class, 'uindex'])->name('admin.users');
Route::get('/admin/posts', [App\Http\Controllers\TableController::class, 'pindex'])->name('admin.posts');
Route::get('/admin/roles', [App\Http\Controllers\TableController::class, 'rindex'])->name('admin.roles');
Route::get('/admin/tags', [App\Http\Controllers\TableController::class, 'tindex'])->name('admin.tags');

//------------------------------------------------------------------------------------------------------------------
Route::get('/admin/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/create', [App\Http\Controllers\UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
Route::get('/admin/users/{id}/delete', [App\Http\Controllers\UserController::class, 'delete'])->name('admin.users.delete');
//------------------------------------------------------------------------------------------------------------------
Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/posts/create', [App\Http\Controllers\PostController::class, 'astore'])->name('admin.posts.store');
Route::get('/admin/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/admin/posts/update', [App\Http\Controllers\PostController::class, 'update'])->name('admin.posts.update');
Route::get('/admin/posts/{id}/delete', [App\Http\Controllers\PostController::class, 'delete'])->name('admin.posts.delete');
//------------------------------------------------------------------------------------------------------------------
Route::get('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'create'])->name('admin.roles.create');
Route::post('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'store'])->name('admin.roles.store');
Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('admin.roles.edit');
Route::put('/admin/roles/update', [App\Http\Controllers\RoleController::class, 'update'])->name('admin.roles.update');
Route::get('/admin/roles/{id}/delete', [App\Http\Controllers\RoleController::class, 'delete'])->name('admin.roles.delete');
//------------------------------------------------------------------------------------------------------------------
Route::get('/admin/tags/create', [App\Http\Controllers\TagController::class, 'create'])->name('admin.tags.create');
Route::post('/admin/tags/create', [App\Http\Controllers\TagController::class, 'store'])->name('admin.tags.store');
Route::get('/admin/tags/{id}/edit', [App\Http\Controllers\TagController::class, 'edit'])->name('admin.tags.edit');
Route::put('/admin/tags/update', [App\Http\Controllers\TagController::class, 'update'])->name('admin.tags.update');
Route::get('/admin/tags/{id}/delete', [App\Http\Controllers\TagController::class, 'delete'])->name('admin.tags.delete');