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
      <form method="POST" action="{{ route('chef_update',$data->chef_id) }}" enctype="multipart/form-data">
        @csrf
       <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle"></i> Chef UPDATE NOW
              </div>
              <div class="col-md-4 card_header_btn ">
              <a href="{{ route('chef_all') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All Chef</a>
             </div>
            </div>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Chef Name<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" name="chef_title" value="{{ $data->chef_title }}">

              <input type="hidden" name="id" value="{{ $data->chef_id }}">

              <span class="invalid-feedback">
                @error('chef_title')
                  {{ $message }}
                @enderror
              </span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Chef Details :</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="chef_details" value="{{ $data->chef_details }}">
              @error('chef_details')
                  {{ $message }}
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Chef IMAGE:</label>
            <div class="col-sm-7 ">
              <input type="file" name="chef_image" value="{{ $data->chef_image }}">
              @error('chef_image')
                  {{ $message }}
              @enderror
                @if (!empty($data->chef_image))
              <img class="img-fluid img" src="{{ asset('upload/website/chef/'.$data->chef_image) }}">
                @else
              <img class="img-fluid img" src="{{ asset('upload/avater.jpg') }}">
                @endif

            </div>
          </div>
        </div>

      <div class="card-footer bg-secondary card_footer">
        <button type="submit" class="btn btn-dark">Update Chef</button>
      </div>

      </div>
    </form>
    </div>
  </div>
@endsection
