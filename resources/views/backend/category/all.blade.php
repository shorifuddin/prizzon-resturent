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
      <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title">
                <i class="md md-add-circle "></i> All CATEGORY Information
              </div>
              <div class="col-md-4 card_header_btn ">
                <a href="{{ route('category_add') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> Add CATEGORY</a>
              </div>
            </div>
        </div>
<br>
<div class="tab-content">
	<div class="tab-pane show active" id="basic-datatable-preview">
		<div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

			<div class="row">
				<div class="col-sm-12">
					<table id="basic-datatable" class="table dt-responsive nowrap w-100">
						<thead>
							<tr>
								<th>CATEGORY NAME</th>
                                <th>CATEGORY IMAGE</th>
                                <th>MANAGE</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($alldata as $data)


							<tr >
							    <td>{{ $data->category_name}}</td>
                                <td>
                                    @if (!empty($data->category_image))
                     					<img class="img-fluid img" src="{{ asset('upload/website/category/'.$data->category_image) }}">
                    				@else
                     					<img class="img-fluid img" src="{{ asset('upload/avater.jpg') }}">
                    				@endif
                                </td>
								<td>
                                    <div class="btn-group mb-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Manage <span class="caret"></span> </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{ route('category_edit',$data->category_id ) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('category_view',$data->category_id ) }}">View</a>
                                            <a class="dropdown-item" href="{{ route('category_softdelete',$data->category_id ) }}" data-bs-toggle="modal" data-bs-target="#dark-header-modal">Delete</a>
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
                                            <p>Are You Sure To Delete <b>{{ $data->category_name }}</b>?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                                            <a href="{{ route('category_softdelete',$data->category_id ) }}" class="btn btn-danger">Yes</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            @endforeach
                        </tbody>
					</table>
                </div>
			</div>

		</div>
	</div>

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

@section('coustom_css')
   <!-- Datatables css -->
    <link href="{{asset('backend')}}/assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
@endsection
@section('coustom_js')
   <!-- Datatables js -->
    <script src="{{asset('backend')}}/assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/responsive.bootstrap5.min.js"></script>

<!-- Datatable Init js -->
    <script src="{{asset('backend')}}/assets/js/pages/demo.datatable-init.js"></script>
@endsection
