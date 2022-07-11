@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-light" id="dash-daterange">
                            <span class="input-group-text bg-primary border-primary text-white">
                                <i class="mdi mdi-calendar-range font-13"></i>
                            </span>
                        </div>
                     </form>
                </div>
                <h4 class="page-title">Recycle</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12 col-lg-12">

            <div class="row">
                <div class="col-3">
                    <div class="card widget-flat">
                        @php
                            $user = App\Models\User::where('user_status',0)->count();
                        @endphp
                        <a href="{{ route('restoreuser') }}">
                        <div class="card-body" >
                            <div class="float-end">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Deleted User</h5>
                            <h3 class="mt-3 mb-3">{{ $user }}</h3>

                        </div>
                        </a><!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-3">
                    <div class="card widget-flat">
                    @php
                        $feature = App\Models\Feature::where('feature_status',0)->count();
                    @endphp
                    <a href="{{ route('feature_restoredata') }}">
                        <div class="card-body">
                            <div class="float-end">
                                <i class=" uil-sitemap widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Deleted Feature</h5>
                            <h3 class="mt-3 mb-3">{{ $feature }}</h3>

                        </div> <!-- end card-body-->
                    </a>
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-3">
                    <div class="card widget-flat">
                    @php
                        $special = App\Models\Speciality::where('special_status',0)->count();
                    @endphp
                    <a href="{{ route('special_restoredata') }}">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="uil-award widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Deleted Speciality</h5>
                            <h3 class="mt-3 mb-3">{{ $special }}</h3>
                        </div> <!-- end card-body-->
                    </a>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-3">
                    <div class="card widget-flat">
                    @php
                        $menus = App\Models\Menus::where('menus_status',0)->count();
                    @endphp
                    <a href="{{ route('menus_restoredata') }}">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Growth">Deleted Menus</h5>
                            <h3 class="mt-3 mb-3">{{ $menus }}</h3>

                        </div> <!-- end card-body-->
                    </a>
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">

            <div class="row">
                <div class="col-3">
                    <div class="card widget-flat">
                        @php
                            $chef = App\Models\Chef::where('chef_status',0)->count();
                        @endphp
                        <a href="{{ route('chef_restoredata') }}">
                        <div class="card-body" >
                            <div class="float-end">
                                <i class=" uil-user-square widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Deleted Chef</h5>
                            <h3 class="mt-3 mb-3">{{ $chef }}</h3>

                        </div>
                        </a><!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-3">
                    <div class="card widget-flat">
                    @php
                        $reservation = App\Models\Reservation::where('rtable_status',0)->count();
                    @endphp
                    <a href="{{ route('rtable_restoredata') }}">
                        <div class="card-body">
                            <div class="float-end">
                                <i class=" uil-sitemap widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Deleted Reservation</h5>
                            <h3 class="mt-3 mb-3">{{ $reservation }}</h3>

                        </div> <!-- end card-body-->
                    </a>
                    </div> <!-- end card-->
                </div> <!-- end col-->
                <div class="col-3">
                    <div class="card widget-flat">
                    @php
                        $special = App\Models\Speciality::where('special_status',0)->count();
                    @endphp
                    <a href="{{ route('special_restoredata') }}">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="uil-award widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Deleted Speciality</h5>
                            <h3 class="mt-3 mb-3">{{ $special }}</h3>
                        </div> <!-- end card-body-->
                    </a>
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-3">
                    <div class="card widget-flat">
                    @php
                        $menus = App\Models\Menus::where('menus_status',0)->count();
                    @endphp
                    <a href="{{ route('menus_restoredata') }}">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted fw-normal mt-0" title="Growth">Deleted Menus</h5>
                            <h3 class="mt-3 mb-3">{{ $menus }}</h3>

                        </div> <!-- end card-body-->
                    </a>
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->

    </div>
    <!-- end row -->
</div>
@endsection
