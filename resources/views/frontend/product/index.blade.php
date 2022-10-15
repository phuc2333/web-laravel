@extends('layouts.front')
@section('title')
    Product
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $category->name }}</h2>
                    @foreach ($products as $prod)
                        <div class="col-md-3 mb-3">
                            <div class="item">
                                <a href="{{ url('view-category/' . $prod->slug) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" alt="">
                                        <div class="card-body">
                                            <h5>
                                                {{ $prod->name }}
                                            </h5>
                                            <span class="float-start">
                                                {{ $prod->selling_price }}
                                            </span>
                                            <span class="float-end">
                                                {{ $prod->original_price }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
