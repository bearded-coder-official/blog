@extends('layouts.two-column')

@inject('abracadabra', 'App\Services\GetServices')

@section('body')
    @foreach($services as $service)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $service->title }}</h5>
                <p class="card-text">{!! $service->description !!}</p>
                <p class="card-text"><small class="text-muted">{{ $service->created_at }}</small></p>
            </div>
        </div>
    @endforeach
@endsection

@section('sidebar')
    @include('sidebars.services-menu', ['items' => $abracadabra->get()])
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
            'active' => false,
            'route' => 'services'
        ]
    ]])
@endsection