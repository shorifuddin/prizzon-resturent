@extends('layouts.admin')
@section('content')

@if (Session::has('success'))
<script>
swal({ title: "Good job!",text: "You clicked the button!", icon: "success",timer:3000,});
</script>
@endif

@if (Session::has('error'))
<script>
swal({ title: "Good error!",text: "You clicked the button!", icon: "error",});
</script>
@endif
<br>
<div class="row container">
    <div class="col-md-12 container">
      <form method="POST" action="{{ route('menus_submit')}}" enctype="multipart/form-data">
        @csrf
       <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle"></i> Menus ADD NOW
              </div>
              <div class="col-md-4 card_header_btn ">
              <a href="{{ route('menus_all') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All Menus</a>
             </div>
            </div>
        </div>

        <div class="card-body ">
          <div class="form-group row ">
            <label class="col-sm-3 col-form-label col_form_label">Menus Name<span class="req_star">*</span>:</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="menus_name" value="{{ old('menus_name') }}">
              <span class="invalid-feedback">
                @error('menus_name')
                  {{ $message }}
                @enderror
              </span>
            </div>
          </div>
          <div class="form-group row ">
            <label class="col-sm-3 col-form-label col_form_label">Menus Details <span class="req_star">*</span>:</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="menus_details" value="{{ old('menus_details') }}">
              <span class="invalid-feedback">
              @error('menus_details')
                  {{ $message }}
              @enderror
              </span>
            </div>
          </div>
          <div class="form-group row ">
            <label class="col-sm-3 col-form-label col_form_label">Menus Price <span class="req_star">*</span>:</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="menus_price" value="{{ old('menus_price') }}">
              <span class="invalid-feedback">
              @error('menus_price')
                  {{ $message }}
              @enderror
              </span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Menus Category<span class="req_star">*</span>:</label>
            <div class="col-sm-4">
              <select class="form-control form_control" name="menus_category">
                <option>Choose category</option>
                @foreach ($categorydata as $data)
                <option value="{{ $data->category_name }}">{{ $data->category_name }}</option>
                @endforeach

              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Menus Image <span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="file" name="menus_image" value="{{ old('menus_image') }}">
            </div>
          </div>
        </div>

      <div class="card-footer bg-secondary card_footer">
        <button type="submit" class="btn btn-dark">Menus ADD</button>
      </div>

      </div>
    </form>
    </div>
  </div>
@endsection
