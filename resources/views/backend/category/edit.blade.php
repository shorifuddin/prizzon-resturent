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
      <form method="POST" action="{{ route('category_update',$data->category_id ) }}" enctype="multipart/form-data">
        @csrf
       <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle"></i> CATEGORY UPDATE NOW
              </div>
              <div class="col-md-4 card_header_btn ">
              <a href="{{ route('category_all') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All Category</a>
             </div>
            </div>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Category Name<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" name="category_name" value="{{ $data->category_name }}">

              <input type="hidden" name="id" value="{{ $data->category_id  }}">

              <span class="invalid-feedback">
                @error('category_name')
                  {{ $message }}
                @enderror
              </span>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label col_form_label">Category Image:</label>
            <div class="col-sm-7 ">
              <input type="file" name="category_image" value="{{ $data->category_image }}">
              @error('category_image')
                  {{ $message }}
              @enderror
                @if (!empty($data->category_image))
              <img class="img-fluid img" src="{{ asset('upload/website/category/'.$data->category_image) }}">
                @else
              <img class="img-fluid img" src="{{ asset('upload/avater.jpg') }}">
                @endif

            </div>
          </div>
        </div>

      <div class="card-footer bg-secondary card_footer">
        <button type="submit" class="btn btn-dark">Update Category</button>
      </div>

      </div>
    </form>
    </div>
  </div>
@endsection
