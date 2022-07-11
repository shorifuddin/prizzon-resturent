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
                <i class="md md-add-circle "></i> All Role Information
              </div>
              <div class="col-md-4 card_header_btn ">
                <a href="{{ url('/dashboard/role/add') }}" class="btn btn-xs btn-dark " style="float: right; color:white;"><i class="md md-view-module"></i> Add Role</a>
              </div>
            </div>
        </div>
<br>
<div class="tab-content">
	<div class="tab-pane show active" id="basic-datatable-preview">
		<div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="dataTables_length" id="basic-datatable_length">
						<label class="form-label">Show
							<select name="basic-datatable_length" aria-controls="basic-datatable" class="form-select form-select-sm">
								<option value="10">10</option>
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select> entries</label>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div id="basic-datatable_filter" class="dataTables_filter">
						<label>Search:
							<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatable">
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" aria-describedby="basic-datatable_info" style="position: relative; width: 996px;" >
						<thead>
							<tr>
								<th class="sorting sorting_asc" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 149.8px;" aria-sort="ascending" aria-label="RoleName: activate to sort column descending">Role Name</th>
								<th class="sorting" tabindex="0" aria-controls="basic-datatable" rowspan="1" colspan="1" style="width: 227.8px;" aria-label="Manege: activate to sort column ascending">Manage</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($alldata as $data)


							<tr class="odd">
							    <td>{{ $data->role_name }}</td>
								<td>
                                    <div class="btn-group mb-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Manage <span class="caret"></span> </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{ route('editrole',$data->role_id) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('viewrole',$data->role_id) }}">View</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#dark-header-modal">Delete</a>
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
                                            <p>Are You Sure To Delete Role?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-dark">Yes</button>
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
			<div class="row">
				<div class="col-sm-12 col-md-5">
					<div class="dataTables_info" id="basic-datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
				</div>
				<div class="col-sm-12 col-md-7">
					<div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate">
						<ul class="pagination pagination-rounded">
							<li class="paginate_button page-item previous disabled" id="basic-datatable_previous"><a href="#" aria-controls="basic-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
							<li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
							<li class="paginate_button page-item "><a href="#" aria-controls="basic-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
							<li class="paginate_button page-item "><a href="#" aria-controls="basic-datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
							<li class="paginate_button page-item "><a href="#" aria-controls="basic-datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
							<li class="paginate_button page-item "><a href="#" aria-controls="basic-datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
							<li class="paginate_button page-item "><a href="#" aria-controls="basic-datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
							<li class="paginate_button page-item next" id="basic-datatable_next"><a href="#" aria-controls="basic-datatable" data-dt-idx="7" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
						</ul>
					</div>
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
    <!-- third party css -->
    <link href="{{asset('backend')}}/assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/vendor/fixedHeader.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/vendor/fixedColumns.bootstrap5.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endsection
@section('coustom_js')
    <!-- third party js -->
    <script src="{{asset('backend')}}/assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/buttons.html5.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/buttons.flash.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/buttons.print.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/dataTables.keyTable.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/dataTables.select.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/fixedColumns.bootstrap5.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/vendor/fixedHeader.bootstrap5.min.js"></script>
    <!-- third party js ends -->
@endsection
