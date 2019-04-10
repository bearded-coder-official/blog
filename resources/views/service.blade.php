@extends('layouts.two-column')

@section('body')
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $service->title }}</h5>

            {!! $service->body !!}

            <p class="card-text"><small class="text-muted">{{$service->created_at}}</small></p>
        </div>
    </div>
@endsection

@section('sidebar')
    @include('sidebars.services-menu', ['items' => $services])
@endsection

@section('breadcrumbs')
    @include('breadcrumbs', ['breadcrumbs' => [
        [
            'name' => 'Home',
            'active' => true,
            'route' => 'home'
        ],
        [
            'name' => 'Services',
            'active' => true,
            'route' => 'services'
        ],
        [
            'name' => 'Service',
            'active' => false,
            'route' => 'service'
        ]
    ]])
@endsection