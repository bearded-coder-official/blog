@extends('layouts.one-column')

@section('body')
{{--    @if ($errors->has('name'))--}}
{{--        {{ dd($errors) }}--}}
{{--    @endif--}}

    @if (isset($category))
        <form action="{{ route('categories.store', $category->id) }}" method="post">
    @else
        <form action="{{ route('categories.save') }}" method="post">
    @endif
        @csrf

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="{{ old('name', $category->name ?? '') }}">
            </div>
            @if ($errors->has('name'))
                <ul>
                    @foreach($errors->get('name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $category->slug ?? '') }}">
            </div>
            @if ($errors->has('slug'))
                <ul>
                    @foreach($errors->get('slug') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <input type="submit" value="@if (isset($category)) Update @else Create @endif">
    </form>
@endsection