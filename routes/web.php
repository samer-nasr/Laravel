<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('posts' , [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {
    //Find a post by its slug and pass it to a view called "post
    
    return view('post' , [
        'post' => Post::find($slug)
    ]);

})->where('post', '[A-z_\-]+');


// Route::get('/pizzas', function () {
//     // return view('pizzas');
//     return ['name'=> 'samer' , 'gender' => 'male'];
// });

// Route::get('/samer', function () {
//     return view('test');
// });

// Route::get('/home',function(){
//     return '<h2>Home Page</h2>';
// });

// Route::get('/test/{id}',function($id){
//     return 'ID number is:'.$id;
// });

// Route::get('/test/{id}/{name}',function($id,$name){
//     return 'ID number is:'.$id."<br> Name : ".$name;
// });

// //Optional Parameters//
// Route::get('/test/{id?}',function($id=0){
//     return 'ID number is:'.$id;
// });

// //Expression constraints (where)//
// Route::get('/where/{name?}',function($name=null){
//     return 'Name is:'.$name;
// })->where('name','[a-zA-Z]+');

// Route::get('user/{id?}', function ($id=null) {  
//     return "id is : ". $id;  
// })->where('id','[0-9]+');

// Route::get('user/{id}/{name}', function ($id,$name) {  
//     return "id is : ". $id ." ,".  "Name is : ".$name ;  
// })->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);  
