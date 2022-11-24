@extends('layouts.body')

@section('title','Blog | View Post')

@section('content')
    
<div class="row">
    <div class="col-7">

        <h1> {{$post->title}}</h1>    
        <p>{{$post->body}}</p>
    
    
    </div>

    <div class="col-5">
        <div class="card w-75 text-bg-light mb-3 border-dark">
            <div class="card-body ">
  
                <div class="row mb-4">
                    <div class="col-6 text-end fw-bold">
                        Create At:
                    </div>
                    <div class="col-6">
                        {{$post->created_at}}
                    </div>
          
                </div>

                <div class="row mb-4">
                    <div class="col-6 text-end fw-bold">
                       Last Updated:
                    </div>
                    <div class="col-6">
                        {{$post->updated_at}}
                    </div>
          
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="d-grid gap-2">
                            <button class ="btn btn-primary">Edit</button>
                        </div>
                    
                     </div>
                     <div class="col-6">
                        <div class="d-grid gap-2">
                            <button class ="btn btn-danger">Delete</button>
                        </div>
                   
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection