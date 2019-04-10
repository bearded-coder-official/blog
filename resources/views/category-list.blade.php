@extends('layouts.one-column')

@section('body')

    <p><a href="{{ route('categories.add') }}">Add new category</a></p>

    <table border="1">
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}. </td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a href="{{ route('categories.edit', $category->id) }}">Edit</a></td>
                <td><a href="{{ route('categories.delete', $category->id) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>

@endsection