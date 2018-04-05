@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        Dashboard
                    <button class="btn btn-info pull-right btn-xs">Load Data By Ajax</button>

                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Full Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript"></script>
@endsection