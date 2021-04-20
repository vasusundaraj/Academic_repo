@extends('layout.general')

@section('title')
    Jobs View | Recruiting tool
@endsection

@section('content')

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="addnewjob" tabindex="-1" role="dialog" aria-labelledby="addnewjobLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewjobLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> Company Name </label>
                        <input type="text" name="companyname" class="form-control" placeholder="Enter Company Name">
                    </div>
                    <div class="form-group">
                        <label> Job Description </label>
                        <input type="text" name="jobdescription" class="form-control"
                               placeholder="Enter Job Description">
                    </div>
                    <div class="form-group">
                        <label> Est. Pay Range </label>
                        <input type="text" name="Estimated Pay Range" class="form-control" placeholder="App deadline">
                    </div>
                    <div class="form-group">
                        <label> Employment Type </label>
                        <input type="text" name="Employment Type" class="form-control" placeholder="App deadline">
                    </div>
                    <div class="form-group">
                        <label> Application Deadline </label>
                        <input type="text" name="applicationdeadline" class="form-control" placeholder="App deadline">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <button type="button" style="margin: 25px" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#addnewjob">
                    Add New Job
                </button>
                <div class="card-header">
                    <h4 class="card-title"> All Jobs </h4>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card flex-row flex-wrap">
                                    <div class="card-header border-0">

                                            <img src="{{ asset('uploads/microsoft_logo.png') }}" class="card-img"
                                                 style="max-height: 80px; max-width: 80px;" alt="" align="right">
                                            <h5 class="card-title"> Microsoft </h5>


                                        <h4 class="card-subtitle" style="color: #2a5788"> Software Engineer </h4>
                                        <table>
                                            <tr>
                                                <th scope="row"> {{ $pay_range }} </th>
                                                <td> $81,000/yr - $142,000/yr</td>

                                            </tr>
                                            <tr>
                                                <th scope="row"> {{ $employment_type }} </th>
                                                <td> Full-time</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-body">


                                    <p class="card-text" style="border: 3px ;padding: 1em; background-color:lightgrey">
                                        {{ \Illuminate\Support\Str::limit($microsoft_jd, 250) }}
                                    </p>
                                    <button class="btn btn-success"
                                            onclick=" window.location='{{ route("candidatepool") }}'">
                                        Candidate Pool
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card flex-row flex-wrap">
                                    <div class="card-header border-0">
                                        <img src="{{ asset('uploads/google_logo.png') }}" class="card-img"
                                             style="max-height: 80px; max-width: 80px;" alt="" align="right">
                                        <h5 class="card-title"> Google </h5>
                                        <h4 class="card-subtitle" style="color: #2a5788"> UX Program Manager,
                                            UX Programs & Operations </h4>
                                        <table>
                                            <tr>
                                                <th scope="row"> {{ $pay_range }} </th>
                                                <td> Unavailable</td>

                                            </tr>
                                            <tr>
                                                <th scope="row"> {{ $employment_type }} </th>
                                                <td> Full-time</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <p class="card-text" style="border: 3px ;padding: 1em; background-color:#d3d3d3">
                                        {{ \Illuminate\Support\Str::limit($google_jd, 250) }}
                                    </p>
                                    <button class="btn btn-success"
                                            onclick=" window.location='{{ route("candidatepool") }}'">
                                        Candidate Pool
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card flex-row flex-wrap">
                                    <div class="card-header border-0">
                                        <img src="{{ asset('uploads/apple_logo.png') }}" class="card-img-top"
                                             style="max-height: 80px; max-width: 80px;" alt="" align="right">
                                        <h5 class="card-title"> Apple </h5>
                                        <h4 class="card-subtitle" style="color: #2a5788">
                                            IS&T Early Career Development Program </h4>
                                        <table>
                                            <tr>
                                                <th scope="row"> {{ $pay_range }} </th>
                                                <td> Unavailable</td>

                                            </tr>
                                            <tr>
                                                <th scope="row"> {{ $employment_type }} </th>
                                                <td> Full-time</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <p class="card-text" style="border: 3px ;padding: 1em; background-color:lightgrey">
                                        {{ \Illuminate\Support\Str::limit($apple_jd, 250) }}
                                    </p>
                                    <button class="btn btn-success"
                                            onclick=" window.location='{{ route("candidatepool") }}'">
                                        Candidate Pool
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection



