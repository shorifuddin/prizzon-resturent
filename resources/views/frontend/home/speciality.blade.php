@php
    $special = App\Models\Speciality::where('special_status',1)->limit(3)->get();
@endphp
<section class="speciality ptb pt-140">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headding-part text-center pb-50">
                    <p class="headding-sub">Fresh From Pizzon</p>
                    <h2 class="headding-title text-uppercase font-weight-bold">our speciality</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($special as $data)
            <div class="col-xl-4 col-lg-4 col-md-4 text-center speciality-box">
                <div class="speciality-img"><a href="#">
                    <img src="{{ asset('upload/website/special/'.$data->special_image) }}" alt="speciality" class="spec-image"></a></div>
                <a href="#" class="ser-title text-uppercase font-weight-bold">{{ $data->special_name}}</a>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 text-center">
                <a href="{{ route('menu') }}" class="com-btn">view more</a>
            </div>
        </div>
    </div>
</section>
