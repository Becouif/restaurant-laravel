@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Food Section list</div>

                <div class="card-body">
                    
                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Description</th>
                          <th scope="col">Price</th>
                          <th scope="col">Image</th>
                          <th scope="col">Catgory</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($food as $key=>$food )
                        <tr>
                          <th scope="row">{{food->}}</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
