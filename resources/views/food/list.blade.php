@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <!-- loop through category  -->
    @foreach($categories as $category)
    <div class="col-md-12">
      
      <h2>{{$category->name}}</h2>
      <div class="jumbotron">
        <div class="row">
          <!-- loop food -->
          @foreach(App\Models\Food::where('category_id', $category->id)->get() as $food)
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images')}}/{{$food->image}}" alt="Card image cap" class="img-responsive" class="350">
            <div class="card-body">
              <p class="card-text">{{$food->name}}
                <span>#{{$food->price}}</span>
              </p>
              <p class="text-center">
                <a href="{{route('food.view', [$food->id])}}"><button class="btn btn-outline-secondary">View</button></a>
               
              </p>
            </div>
          </div>
          <!-- end loop food -->
          @endforeach
        </div>
      </div>
    
    </div>
    @endforeach
  </div>
</div>
@endsection



<style>

</style>