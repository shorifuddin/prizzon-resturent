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
      <form method="POST" action="{{ route('special_submit')}}" enctype="multipart/form-data">
        @csrf
       <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle"></i> Speciality ADD NOW
              </div>
              <div class="col-md-4 card_header_btn ">
              <a href="{{ route('feature_all') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All Speciality</a>
             </div>
            </div>
        </div>

        <div class="card-body ">
          <div class="form-group row ">
            <label class="col-sm-3 col-form-label col_form_label">Speciality Name <span class="req_star">*</span>:</label>
            <div class="col-sm-7 pp">
              <input type="text" class="form-control form_control" name="special_name" value="{{ old('special_name') }}">
              <span class="invalid-feedback">
                @error('special_name')
                  {{ $message }}
                @enderror
              </span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Speciality Image <span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="file" name="special_image" value="{{ old('special_image') }}">
            </div>
          </div>
        </div>

      <div class="card-footer bg-secondary card_footer">
        <button type="submit" class="btn btn-dark">Speciality ADD</button>
      </div>

      </div>
    </form>
    </div>
  </div>
@endsection
