@extends('layout.master')

@section('title')
Dashboard | Recruiting tool
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="https://demos.codexworld.com/add-date-time-picker-input-field-jquery/jquery.datetimepicker.css"/>
<div class="row">
        <div class="col-md-8">
                <div class="card">
                        <div class="card-header">
                                <div class="container box">
                                     @if ($message = Session::get('success'))

                                                <div class="alert alert-success alert-block">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <strong>{{ $message }}</strong>
                                                </div>
                                                @endif
                                        <B><h3 align="center">Email Scheduled List</h3></B><br />

                            </div>
                        </div>
                        @if (count($schedulesData) > 0)

                        <div class="card-body">
                                <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                          <th>
                                                 Email
                                          </th>
                                          <th>
                                                 Subject
                                          </th>
                                          <th>
                                                 Body
                                          </th>
                                          <th>
                                                 Date Added
                                          </th>
                                      </tr>
                                      <tbody>
                                         @foreach($schedulesData as $list)
                                        <tr>

                                            <td>{{ $list->email }}</td>
                                            <td>{{ $list->subject }}</td>
                                            <td>{{ $list->body }}</td>
                                            <td>{{ $list->sche_time }}</td>
                                        </tr>
                                         @endforeach
                                      </tbody>
                                        </table>

                                </div>
                        </div>
                         @endif
                         <button class="btn btn-success">
                                       <a href="/scheduler" style="color:#ffffff">Create a new Schedule</a>
                                       </button>
                        <button class="btn btn-success"> 
                                       <a href="/scheduleemail" style="color:#ffffff">Run schedule</a>
                                       </button>
                </div>
        </div>
</div>

@endsection
