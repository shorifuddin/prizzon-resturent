<section class="special-menu ptb pt-140">
    <div class="container">
        <div class="menu-top-bg"><img src="{{asset('frontend')}}/images/menu-top-bg.png" alt="meu-bg"></div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headding-part text-center pb-50">
                    <p class="headding-sub">Fresh From Pizzon</p>
                    <h2 class="headding-title text-uppercase font-weight-bold">Our Special Menu</h2>
                </div>
            </div>
        </div>
    @php
        $categorydata = App\Models\Category::where('category_status',1)->limit(6)->get();
    @endphp
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="special-tab text-center">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="text-uppercase font-weight-bold tab-link current" data-tab="tab-1">
                            <a href="#tab-1" role="tab" data-toggle="tab" class="active"> all</a>
                        </li>

                    @foreach ($categorydata as $category)

                    <li role="presentation" class="text-uppercase font-weight-bold tab-link" data-tab="tab-{{ $category->category_slug }}">
                        <a href="#tab-{{ $category->category_slug }}" role="tab" data-toggle="tab"> {{ $category->category_name }}</a>
                    </li>
                    @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">

            <div role="tabpanel" class="row pt-50 tab-pane fade in active show" id="tab-1">
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-1.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">margherita pizza</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-3.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">Rum With Soda</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-7.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">Ceaser Salad</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-8.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">Sea Food Pasta</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-2.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">Chocolate Cookies</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-6.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">Pepperoni Pizza</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-7.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">bismarck pizza</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#"><img src="{{asset('frontend')}}/images/menu-1.png" alt="menu" class="menu-image"></a></div>
                    <a href="#" class="menu-title text-uppercase">Valdostana pizza</a>
                    <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <span class="menu-price">$20.50</span>
                </div>
            </div>
        @foreach ($categorydata as $category)
    @php
        $menudata = App\Models\Menus::where('menus_category', $category->category_name)->where('menus_status',1)->limit(8)->get();
    @endphp
            @foreach ($menudata as $menus)

            <div role="tabpanel" class="row pt-70 tab-pane fade" id="tab-{{ $category->category_slug }}">
                <div class="col-xl-3 col-lg-3 col-md-4 text-center pt-20">
                    <div class="menu-img"><a href="#">
                    <img src="{{ asset('upload/website/menus/'.$menus->menus_image) }}" alt="menu" class="menu-image"></a>
                    </div>
                    <a href="#" class="menu-title text-uppercase">{{ $menus->menus_name }}</a>
                    <p class="menu-des">{{ $menus->menus_details }}. </p>
                    <span class="menu-price">{{ $menus->menus_price }}</span>
                </div>
            </div>

            @endforeach
        @endforeach

        </div>
        <div class="menu-bottom-bg"><img src="{{asset('frontend')}}/images/menu-bottom-bg.png" alt="menu-bg"></div>

    </div>
</section>
