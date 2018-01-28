@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Setup Device Information</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome to IT SOLUTIONS.
                    <p>
                        <a href="{{url('/test_device')}}">1. Setup Device Information</a>
                    </p>

                    <p>
                        <a href="{{'/my_devices'}}">2. See Devices</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
