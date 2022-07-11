@extends('layouts.website')
@section('websitecontent')

<section class="page-banner" style="background: #121619 url({{asset('frontend')}}/images/blog-6.jpg) no-repeat center / cover;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="page-title">
					<h1 class="page-headding">reservation</h1>
					<ul>
						<li><a href="{{ route('/') }}" class="page-name">Home</a></li>
						<li>Reservation</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="online-booking reservation pt-100">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12">
				<div class="headding-part text-center">
					<p class="headding-sub">Make Online Reservation</p>
					<h2 class="headding-title text-uppercase font-weight-bold">Book a table</h2> </div>
			</div>
		</div>
		<form method="POST" action="{{ route('rtable_submit') }}" enctype="multipart/form-data">
            @csrf
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="form-group">
						<select name="rtable_time" class="custom-select sources form-control" data-placeholder="Hour">
							<option value="hour">Hour</option>
							<option value="minute">minute</option>
							<option value="second">second</option>
						</select>
                        <span class="invalid-feedback">
                            @error('rtable_time')
                              {{ $message }}
                              @enderror
                        </span>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="form-group">
						<select name="rtable_member	" class="custom-select sources form-control" data-placeholder="Number Of People">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="4">4</option>
						</select>
                        <span class="invalid-feedback">
                            @error('rtable_member')
                              {{ $message }}
                              @enderror
                        </span>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="form-group">
						<input type="date" name="rtable_date" class="form-control" placeholder="Pick a Date" required> </div>
                        <span class="invalid-feedback">
                            @error('rtable_date')
                              {{ $message }}
                              @enderror
                        </span>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="form-group">
						<input type="number" name="rtable_phone" class="form-control" placeholder="Phone Number " required> </div>
                        <span class="invalid-feedback">
                            @error('rtable_phone')
                              {{ $message }}
                              @enderror
                        </span>
                    </div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="form-group">
						<input type="text" name="rtable_name"  class="form-control" id="name" placeholder="Name" > </div>
                        <span class="invalid-feedback">
                            @error('rtable_name')
                              {{ $message }}
                              @enderror
                        </span>
                    </div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="form-group">
						<input type="text"  name="rtable_email" class="form-control" id="email" placeholder="Email Address" > </div>
                        <span class="invalid-feedback">
                            @error('rtable_email')
                              {{ $message }}
                              @enderror
                        </span>
                    </div>
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="form-group">
						<input type="text" name="rtable_sms" class="form-control" placeholder="Messages" > </div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 text-center">
					<button type="submit"  value="Book a table" class="btn table-book">Book a table</button>
                </div>
			</div>
		</form>
	</div>
</section>

@endsection
