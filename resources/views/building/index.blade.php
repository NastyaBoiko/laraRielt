@extends('layouts.main')
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($buildings as $building)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $building->name }}</h5>
                    <p class="card-text">{{ $building->district }}</p>
                    <p class="card-text">{{ $building->address }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection