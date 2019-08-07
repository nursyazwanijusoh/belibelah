@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                  <table id="fblist" class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($userssss as $singleuser)
                      <tr>
                        <td>{{ $singleuser->id }}</td>
                        <td>
                          <a href="">
                            {{ $singleuser->product_name }}
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
