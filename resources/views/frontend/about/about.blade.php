@extends('layouts.website')
@section('websitecontent')

    <section class="page-banner" style="background: #121619 url({{asset('frontend')}}/images/blog-7.jpg) no-repeat center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="page-title">
                        <h1 class="page-headding">About Us</h1>
                        <ul>
                            <li><a href="index.html" class="page-name">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section pt-100">
        <div class="container">
            <div class="row flex-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about-img"><img src="{{asset('frontend')}}/images/about-1.jpg" alt="about"></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about-text">
                        <div class="headding-part">
                            <p class="headding-sub">Delicious Restaurant</p>
                            <h2 class="headding-title text-uppercase font-weight-bold">about pizzon</h2>
                        </div>
                        <div class="about-desc">
                            <p class="desc-about">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend
                                libero curabitur Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-story pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="headding-part text-center">
                        <p class="headding-sub">Discover</p>
                        <h2 class="headding-title text-uppercase font-weight-bold">OUR STORY</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="story text-center">
                        <p class="story-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use
                            a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first
                            true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
                        <img src="{{asset('frontend')}}/images/story.png" alt="story">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experience ptb">
        <div class="container">
            <div class="row flex-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about-img overlay">
                        <img src="{{asset('frontend')}}/images/about-2.jpg" alt="about">
                        <a href="javascript:void(0)" class="play-icon" data-toggle="modal" data-target="#form">
							<span>
								<i class="fa fa-play" aria-hidden="true"></i>
							</span>
						</a>
                    </div>
                    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-label="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          		<span aria-hidden="true">&times;</span>
					        	</button>
                                <iframe class="video-play" src="https://www.youtube.com/embed/tt7gP_IW-1w" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about-text">
                        <div class="headding-part">
                            <p class="headding-sub">Modern Cuisine</p>
                            <h2 class="headding-title text-uppercase font-weight-bold">Experience</h2>
                        </div>
                        <div class="about-desc">
                            <p class="desc-about">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend
                                libero curabitur Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.home.review')
    @include('frontend.home.booktable')

@endsection
