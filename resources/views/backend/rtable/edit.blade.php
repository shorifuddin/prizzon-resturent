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
      <form method="POST" action="{{ route('rtable_update',$data->rtable_id) }}" enctype="multipart/form-data">
        @csrf
       <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle"></i> Reservation UPDATE NOW
              </div>
              <div class="col-md-4 card_header_btn ">
              <a href="{{ route('feature_all') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All Reservation</a>
             </div>
            </div>
        </div>
        <input type="hidden" name="id" value="{{ $data->rtable_id }}">
        <div class="card-body">

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Reservation Title:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" name="feature_title" value="{{ $data->rtable_time }}" disabled>
              </span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Reservation Details :</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="feature_details" value="{{ $data->rtable_member }}" disabled>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Reservation Title:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" name="feature_title" value="{{ $data->rtable_date }}" disabled>
              </span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Reservation Details :</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="feature_details" value="{{ $data->rtable_phone }}" disabled>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Reservation Title:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" name="feature_title" value="{{ $data->rtable_name }}" disabled>
              </span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Reservation Details :</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="feature_details" value="{{ $data->rtable_email }}" disabled>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Reservation Details:</label>
            <div class="col-sm-4">
              <select class="form-control form_control" name="rtable_status">
                <option>
                    @if ($data->rtable_status==0)
                       Pending
                    @endif
                </option>
                <option value="1">Approved</option>
              </select>
            </div>
          </div>

      <div class="card-footer bg-secondary card_footer">
        <button type="submit" class="btn btn-dark">Update Reservation</button>
      </div>

      </div>
    </form>
    </div>
  </div>
@endsection
