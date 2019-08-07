@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div><br/>
            <div class="card">
                <div class="card-header">Link kat bawah ni</div>

                <div class="card-body">
                    <a href="{{ route('listitems') }}">list merch</a>
                    <br />
                    <a href="{{ route('additem') }}">Add merc</a>
                    <br />
                    <a href="{{ route('users') }}">{{ route('users', [], false) }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jowoskrip')
<script></script>
@endsection
