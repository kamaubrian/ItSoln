@extends ('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket">My Devices</i>
                </div>

                <div class="panel-body">
                    @if($electronics->isEmpty())
                        <p>No Device has been Registered on this System</p>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Machine Type</th>
                                <th>Model</th>
                                <th>Serial</th>
                                <th>Voltage</th>
                                <th>Fault</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($electronics as $electronic => $value)
                                <tr>
                                    <td>
                                        {{$value->machine_type}}
                                    </td>
                                    <td>
                                        {{$value->model}}
                                    </td>
                                    <td>
                                        @if($value->status==='pending')
                                            <span>{{$value->serial}}</span>
                                        @else
                                        <a href="">
                                        {{$value->serial}}
                                        </a>
                                            @endif

                                    </td>
                                    <td>
                                        {{$value->voltage}}
                                    </td>
                                    <td>{{$value->fault}}</td>
                                    <td>

                                        @if($value->status ==='pending')
                                            <span class="label label-danger">{{$value->status}}</span>
                                        @else
                                            <span class="label label-success">{{$value->status}}</span>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach

                        </tbody>
                    </table>
                        {{$electronics->render()}}
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection