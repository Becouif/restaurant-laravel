@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"All Category></div>

                <div class="card-body">
                @if(Session::has('message'))

                <div class="alert alert-success">{{Session::get('message')}}</div>


                @endif
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($categories)>0)
                        @foreach ($categories as $key=>$category )
                            
                        
                        
                        <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('category.edit',[$category->id])}}"><button class="btn btn-outline-success">Edit</button></a>
                        </td>
                        <td> <form action="{{route('category.delete', [$category->id])}}" method="post">@csrf
                            @method('DELETE')
                            
                            <!-- using modal button to delete the items  -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$category->id}}">
                                Delete
                            </button>
                         
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{route('category.delete', [$category->id])}}" method="post">@csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Delete item {{ $category->name }}
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
                        @else 
                        <td>No category to display</td>
                        @endif
                    </tbody>
                    </table>

                    
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
