@extends('layouts.website')
@section('websitecontent')

<section class="banner">
    <div class="banner-carousel owl-carousel">
        <div class="banner-slide">
            <div class="container">
                <div class="banner-box">
                    <div class="banner-text">
                        <div class="banner-center">
                            <h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
                            <p class="banner-sub-hed">Healthy Food for healthy body</p>
                        </div>
                    </div>
                    <div class="banner-images">
                        <div class="all-img-banner">
                            <img src="{{asset('frontend')}}/images/banner-bg-1.png" alt="banner" class="pizza-img">
                            <img src="{{asset('frontend')}}/images/banner-bg-2.png" alt="banner" class="pizza-it pizza-1">
                            <img src="{{asset('frontend')}}/images/banner-bg-3.png" alt="banner" class="pizza-it pizza-2">
                            <img src="{{asset('frontend')}}/images/banner-bg-4.png" alt="banner" class="pizza-it pizza-3">
                            <img src="{{asset('frontend')}}/images/banner-bg-5.png" alt="banner" class="pizza-it pizza-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slide-2">
            <div class="container">
                <div class="banner-box">
                    <div class="banner-text">
                        <div class="banner-center">
                            <h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
                            <p class="banner-sub-hed">Healthy Food for healthy body</p>
                        </div>
                    </div>
                    <div class="banner-images">
                        <div class="all-img-banner">
                            <img src="{{asset('frontend')}}/images/pizza-banner-1.png" alt="banner" class="pizza-img">
                            <img src="{{asset('frontend')}}/images/pizza-1.png" alt="banner" class="pizza-it pizza-1">
                            <img src="{{asset('frontend')}}/images/pizza-2.png" alt="banner" class="pizza-it pizza-2">
                            <img src="{{asset('frontend')}}/images/pizza-3.png" alt="banner" class="pizza-it pizza-3">
                            <img src="{{asset('frontend')}}/images/pizza-4.png" alt="banner" class="pizza-it pizza-4">
                            <img src="{{asset('frontend')}}/images/pizza-5.png" alt="banner" class="pizza-it pizza-5">
                            <img src="{{asset('frontend')}}/images/pizza-6.png" alt="banner" class="pizza-it pizza-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slide-3">
            <div class="container">
                <div class="banner-box">
                    <div class="banner-images">
                        <div class="all-img-banner">
                            <img src="{{asset('frontend')}}/images/pizza-banner-2.png" alt="banner" class="pizza-img">
                            <img src="{{asset('frontend')}}/images/pizza-7.png" alt="banner" class="pizza-it pizza-1">
                            <img src="{{asset('frontend')}}/images/pizza-8.png" alt="banner" class="pizza-it pizza-2">
                            <img src="{{asset('frontend')}}/images/pizza-9.png" alt="banner" class="pizza-it pizza-3">
                            <img src="{{asset('frontend')}}/images/pizza-10.png" alt="banner" class="pizza-it pizza-4">
                            <img src="{{asset('frontend')}}/images/pizza-11.png" alt="banner" class="pizza-it pizza-5">
                            <img src="{{asset('frontend')}}/images/pizza-12.png" alt="banner" class="pizza-it pizza-6">
                        </div>
                    </div>
                    <div class="banner-text">
                        <div class="banner-center">
                            <h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
                            <p class="banner-sub-hed">Healthy Food for healthy body</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('frontend.home.feature')

    @include('frontend.home.speciality')

    @include('frontend.home.menu')

    @include('frontend.home.booktable')

    @include('frontend.home.chef')

    @include('frontend.home.event')

    @include('frontend.home.review')

@endsection
