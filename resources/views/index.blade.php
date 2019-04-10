@extends('layouts.one-column')

@section('body')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
@endsection

@section('breadcrumbs')
    @include('breadcrumbs', ['breadcrumbs' => [
        [
            'name' => 'Home',
            'active' => false,
            'route' => 'home'
        ]
    ]])
@endsection