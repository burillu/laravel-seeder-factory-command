@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2>Featured Products({{ count($products) }})</h2>
        <div class="row g-4 justify-content-between">
            @foreach ($products as $item)
                <div class="col-12 col-md-6 col-lg-4 col-xl-2 ">
                    <div class="card">
                        <img src="{{ $item->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <h6 style="color:{{ $item->category->color }}">{{ $item->category->name }} </h6>
                            <p class="card-text">{{ $item->truncateDescription() }}</p>
                            <h5>$ {{ $item->price }}</h5>
                            <a href="{{ route('products.show', $item->name) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>



@endsection
