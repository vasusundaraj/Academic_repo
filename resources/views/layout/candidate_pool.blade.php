@extends('layout.master')

@section('title')
    Candidate Pool | Microsoft SWE
@endsection

@section('pagename')
  Jobs
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="color: #2a5788"> Candidate Pool | Microsoft Software Engineer </h4>
                    <a href="{{ url()->previous() }}" class="btn btn-default" style="float:right">Back</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th> ID</th>
                                <th> Name</th>
                                <th> Contact</th>
                                <th> E-mail</th>
                                <th> Resume</th>
                                <th> Cover Letter</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> 1</td>
                                <td> John Smith</td>
                                <td> (210) xxx-xxxx</td>

                                <td>
                                        <a data-toggle="dropdown" class="dropdown-toggle"
                                           a href="#"> lsdmkeke2021@gmail.com </a>
                                        <ul class="dropdown-menu" >
                                            <li><a href="/sendemail">Send Now</a></li>
                                            <li><a href="/sendtemplate/">Send Template</a></li>
                                            <li><a href="/getscheduleremails">Set Schedule</a></li>

                                        </ul>

                                </td>


                                <td><a href="{{ asset('uploads/functionalSample.pdf') }}">View Resume</a></td>
                                <td> - </td>
                            </tr>

                            </tbody>
s
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
