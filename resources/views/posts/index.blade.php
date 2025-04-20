@extends('layouts.app')
@section('title') index
@endsection
@section('content')





      
      <div class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success">create post</a>

      </div>
      
      <div class="text-center">
        
        <table class="table mt-4">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">posted by</th>
              <th scope="col">created at</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->title}}</td>
              <td>{{$post->user ? $post->user->name :' not found'}}</td>
              <td>{{$post->created_at->format('y-m-d')}}</td>
              <td>
                <a href="{{route('posts.show',$post->id)}}" class="btn btn-info " >view</a>
                <a href="{{route('posts.edit',$post->id)}}"type="button" class="btn btn-primary">edit</a>
                <form style="display: inline;" method="post" action="{{route(name: 'posts.destroy',parameters: $post->id)}}">
                  @csrf
                  @method('delete')
                <button  type="submit" class="btn btn-danger">delete</button>
                </form>
              </td>

            </tr>
            
            @endforeach
            

          </tbody>
        </table>
      </div>
@endsection
   
