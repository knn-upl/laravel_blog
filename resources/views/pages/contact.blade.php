@extends('layouts.body')

@section('title','Blog | Contact')

@section('content')
  <h1 class="card-header text-center">Contact Me</h1>            
  <hr class="m-3 border border-dark border-1 opacity-75">
  <div class="card-body">
    <form method="POST" action="/profile">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="subject exmaple">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Example message here"></textarea>
        </div>
        <div class="d-grid gap-2">      
                <button type="submit" class="btn btn-primary mb-3">Send Message</button>          
        </div>
    </form>
      
  </div>
@endsection
      