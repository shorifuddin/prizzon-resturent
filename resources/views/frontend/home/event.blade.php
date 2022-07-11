<section class="news ptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headding-part pb-50 text-center">
                    <p class="headding-sub">Recent Events</p>
                    <h2 class="headding-title text-uppercase font-weight-bold">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row">
        @php
            $eventdata = App\Models\Event::where('event_status',1)->limit(6)->get();
        @endphp
        @foreach ($eventdata as $data)

            <div class="col-xl-4 col-lg-4 col-md-4 news-part">
                <div class="new-box">
                    <div class="news-img">
                        <a href="#">
                            <img src="{{ asset('upload/website/event/'.$data->event_image) }}" alt="news" class="news-image">
                        </a>
                        <div class="text-uppercase news-date"><span>15 <br>june</span></div>
                        <span class="news-date-bg"></span>
                    </div>
                    <br>
                    <a href="#" class="news-headline">{{ $data->event_title}}</a>

                </div>
            </div>

         @endforeach

        </div>
    </div>
</section>
