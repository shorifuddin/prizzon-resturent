<section class="online-booking ptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="max-w-390">
                    <div class="headding-part">
                        <p class="headding-sub">Fresh From Pizzon</p>
                        <h2 class="headding-title text-uppercase font-weight-bold">BOOK ONLINE</h2>
                    </div>
                    <p class="online-des">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend
                        libero curabitur </p>
                    <a href="#" class="online-call">+ 91 123 456 789 0</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 text-center">
                <h2 class="book-table text-uppercase">Book a table</h2>
                <form class="online-order-form" method="POST" action="{{ route('rtable_submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" name="rtable_name"  class="form-control" id="name" placeholder="Name" > </div>
                            <span class="invalid-feedback">
                                @error('rtable_name')
                                  {{ $message }}
                                  @enderror
                            </span>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text"  name="rtable_email" class="form-control" id="email" placeholder="Email Address" > </div>
                            <span class="invalid-feedback">
                                @error('rtable_email')
                                  {{ $message }}
                                  @enderror
                            </span>
                    </div>
                    <div class="form-group">
                        <select name="rtable_member	" class="custom-select sources form-control" data-placeholder="Number Of Person">
							<option value="1">Person 1</option>
							<option value="2">Person 2</option>
							<option value="4">Person 4</option>
						</select>
                        <span class="invalid-feedback">
                            @error('rtable_member')
                              {{ $message }}
                              @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="date" name="rtable_date" class="form-control" placeholder="Pick a Date" required> </div>
                            <span class="invalid-feedback">
                                @error('rtable_date')
                                  {{ $message }}
                                  @enderror
                            </span>
                    </div>
                    <button type="submit" class="more-table-v">book now</button>
                </form>
            </div>
        </div>
    </div>
</section>
