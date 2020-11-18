@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-10 mb-4">
        <!-- Simple Tables -->
        <div class="card">

        @if ($results->count() > 0)
        <div class="card-header py-3 ">
          <h2 class="my-2">Total {{$results->count()}} Result found</h2>
          {{-- <strong class="text-info">{{$phone}}</strong> --}}
        </div>
      <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  
                  <th>SN</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Ingredients</th>
                  <th>Time</th>
                  <th>Servings</th>
                  <th>Nutrition</th>
                  <th>Type</th>
                  <th>Action</th>
                  
                 
                </tr>
              </thead>
            @php
                $i = 0;
            @endphp
              @foreach($results as $result)
                  @php
                $i++;
              @endphp
                <tbody>
                <td>{{$i}}</td>
                <td>{{$result->title}}</td>
                <td>{{Str::limit($result->instructions,30)}}</td>
                <td>{{$result->ingredients}}</td>
                <td>{{$result->time}}</td>
                <td>{{$result->servings}}</td>
                <td>{{$result->nutrition}}</td>
                <td>{{$result->type}}</td>
                 <td class="d-flex">
                          <a href="{{route('recipie.edit',$result->id)}}" class="btn btn-sm btn-success mx-1">Edit</a>
                          <a href="{{route('recipie.edit',$result->id)}}" class="btn btn-sm btn-primary mx-1">Detail</a>
                          <a href="{{route('recipie.destroy',$result->id)}}" class="btn btn-sm btn-danger mx-1">Delete</a>
                        
                        
                          </td>
              </tbody>
              @endforeach
                
               
            
            </table>
       
          </div>
      
    
        <div class="card-footer"></div>
        @else
            <div class="card text-white ">
            
              <div class="card-body text-center">
                <img class="card-img-top " src="{{asset('ui/img/no.jpg')}}" style="height:500px;width:500px">
              </div>
            </div>
        @endif
         
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection