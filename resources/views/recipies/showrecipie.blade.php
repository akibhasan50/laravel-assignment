@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-8 mb-4">
        <!-- Simple Tables -->
        <div class="card">
        <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

  <!-- Grid row -->
  <div class="row">


    <!-- Grid column -->
    <div class="col-md-10 text-md-left ml-3 mt-3">

 
      <h4 class="h4 mb-4 text-info">{{$recipie->title}}</h4>
          <div >
            <h5 class="card-title">Instructions</h5>
            <p class="font-weight-normal">{{$recipie->instructions}}</p>
        </div>
          <div >
            <h5 class="card-title">Ingredients</h5>
            <p class="font-weight-normal">{{$recipie->ingredients}}</p>
        </div>
          <div >
            <h5 class="card-title">servings</h5>
            <p class="font-weight-normal">{{$recipie->servings}}</p>
        </div>
          <div >
            <h5 class="card-title">Nutrition</h5>
            <p class="font-weight-normal">{{$recipie->nutrition}}</p>
        </div>
          <div >
            <h5 class="card-title">Type</h5>
            <p class="font-weight-normal">{{$recipie->type}}</p>
        </div>
          <div >
            <h5 class="card-title">Time</h5>
            <p class="font-weight-normal">{{$recipie->time}}</p>
        </div>
   

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection