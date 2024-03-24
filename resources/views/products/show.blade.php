@extends('layouts.app')

@section('title', 'Details')

@section('content')
    <div class="container">
        <h2>{{ $product->name }} </h2>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}">


                </div>
                <div class="col-12 col-md-6">
                    <div>
                        <h4>Type : <span style="color: {{ $product->category->color }}">{{ $product->category->name }}</span>
                        </h4>
                    </div>
                    <h5>Description:</h5>
                    <p class="mb-5">
                        {{ $product->description }}
                    </p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary"><i
                            class="fa-solid fa-arrow-left"></i></a>



                </div>
            </div>


        </div>

    </div>



@endsection
