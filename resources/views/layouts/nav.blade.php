<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            <li class="nav-item">
                <a class="fs-3 nav-link {{Request::is('/') ? "text-primary" : "text-secondary"}}" aria-current="page" href="/">Home</a>
            </li> 
            <li class="nav-item">
                <a class="mt-2 fs-5 nav-link {{Request::is('create') ? "text-primary" : "text-secondary"}}" aria-current="page" href="create">Create</a>
            </li>    
            <li class="nav-item">
                <a class="mt-2 fs-5 nav-link {{Request::is('about') ? "text-primary" : "text-secondary"}}" aria-current="page" href="about">About</a>
            </li>      
            <li class="nav-item">
                <a class="mt-2 fs-5 nav-link {{Request::is('contact') ? "text-primary" : "text-secondary"}}" href="contact">Contact</a>
            </li>
            </ul>           
        </div>
    </div>
</nav>   

