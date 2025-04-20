<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\user;


use function Pest\Laravel\from;
class postController extends Controller
{ 
   // public function firstAction()
   // {
     //   $localname='ahmed';
    //$newbooks=['php','javascript','css'];
   // return view('test',['name'=>$localname,'books'=>$newbooks]);
  //  }
    public function index()
    {
      $postsfromDB = post::all();
    
     
        
        return view('posts.index',['posts'=>$postsfromDB]);
    }
    public function create(){
      $users = user::all();
      return view('posts.create',['users'=>$users]);
    }
    public function store(){
      request()->validate([
        'title'=>['required','min:3'],
        'description'=>['required','min:5'],
      ]);

     // $data=$_POST;
      //return $data;
      $data=request()->all();
      $title=request()->title;
      $description=Request()->description;
      $postcreator=Request()->post_creator;
      //$post=new post;
      //$post->title=$title;
     // $post->description=$description;
     // $post->save();
     // dd($data);
      post::create([
      'title'=>$title,
      'description'=>$description,
      'user_id'=>$postcreator,
     ]);
      return to_route('posts.index');
    }
    public function show(post $post)
    {
      //$singlepoistformDB = post::findOrFail($postid);
      return view('posts.show',['post'=>$post]);
    }
    public function edit(post $post){
      $users = user::all();
      return view('posts.edit',['users'=>$users,'post'=>$post]);
      
    }
    public function update($postid){
      // $data=$_POST;
       //return $data;
       $data=request()->all();
       $title=request()->title;
      $description=Request()->description;
      $postcreator=Request()->post_creator;
       $singlepoistformDB = post::findOrFail($postid);
       $singlepoistformDB -> update([
         'title'=>$title,
         'description'=>$description,
          'user_id'=>$postcreator,
       ]);     
       
      // dd($data);
       return to_route('posts.show',$postid);
     }

     public function destroy($postid){
      $post = post::find($postid);
      $post->delete();
     
     
       return to_route('posts.index');
     }
    
    
};
