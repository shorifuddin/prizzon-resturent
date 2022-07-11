@php
    $feature = App\Models\Feature::where('feature_status',1)->limit(3)->get();
@endphp
<section class="order-section ptb">
    <div class="container">
        <div class="row">
            <div class="order-top">
                <img src="{{asset('frontend')}}/images/order-top.png" alt="layer">
            </div>
            @foreach ( $feature as $data )

            <div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
                <img src="{{ asset('upload/website/feature/'.$data->feature_icon) }}" alt="order" class="order-img">
                <h2 class="order-title text-uppercase">{{ $data->feature_title }}</h2>
                <p class="order-des">
                    {{ $data->feature_details }}
                </p>
            </div>

            @endforeach

            <div class="order-bottom"><img src="{{asset('frontend')}}/images/order-bottom.png" alt="layer"></div>
        </div>
    </div>
</section>
