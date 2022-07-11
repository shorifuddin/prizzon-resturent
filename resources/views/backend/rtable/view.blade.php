@extends('layouts.admin')
@section('content')

<div class="row container">
    <div class="col-md-12 container">
      <div class="card">
        <div class="card-header bg-secondary card_header">
            <div class="row">
              <div class="col-md-8 card_header_title" style="font-weight: 400; font-size:16px;">
                <i class="md md-add-circle "></i> Reservation Information
              </div>
              <div class="col-md-4 card_header_btn ">
                <a href="{{ route('rtable_approved') }}" class="btn btn-xs btn-dark " ><i class="md md-view-module"></i> Approved Reservation </a>
              </div>
            </div>
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <table class="table table-bordered table-hover table-striped view_custom_table">
                  <tr>
                    <td>Reservation Time</td>
                    <td>:</td>
                    <td>{{ $data->rtable_time }}</td>
                  </tr>
                  <tr>
                    <td>Reservation Member</td>
                    <td>:</td>
                    <td>{{ $data->rtable_member }}</td>
                  </tr>
                  <tr>
                    <td>Reservation Date</td>
                    <td>:</td>
                    <td>{{ $data->rtable_date }}</td>
                  </tr>
                  <tr>
                    <td>Reservation Phone</td>
                    <td>:</td>
                    <td>{{ $data->rtable_phone }}</td>
                  </tr>
                  <tr>
                    <td>Reservation Name</td>
                    <td>:</td>
                    <td>{{ $data->rtable_name }}</td>
                  </tr>
                  <tr>
                    <td>Reservation Email</td>
                    <td>:</td>
                    <td>{{ $data->rtable_email }}</td>
                  </tr>
                  <tr>
                    <td>Reservation Massage</td>
                    <td>:</td>
                    <td>{{ $data->rtable_sms }}</td>
                  </tr>
                  <tr>
                    <td>Reservation Status</td>
                    <td>:</td>
                    <td> @if ($data->rtable_status==0)
                        Pending
                        @else
                        Approved
                        @endif
                    </td>
                  </tr>
              </table>
            </div>
            <div class="col-md-2"></div>
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
