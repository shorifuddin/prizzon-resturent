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

<div class="row container">
    <div class="col-md-12 container">
      <form method="POST" action="{{ route('menus_update',$data->menus_id) }}" enctype="multipart/form-data">
        @csrf
       <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle"></i> Menus UPDATE NOW
              </div>
              <div class="col-md-4 card_header_btn ">
              <a href="{{ route('menus_all') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All Menus</a>
             </div>
            </div>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Menus Name<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" name="menus_name" value="{{ $data->menus_name }}">

              <input type="hidden" name="id" value="{{ $data->menus_id }}">

              <span class="invalid-feedback">
                @error('menus_title')
                  {{ $message }}
                @enderror
              </span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Menus Details :</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="menus_details" value="{{ $data->menus_details }}">
              @error('menus_details')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Menus Price :</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="menus_price" value="{{ $data->menus_price }}">
              @error('menus_price')
                  {{ $message }}
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Menus Category :</label>
            <div class="col-sm-7 pp">
              <input type="text" disabled class="form-control form_control" name="menus_category" value="{{ $data->menus_category }}">
              @error('menus_category')
                  {{ $message }}
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Menus Image:</label>
            <div class="col-sm-7 ">
              <input type="file" name="menus_icon" value="{{ $data->menus_image }}">
              @error('menus_image')
                  {{ $message }}
              @enderror
                @if (!empty($data->menus_image))
              <img class="img-fluid img" src="{{ asset('upload/website/menus/'.$data->menus_image) }}">
                @else
              <img class="img-fluid img" src="{{ asset('upload/avater.jpg') }}">
                @endif

            </div>
          </div>
        </div>

      <div class="card-footer bg-secondary card_footer">
        <button type="submit" class="btn btn-dark">Update Menus</button>
      </div>

      </div>
    </form>
    </div>
  </div>
@endsection
