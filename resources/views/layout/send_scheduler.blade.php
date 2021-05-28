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
                                        <B><h3 align="center">Schedule Email</h3></B><br />
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                </ul>
                                        </div>
                                        @endif
                                        @if ($message = Session::get('success'))

                                                <div class="alert alert-success alert-block">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <strong>{{ $message }}</strong>
                                                </div>
                                                @endif
                                                <form method="post" action="{{url('scheduler/send')}}" autocomplete="off">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                                <label><B>Email</B></label>
                                                                <input type="Email" name="email" class="form-control" value="lsdmkeke2021@gmail.com" style="border:3px solid #A9A9A9;" />
                                                        </div>
                                                        <div class="form-group">
                                                                <label><B>Subject</B></label>
                                                                <input type="text" name="subject" class="form-control" value="" style="border:3px solid #A9A9A9;" />
                                                        </div>
                                                        <div class="form-group">
                                                                <label><B>Body</B></label>
                                                                <textarea name="message" class="form-control" rows="30" style="border:3px solid #A9A9A9;"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                                <label><B>Schedule Mail : Date & Time</B></label>
                                                                <input type="text" name="datetimepicker" id="datetimepicker1" class="form-control" style="border:3px solid #A9A9A9;">
                                                        </div>
                                                        <div class="form-group">
                                                                <input type="submit" name="send" class="btn btn-info" value="Save" />
                                                        </div>
                                                </form>

                                </div>
                        </div>
                        <div class="card-body">
                                <div class="table-responsive">
                                        <table class="table">

                                        </table>
                                </div>
                        </div>
                </div>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://demos.codexworld.com/add-date-time-picker-input-field-jquery/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
$('#datetimepicker1').datetimepicker({
    format:'Y-m-d H:i',
});
</script>
@endsection
