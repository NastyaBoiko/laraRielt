@extends('layouts.main')
@section('content')
    <div class="container">
        <form action=" {{ route('building.update', $building->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $building->title }}">
            </div>
            <div class="mb-3">
                <label for="district" class="form-label">District</label>
                <input type="text" name="district" id="district" class="form-control" placeholder="District" value="{{ $building->district }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Address" value="{{ $building->address }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection