@extends('layout.master')

@section('title')
    Candidate Pool | Microsoft SWE
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
                                    <a class="context-menu-one" href="#"> test_email@gmail.com </a>
                                    <div id="contextMenu" class="context-menu"
                                         style="display:none">
                                        <ul>
                                            <li><a href="/sendemail">Send Now</a></li>
                                            <li><a href="#">Send Template</a></li>
                                            <li><a href="#">Set Schedule</a></li>

                                        </ul>
                                    </div>
                                    <script>
                                        document.onclick = hideMenu;
                                        document.oncontextmenu = rightClick;

                                        function hideMenu() {
                                            document.getElementById(
                                                "contextMenu").style.display = "none"
                                        }

                                        function rightClick(e) {
                                            e.preventDefault();

                                            if (document.getElementById(
                                                "contextMenu").style.display == "block")
                                                hideMenu();
                                            else {
                                                var menu = document
                                                    .getElementById("contextMenu")

                                                menu.style.display = 'block';
                                                menu.style.left = e.pageX + "px";
                                                menu.style.top = e.pageY + "px";
                                            }
                                        }
                                    </script>
                                </td>


                                <td><a href="{{ asset('uploads/functionalSample.pdf') }}">View Resume</a></td>
                                <td> -</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
