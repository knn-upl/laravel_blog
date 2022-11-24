@extends('layouts.body')
@section('title','Blog')

@section('content')
        
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Home</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
    </div>

    <div class="row">
      <div class="col-8 ">                
          <div class="card mt-3 mb-3">                    
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam dicta quidem reprehenderit nemo reiciendis labore non officiis optio, sint voluptatem, vero minima adipisci rerum molestias sunt, eligendi deserunt facere eum?</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
          </div>          
          <div class="card mt-3 mb-3">                    
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam dicta quidem reprehenderit nemo reiciendis labore non officiis optio, sint voluptatem, vero minima adipisci rerum molestias sunt, eligendi deserunt facere eum?</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
          </div>      
                          
          <div class="card mt-3 mb-3">                    
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam dicta quidem reprehenderit nemo reiciendis labore non officiis optio, sint voluptatem, vero minima adipisci rerum molestias sunt, eligendi deserunt facere eum?</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
          </div>   
      </div>
      
      <div class="col-4 ">
                Sidebar
      </div>
    </div>

@endsection
