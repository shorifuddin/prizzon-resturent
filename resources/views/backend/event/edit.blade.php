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
      <form method="POST" action="{{ route('event_update',$data->event_id) }}" enctype="multipart/form-data">
        @csrf
       <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle"></i> Event UPDATE NOW
              </div>
              <div class="col-md-4 card_header_btn ">
              <a href="{{ route('event_all') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All Event</a>
             </div>
            </div>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Event Name<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" name="event_title" value="{{ $data->event_title }}">

              <input type="hidden" name="id" value="{{ $data->event_id }}">

              <span class="invalid-feedback">
                @error('event_title')
                  {{ $message }}
                @enderror
              </span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Event Time :</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="event_time" value="{{ $data->event_time }}">
              @error('event_time')
                  {{ $message }}
              @enderror
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Event IMAGE:</label>
            <div class="col-sm-7 ">
              <input type="file" name="event_image" value="{{ $data->event_image }}">
              @error('event_image')
                  {{ $message }}
              @enderror
                @if (!empty($data->event_image))
              <img class="img-fluid img" src="{{ asset('upload/website/event/'.$data->event_image) }}">
                @else
              <img class="img-fluid img" src="{{ asset('upload/avater.jpg') }}">
                @endif

            </div>
          </div>
        </div>

      <div class="card-footer bg-secondary card_footer">
        <button type="submit" class="btn btn-dark">Update Event</button>
      </div>

      </div>
    </form>
    </div>
  </div>
@endsection
