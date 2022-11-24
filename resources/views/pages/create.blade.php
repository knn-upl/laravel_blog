@extends('layouts.body')
@section('title','Blog')

@section('content')
  <h1 class="card-header">Create New Post</h1>            
  <hr class="m-3 border border-dark border-1 opacity-75">
  <div class="card-body">
  
  <form method="POST" action="{{url('post')}}">
    {{csrf_field()}}
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Title:</label>
      <input type="text" class="form-control" name="title" required placeholder="Type Title Here">
    </div>
   
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Post Body:</label>
      <textarea class="form-control" rows="20" name="body" required placeholder="Example Post Somethings here"></textarea>
    </div>
    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary mb-3">Create Post</button>   
    </div>

  </form>


</div>

@endsection
