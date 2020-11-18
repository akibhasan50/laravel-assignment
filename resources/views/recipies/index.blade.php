@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-11 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div class="card-header py-3 ">
            <h2 class="my-2">Search Recipies</h2>
      <form class="form-inline my-3" method="POST" action="{{route('recipie.search')}}">
            @csrf

            <div class="form-group mx-2">
             
              <input type="text" name="name" id="" class="form-control" placeholder="Enter recipie" aria-describedby="helpId">
            
              
            </div> 
          
            <button type="submit" class="btn btn-primary mx-2"> search</button>
          </form>

          @if ($errors->any())
          @foreach ($errors->all() as $error)
              <div class="text-danger">{{$error}}</div>
          @endforeach
              
          @endif
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
              @foreach($recipies as $recipie)
                  @php
                $i++;
              @endphp
                <tbody>
                <td>{{$i}}</td>
                <td>{{$recipie->title}}</td>
                <td>{{Str::limit($recipie->instructions,30)}}</td>
                <td>{{$recipie->ingredients}}</td>
                <td>{{$recipie->time}}</td>
                <td>{{$recipie->servings}}</td>
                <td>{{$recipie->nutrition}}</td>
                <td>{{$recipie->type}}</td>
                 <td class="d-flex">
                          <a href="{{route('recipie.edit',$recipie->id)}}" class="btn btn-sm btn-success mx-1">Edit</a>
                          <a href="{{route('recipie.show',$recipie->id)}}" class="btn btn-sm btn-primary mx-1">Detail</a>
                          <a href="{{route('recipie.destroy',$recipie->id)}}" class="btn btn-sm btn-danger mx-1">Delete</a>
                        
                        
                          </td>
              </tbody>
              @endforeach
                
               
            
            </table>
       
          </div>
      
          <div class="card-footer">
                  {{$recipies->links()}}
          
               
          </div>
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection