@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
      <div class="card">
            <div class="card-header">{{ __('Product') }}</div>
            <img src="{{asset('images')}}/{{$food->image}}" class="img-responsive" >
              <div class="card-body">
                    
              </div>
            </div>
      </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail') }}</div>

                <div class="card-body">
                    <h2>{{$food->name}}</h2>
                    <p class="lead">{{$food->description}}</p>
                    <h4>#{{$food->price}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
