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
                                        <a href="">
                                        {{$value->serial}}
                                        </a>

                                    </td>
                                    <td>
                                        {{$value->voltage}}
                                    </td>
                                    <td>{{$value->fault}}</td>
                                </tr>
                                @endforeach

                        </tbody>
                    </table>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection