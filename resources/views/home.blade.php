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
                        @if(Auth::user()->is_technician!==0)
                    <p>
                        <a href="{{'/'}}">2. See Devices</a>
                    </p>
                       @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
