<section class="chef ptb pt-120 pb-120">
    <div class="chef-top-bg"><img src="{{asset('frontend')}}/images/chef-top-bg.png" alt="chef-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headding-part pb-50 text-center">
                    <p class="headding-sub">Meet our experts</p>
                    <h2 class="headding-title text-uppercase font-weight-bold">Our Best Chef</h2>
                </div>
            </div>
        </div>
    @php
        $chefdata = App\Models\Chef::where('chef_status',1)->limit(6)->get();
    @endphp

        <div class="chef-banner owl-carousel">
            @foreach ($chefdata as $data)
            <div class="chef-outer text-center">
                <div class="chef-box">
                    <div class="chef-hover"><img src="{{ asset('upload/website/chef/'.$data->chef_image) }}" alt="chef" class="chef-img"></div>
                    <p class="chef-name text-uppercase font-weight-bold">{{ $data->chef_title }}</p>
                    <span class="chef-ct">{{ $data->chef_details }}</span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="chef-bottom-bg"><img src="{{asset('frontend')}}/images/chef-bottom-bg.png" alt="chef-bg"></div>
</section>
