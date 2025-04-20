@extends('layouts.app')
@section('title') create
@endsection
@section('content')
<!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
<form method="post" action="{{route('posts.store')}}">
  @csrf
    <div class="mb-3">
      <label  class="form-label">title</label>
      <input name="title" type="text" class="form-control" value="{{old('title')}}">
      
    </div>
    <div class="mb-3">
      <label  class="form-label">description</label>
      <textarea name="description"  class="form-control" rows="3" >{{old('description')}}</textarea>
      
    </div>
    
      <div class="mb-3">
        <label  class="form-label">post creator</label>
        <select name="post_creator" class="form-control">
          @foreach ($users as $user)
              <option value= "{{$user->id }}"> {{$user->name}}</option>
          @endforeach
          
          
        </select>
      </div>
     
  
    
    <button value= "{{$user->id }}"type="submit" class="btn btn-primary" >Submit</button>
  </form>
@endsection