@extends('master')

@section('content')
<div class="container-fluid" id="container-wrapper">
   

    <div class="row justify-content-center my-4">
      <div class="col-lg-8 mb-4">
        <!-- Simple Tables -->
        <div class="card">
        
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h2 class="my-2">Add Recipie</h2>
              <a href="{{route('recipie.index')}}" class="btn btn-sm btn-outline-info">All recipie</a>

            </div>

          <div class="card-body">
            <form method="POST" action="{{route('recipie.store')}}" >
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" 
                    placeholder="Enter Post">

                    @error('title')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="">Instructions	</label>
                  <textarea class="form-control" name="instructions" placeholder="Add instructions" rows="5"></textarea>

                  @error('instructions')
                  <strong class="text-danger">{{$message}}</strong>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ingredients</label>
                  <input type="text" class="form-control" name="ingredients" 
                    placeholder="Add Ingredients">

                    @error('title')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Time</label>
                  <input type="text" class="form-control" name="time"  
                    placeholder="Enter Time">

                    @error('time')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">servings</label>
                  <input type="text" class="form-control" name="servings" 
                    placeholder="Add servings">

                    @error('servings')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nutrition</label>
        
                       <textarea class="form-control" name="nutrition" placeholder="Add instructions" rows="5"></textarea>

                    @error('nutrition')
                    <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
               
                <div class="form-group">
                  <label for="">Type</label>
                  <select class="form-control" name="type" id="">
                    <option>select type</option>
                    <option value='Veg'>Veg</option>
                    <option value='Non-Veg'>Non-Veg</option>
                  
                   
                  </select>

                  @error('type')
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