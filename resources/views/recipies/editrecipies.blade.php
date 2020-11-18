@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-8 mb-4">
        <!-- Simple Tables -->
        <div class="card">
        
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h2 class="my-2">Edit Recipie</h2>
              <a href="{{route('recipie.index')}}" class="btn btn-sm btn-outline-info">All recipie</a>

            </div>

          <div class="card-body">
            <form method="POST" action="{{route('recipie.update',$recipie->id)}}" >
           
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" 
                    value="{{$recipie->title}}">

                    @error('title')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="">Instructions	</label>
                  <textarea class="form-control" name="instructions" value="" rows="5">{{$recipie->instructions}}</textarea>

                  @error('instructions')
                  <strong class="text-danger">{{$message}}</strong>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingredients</label>
                  <input type="text" class="form-control" name="ingredients" 
                value="{{$recipie->ingredients}}">

                    @error('ingredients')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Time</label>
                  <input type="text" class="form-control" name="time"  
                    value="{{$recipie->time}}">

                    @error('time')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">servings</label>
                  <input type="text" class="form-control" name="servings" 
                    value="{{$recipie->servings}}">

                    @error('servings')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nutrition</label>
        
                       <textarea class="form-control" name="nutrition" value="" rows="5">{{$recipie->nutrition}}</textarea>

                    @error('nutrition')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
               
                <div class="form-group">
                  <label for="">Type</label>
                  <select class="form-control" name="type" id="">
                    <option>select type</option>
                    <option  @if ($recipie->type == 'Veg' ) selected @endif value='Veg'>Veg</option>
                    <option  @if ($recipie->type == 'Non-Veg') selected @endif value='Non-Veg'>Non-Veg</option>
                  
                   
                  </select>

                  @error('category')
                  <strong class="text-danger">{{$message}}</strong>
                  @enderror
                </div>
                
             

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
        
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
    <!--Row-->

   

  </div>
@endsection