@extends('layouts.master')
@section('title', 'Product')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="my-4">
            <h3 class="text-start my-4">Show Data</h3>
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Harga: {{ $product->price }}</p>
                    <p class="card-text">Kategori: {{ $product->category->name }}</p>
                    <p class="card-text">Deskripsi: {{ $product->description }}</p>
                </div>
            </div>
            <a href="{{ url('/product') }}" class="btn btn-primary my-2 d-block">Back</a>
        </div>
    </div>
@endsection
