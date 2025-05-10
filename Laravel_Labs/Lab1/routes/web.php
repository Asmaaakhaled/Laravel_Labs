<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function(){
    return view('test');
 
});
Route::get('/posts',function(){
    // get all posts from data base 
    // send data to views
    // $posts=[
    //     "id"=>1,
    //     "title"=>"title 1",
    //     "body"=>"Post Body",
    //     "created_by"=>"Asmaa"
    // ];
    $posts=[
        ["id"=>1,
        "title"=>"title 1",
        "body"=>"Post Body 1",
        "created_by"=>"Asmaa"],
        [
            "id"=>2,
            "title"=>"title 2",
            "body"=>"Post Body 2",
            "created_by"=>"Mai"
        ],
        [
            "id"=>3,
            "title"=>"title 3",
            "body"=>"Post Body 3",
            "created_by"=>"mohamed"
        ],
        [
            "id"=>4,
            "title"=>"title 4",
            "body"=>"Post Body 4",
            "created_by"=>"Ahmed"
        ]
    ];
    return view("posts.index",data:["posts"=>$posts]);

});

Route::get('/posts/{id}',function($id){
    $post=[
        "id"=>$id,
        "title"=>"title ",
        "body"=>"Post Body 1",
        "created_by"=>"Asmaa"
    ];
    return view("posts.view",data:["post"=>$post]);
})->where('id','[0-9]+');

Route::get('/posts/create',function(){
    return view("posts.create");

});
// method post in form 
Route::post('/posts',function(){
    return "done";

});

Route::get('/posts/{id}/edit', function($id){
    $post = [
        "id" => $id,
        "title" => "title $id",
        "body" => "Post Body $id"
    ];
    
    return view("posts.edit", compact('post'));
});
// submit of edit form
Route::put('/posts/{id}', function($id){
    return "post with id= $id  has been updated successfully";
});


Route::delete('/posts/{id}/delete', function($id){
    return "post with id $id has been deleted successfully";
})->name('posts.destroy');

