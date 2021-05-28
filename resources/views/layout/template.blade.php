@extends('layout.master')

@section('title')
    Email Templates
@endsection

@section('pagename')
  Email Templates
@endsection

@section('content')

    <!-- Button trigger modal -->


    <!-- Modal -->
    @if($layout == 'index')
    <div class="modal fade" id="addnewtemplate" tabindex="-1" role="dialog" aria-labelledby="addnewtempltateLable"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewtemplateLabel">Add New Email Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/emailtemplate/store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label> Subject </label>
                        <input type="text" name="templateName" class="form-control" placeholder="Enter your email subject"></input>
                    </div>
                    <div class="form-group">
                        <label> Body </label>
                        <textarea name="templateBody" class="form-control"  placeholder="Enter your email body" rows="10" id="comment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <a href="{{ url()->previous() }}" class="btn btn-default float-right">
                    Back</a>
                <div class="card-header">
                    <h4 class="card-title" style="color: #2a5788" >
                    Email Templates </h4>
                    <button type="button" style="margin: 25px" class="btn btn-primary" data-toggle="modal"
                        data-target="#addnewtemplate">
                    Add New Template
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width = "100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th> Templates </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($emailtemplates as $emailtemplate)
                                <tr>
                                    <td style="color:navy">
                                        <a href="{{ url('/emailtemplate/show/'.$emailtemplate->id) }}" >
                                            {{ $emailtemplate->templateName }}
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <a href="{{ url()->previous() }}" class="btn btn-default float-right">
                    Back</a>
                <div class="card-header">
                    <h4 class="card-title" id="showtemplateLabel" style="color: #2a5788" >{{$emailtemplate->templateName}} Details</h4>
                </div>
                <form action="{{ url('/emailtemplate/delete/'.$emailtemplate->id) }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label> Subject </label>
                        <input value="{{ $emailtemplate->templateName }}" name="templateName" type="text" class="form-control"  placeholder="Enter your template name" readonly>
                    </div>
                    <div class="form-group">
                        <label> Body </label>
                        <textarea name="templateBody" class="form-control" rows="10" id="comment" readonly>{{ $emailtemplate->templateBody }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/emailtemplate/edit/'.$emailtemplate->id) }}" class="btn btn-secondary">Edit</a>
                    <input type="submit" class="btn btn-primary" data-dismiss="modal" value="Delete">
                </div>
                </form>
            </div>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <a href="{{ url()->previous() }}" class="btn btn-default float-right">
                    Back</a>
                <div class="card-header">
                    <h4 class="card-title" id="showtemplateLabel" style="color: #2a5788">Update {{$emailtemplate->templateName}} Details</h4>
                </div>
                <form action="{{ url('/emailtemplate/update/'.$emailtemplate->id) }}" method="post">
                @csrf
                <div class="card-body" style="height:100%">
                    <div class="form-group">
                        <label> Subject </label>
                        <input value="{{ $emailtemplate->templateName }}" name="templateName" type="text" class="form-control"  placeholder="Enter your template name" >
                    </div>
                    <div class="form-group" style="height:100%">
                        <label> Body </label>
                        <textarea name="templateBody" class="form-control" rows="10" id="comment" > {{ $emailtemplate->templateBody }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Update">
                    <a href="{{ url('/emailtemplate/show/'.$emailtemplate->id) }}" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endif

@endsection
