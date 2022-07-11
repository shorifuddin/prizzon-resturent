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
      <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle "></i> All Delete User Information
              </div>
              <div class="col-md-4 card_header_btn ">
                <a href="{{ url('/dashboard/user/alluser') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> All User</a>
              </div>
            </div>
        </div>

      <div class="card-body container">
          <table class="table table-bordered table-striped table-hover custom_table">
            <thead class="thead-dark">
              <tr>

                <th scope="col">Name </th>
                <th scope="col">Phone </th>
                <th scope="col">Email</th>
               <th scope="col">Role</th>
               <th scope="col">Photo</th>
               <th>Manage</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($alldata as $data)
                <tr>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->phone }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->roleinfo->role_name }}</td>
                  <td>
                    @if ($data->image!='')
                     <img class="img-fluid img"  src="{{ asset('upload/user/'.$data->image) }}">
                    @else
                      <img class="img-fluid img" src="{{ asset('upload/avatar.jpg') }}">
                    @endif
                  </td>
                  <td>
                    {{-- <a href="{{ url('/dashboard/user/restore/'.$data->id) }}"><i class=" md-cached colors"></i></a>
                    <a href="{{ url('/dashboard/user/delete/'.$data->id) }}"><i class="md md-delete colors"></i></a> --}}
                    <div class="btn-group mb-2">
                        <div class="btn-group">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Manage <span class="caret"></span> </button>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" href="{{ route('restore',$data->id) }}">Restore</a>
                                <a class="dropdown-item" href="{{ route('deleteuser',$data->id) }}" data-bs-toggle="modal" data-bs-target="#dark-header-modal">Delete</a>
                            </div>
                        </div>
                    </div>
                  </td>
                </tr>
                  <!-- /.modal -->
                  <div id="dark-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dark-header-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-colored-header bg-danger">
                                <h4 class="modal-title" id="dark-header-modalLabel">Warning</h4>
                            </div>
                            <div class="modal-body">
                                <h5 class="mt-0">Delete Alart</h5>
                                <p>Are You Sure To Delete {{ $data->roleinfo->role_name }} <b>{{ $data->name }}</b>?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                                <a href="{{ route('softdeleteuser',$data->id) }}" class="btn btn-dark">Yes</a>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
              @endforeach
            </tbody>
          </table>
      </div>

      <div class="card-footer bg-secondary card_footer">
        <div class="btn-group" role="group">
          <a type="button" class="btn btn-xs btn-dark">Print</a>
          <a type="button" class="btn btn-xs btn-warning">Excel</a>
          <a type="button" class="btn btn-xs btn-dark">PDF</a>
        </div>
      </div>

      </div>
    </div>
  </div>
@endsection
