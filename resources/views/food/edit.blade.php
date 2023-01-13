@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(Session::has('message'))

            <div class="alert alert-success">{{Session::get('message')}}</div>


          @endif
          <form action="{{route('food.edit',[$food->id])}}" method="post" >@csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">Update Food</div>

                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$food->name}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="description" class="form-control @error('name') is-invalid @enderror" value="{{$food->description}}">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Price</label>
                    <input type="text" name="price" class="form-control @error('name') is-invalid @enderror" value="{{$food->price}}">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                      <label for="category">Category</label>
                      <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                        <option value="">Select Category</option>
                        @foreach (App\Models\Category::all() as $category)
                          <option value="{{$category->id}}"
                          @if($category->id==$food->category_id) selected @endif
                          >{{$category->name}}</option>
                        @endforeach
                                @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  <div class="form-group">
                    <button class="btn btn-outline-primary">Update</button>
                  </div>

                </div>
            </div>


          </form>
            
        </div>
    </div>
</div>
@endsection