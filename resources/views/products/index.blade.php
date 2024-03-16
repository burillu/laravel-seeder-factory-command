@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2>All Products ({{ count($products) }})</h2>
        <div class="row g-4">
            @foreach ($products as $item)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 ">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <h5>$ {{ $item->price }}</h5>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>



@endsection
