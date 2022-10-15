@extends('layouts.front')
@section('title')
    Welcome to E-shop
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="container">
        <div class="row">
            <h2>Featured products</h2>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($featured_product as $item)
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/products/' . $item->image) }}" alt="">
                            <div class="card-body">
                                <h5>
                                    {{ $item->name }}
                                </h5>
                                <small>{{ $item->selling_price }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2>Trending products</h2>
            <div class="owl-carousel trending-carousel owl-theme">
                @foreach ($trending_category as $item)
                    <div class="item">
                        <a href="{{url('view-category/'.$item->slug)}}">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/' . $item->image) }}" alt="">
                                <div class="card-body">
                                    <h5>
                                        {{ $item->name }}
                                    </h5>
                                    <small>{{ $item->description }}</small>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                @endforeach
            </div>


        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.trending-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
