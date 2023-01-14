@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Food Section
                    <span class="float-right">
                        <a href="{{route('food.create')}}"><button class="btn btn-outline-secondary">Add Food</button></a>
                    </span>
                </div>

                <div class="card-body">
                    @if(Session::has('message'))

                    <div class="alert alert-success">{{Session::get('message')}}</div>


                    @endif
                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Image</th>
                          <th scope="col">Name</th>
                          <th scope="col">Description</th>
                          <th scope="col">Price</th>
                          <th scope="col">Category</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($foods as $key=>$food )
                        <tr>
                          <td><img src="{{asset('images')}}/{{$food->image}}" width="100" alt=""></td>
                          <td>{{$food->name}}</td>
                          <td>{{$food->description}}</td>
                          <td>#{{ $food->price }}</td>
                          <td>{{ $food->category->name}}</td>
                          <!-- start of edit  -->
                          <td>
                            <a href="{{route('food.edit',[$food->id])}}"><button class="btn btn-outline-success">Edit</button></a>
                        </td>
                        <!-- start of delete with confirmation  -->
                        <td> <form action="{{route('food.delete', [$food->id])}}" method="post">@csrf
                            @method('DELETE')
                            
                            <!-- using modal button to delete the items  -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$food->id}}">
                                Delete
                            </button>
                         
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$food->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{route('food.delete', [$food->id])}}" method="post">@csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Delete item {{ $food->name }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </div>
                                    </div>
                                </form>    
                            </div>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- for paginatin  -->
                    {{ $foods->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
