@extends('layout.master')

@section('title')
    Send Email Template
@endsection

@section('pagename')
  Send Email Template
@endsection

@section('content')

    <!-- Button trigger modal -->


    <!-- Modal -->

    @if($layout == 'index')
        <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <a href="{{ url()->previous() }}" class="btn btn-default float-right">
                    Back</a>
                <div class="card-header">
                    <h4 class="card-title" style="color: #2a5788" >
                    Available Email Templates </h4>

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
                                        <a href="{{ url('/sendtemplate/edit/'.$emailtemplate->id) }}" >
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
    @elseif($layout == 'edit')
    <div class="row">
      <div class="col-md-12">
          <div class="card">
                  <a href="{{ url()->previous() }}" class="btn btn-default float-right">
                  Back</a>
                  <div class="card-header">
                      <h4 class="card-title" style="color: #2a5788" >
                      Send Email Templates </h4>

                  </div>
                  <div class="card-body">

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
                <form action="{{ url('/sendtemplate/send') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-body" style="height:100%">
                  <div class="form-group">
                          <label>To</label>
                          <input type="text" name="email" class="form-control" value="lsdmkeke2021@gmail.com"  />
                  </div>
                    <div class="form-group">
                        <label> Subject </label>
                        <input value="{{ $emailtemplate->templateName }}" name="subject" type="text" class="form-control"  placeholder="Enter your template name" >
                    </div>
                    <div class="form-group" style="height:100%">
                        <label> Body </label>
                        <textarea name="message" class="form-control" rows="10" id="comment" ><?php echo $emailtemplate->templateBody;?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Send">
                    <a href="{{ url('/sendtemplate/') }}" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                </div>
                </form>
              </div>
            </div>
        </div>
    </div>
    @endif
@endsection
