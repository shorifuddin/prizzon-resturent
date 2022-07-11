@extends('layouts.website')
@section('websitecontent')

<section class="page-banner" style="background: #121619 url({{asset('frontend')}}/images/menu-banner-1.png) no-repeat center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="page-title">
                    <h1 class="page-headding">Food Menus</h1>
                    <ul>
                        <li><a href="index.html" class="page-name">Home</a></li>
                        <li>Menu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="menu-list pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="menu-tabbing">
                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="tab-link current" data-tab="tab-1"><a href="#tab-1" role="tab" data-toggle="tab" class="active">all</a></li>
                            <li role="presentation" class="tab-link" data-tab="tab-2"><a href="#tab-2" role="tab" data-toggle="tab">Drinks</a></li>
                            <li role="presentation" class="tab-link" data-tab="tab-3"><a href="#tab-3" role="tab" data-toggle="tab">salads</a></li>
                            <li role="presentation" class="tab-link" data-tab="tab-4"><a href="#tab-4" role="tab" data-toggle="tab">pasta</a></li>
                            <li role="presentation" class="tab-link" data-tab="tab-5"><a href="#tab-5" role="tab" data-toggle="tab">burgers</a></li>
                            <li role="presentation" class="tab-link" data-tab="tab-6"><a href="#tab-6" role="tab" data-toggle="tab">deserts</a></li>
                            <li role="presentation" class="tab-link" data-tab="tab-7"><a href="#tab-7" role="tab" data-toggle="tab">pizzas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="row tab-pane fade in active show" id="tab-1">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-1.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Barbecue Pizza </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-2.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-3.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Caesar Salad</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-11.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Fettucini</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-10.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Gnocchi</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-6.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Triple crown</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-7.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Greek Pizza</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-8.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-9.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade" id="tab-2">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-7.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Greek Pizza</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade" id="tab-3">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-3.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Caesar Salad</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-8.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.htmll" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade" id="tab-4">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-10.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.htmll" class="iteam-name">Fettucini</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade" id="tab-5">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-11.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Fettucini</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-8.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade" id="tab-6">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-8.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-9.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="row tab-pane fade" id="tab-7">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-1.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Barbecue Pizza </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-2.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-6.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Triple crown</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-7.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Greek Pizza</a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-8.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="menu-list-box">
                            <div class="list-img"><a href="shop-detail.html"><img src="{{asset('frontend')}}/images/list-9.jpg" alt="pizza"></a></div>
                            <div class="menu-detail">
                                <a href="shop-detail.html" class="iteam-name">Chicken Breast </a>
                                <ul>
                                    <li>Chicken</li>
                                    <li>Olive Oil</li>
                                    <li>Salt</li>
                                </ul>
                                <p class="iteam-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or</p>
                                <a href="shop-detail.html" class="iteam-order">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('frontend.home.chef')
    @include('frontend.home.booktable')

@endsection
