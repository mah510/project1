@extends('layouts.app')
@section(('title'))show
    

@endsection
@section('content')

      <div class>
        <div class="card">
            <div class="card-header">
              post info
            </div>
            <div class="card-body">
              <h5 class="card-title">title:php</h5>
              <p class="card-text">description:php cool language</p>
              
            </div>
        </div>
        <div class="card">
          <div class="card-header">
            post creator info
          </div>
          <div class="card-body">
            <h5 class="card-title">name:{{$post->user ? $post->user->name:' not found'}}</h5>
            <p class="card-text">email:{{$post->user ? $post->user->email:'not found'}}</p>
            <p class="card-text">created at:{{$post->user ? $post->user->created_at:'not found'}}</p>
          </div>
      </div>
      </div>

      
@endsection
    
