<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//Route::get('/', function () {
 //   return view('welcome');
//});
Route::get('/name',action: function(){
  return view('Hi! my name is Nuna');
});
Route::get('/example',action: function(){
    return " This is an example";
});
Route::get('/user/{name}',function($name)
{
  return"Welcome to my ID {$name}";
});
Route::get('/name/{id}',function($id){
  return"Make the id {$id}";
});
Route::get(uri:'book/{title?}', action: function($title=null)
{
  $books=["math","php","laragon"];
  if($title==null){
    return $books;
  }
  $book=array_filter(array: $books, callback: fn($item)=>$item==$title);
  return $book;
});
//Route::get('/', function ()
//{
  //return view('Welcome_old');
  //echo "hello";

//});
//Route::get ('/name', function(){
  //return view('name');
//});
Route::prefix("posts")->group( function(){
Route::get('posts/index', [PostController::class,'index']);
//run /posts/index
Route::get('posts/example1', [PostController::class, 'example1']);
//Route::get('posts/example2/ (id)', [PostController::class 'example2']);)
});


Route::get('posts/index', [PostController::class,'index']);
Route::get('posts/example1', [PostController::class, 'example1']);
//Route::get('posts/example2/ (id)', [PostController::class 'example2']);





?>


