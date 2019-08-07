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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($userssss as $singleuser)
                      <tr>
                        <td>
                          <a href="{{ route(
                              'showEditUser',
                              ['user_id' => $singleuser->id], false
                            ) }}">
                            {{ $singleuser->name }}
                          </a>
                        </td>
                        <td>{{ $singleuser->email }}</td>
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
