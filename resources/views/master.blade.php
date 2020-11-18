@include('recipies.partials.header')
<section class=" ">

        <nav class="navbar navbar-expand-md navbar-light nav-section">
            <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Recipies Table</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-center">
               
                <li class="nav-item ">
                
                  <a class="btn btn-danger" href="{{route('recipie.create')}}">Add Recipies </a>
                </li>
              
                
              
              </ul>
             
            </div>
            </div>
          </nav>
    
</section>
@yield('content')
<!-- nav section end    -->
@include('recipies.partials.footer')