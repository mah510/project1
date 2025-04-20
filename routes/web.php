<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\post;

Route::get('/', function () {
    return view('Welcome');
});
Route::get('/go-me', function () {
    return view('go');
});
$page_name = 'contact me page';
$page_description ='this description';

//Route::view('/contact-me',"contact",[
   // 'page_name' => $page_name,
   // 'page_description' => $page_description
//]);
//Route::get('/test',action: [TestController::class,'firstAction']);
Route::get('/posts',[postController::class,'index'])->name('posts.index');

Route::get('/posts/create',[postController::class,'create'])->name('posts.create');

Route::post('/posts',[postController::class,'store'])->name('posts.store');
Route::get('/posts/{post}',[postController::class,'show'])->name('posts.show');

route::get('/posts/{post}/edit',[postController::class,'edit'])->name('posts.edit');
route::put('/posts/{post}',[postController::class,'update'])->name('posts.update');
route::delete('/posts/{post}',[postController::class,'destroy'])->name('posts.destroy');


