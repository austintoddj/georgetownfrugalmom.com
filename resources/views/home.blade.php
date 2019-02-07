@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('components.nav.sidebar')
            </div>

            <div class="col-lg-9">
                <h1>Home</h1>
            </div>
        </div>
    </div>
@endsection