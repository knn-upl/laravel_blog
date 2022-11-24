@extends('app')

@section('body')

<body>


    @include('layouts.nav')

        <div class="container mt-4">
            @yield('content')
        </div> 
   
    
    @include('layouts.scripts')
    
</body>

@endsection