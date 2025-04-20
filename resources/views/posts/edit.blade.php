@extends('layouts.app')
@section('title') edit
@endsection
@section('content')
<form method="post" action="{{route(name: 'posts.update',parameters: $post->id)}}">
  @csrf
  @method('put')
 
    <div class="mb-3">
      <label  class="form-label">title</label>
      <input name="title" type="text" value ="{{$post->title}}" class="form-control" >
      
    </div>
    <div class="mb-3">
      <label  class="form-label">description</label>
      <textarea name="description"  class="form-control" rows="3" >{{$post->description}}</textarea>
      
    </div>
    
      <div class="mb-3">
        <label  class="form-label">post creator</label>
        <select name="post_creator" class="form-control">
          @foreach ($users as $user)
              <option @if($user->id==$post->user_id) selected @endif value= "{{$user->id }}"> {{$user->name}}</option>
          @endforeach
          
         
        </select>
      </div>
     
  
    
    <button type="submit" class="btn btn-primary" >update</button>
  </form>
@endsection