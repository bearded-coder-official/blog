@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                 @yield('body')
            </div>
            <div class="col-3">
                @yield('sidebar')
            </div>
        </div>
    </div>
@endsection