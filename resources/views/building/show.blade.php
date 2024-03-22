@extends('layouts.main')
@section('content')
    <div class="container">
        <h1>{{ $building->title }}</h1>
        <p>{{ $building->district }}</p>
        <p>{{ $building->address }}</p>
        <a href="{{ route('building.index') }}" class="btn btn-primary">Back</a>
        <a href="{{ route('building.edit', $building->id) }}" class="btn btn-warning">Edit</a>
        <form action=" {{ route('building.delete', $building->id) }}" method="POST">
            @csrf
            @method("delete")
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
@endsection