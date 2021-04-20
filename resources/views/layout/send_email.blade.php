@extends('layout.master')

@section('title')
Dashboard | Recruiting tool
@endsection

@section('content')
<div class="row">
        <div class="col-md-8">
                <div class="card">
                        <div class="card-header">
                                <div class="container box">
                                        <B><h3 align="center">Send Email</h3></B><br />
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
                                                <form method="post" action="{{url('sendemail/send')}}">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                                <label><B>To</B></label>
                                                                <input type="text" name="email" class="form-control" value="" style="border:3px solid #A9A9A9;" />
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
                                                                <input type="submit" name="send" class="btn btn-info" value="Send" />
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

@endsection