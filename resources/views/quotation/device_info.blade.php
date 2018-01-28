@extends('layouts.app')
@section('title','Device Information')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class ="panel panel-default">
                <div class="panel-heading">Provide Device Information</div>

            <div class="panel-body">
                @include('includes.flash')
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/test') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('machine_ty') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Machine Type</label>

                        <div class="col-md-6">
                            <input id="machine_type" type="text" class="form-control" name="machine_type" required>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Model</label>

                        <div class="col-md-6">
                            <input id="model" type="text" class="form-control" name="model" required>

                            @if ($errors->has('model'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('serial') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Serial Number</label>

                        <div class="col-md-6">
                            <input id="serial" type="text" class="form-control" name="serial" required>

                            @if ($errors->has('model'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('serial') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('voltage') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Voltage</label>

                        <div class="col-md-6">
                            <input id="voltage" type="text" class="form-control" name="voltage" required>

                            @if ($errors->has('voltage'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('voltage') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('accessories') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Accessories</label>

                        <div class="col-md-6">
                            <input id="accessories" type="text" class="form-control" name="accessories" required>

                            @if ($errors->has('model'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('accessories') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('fault') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Fault</label>

                        <div class="col-md-6">
                            <input id="fault" type="text" class="form-control" name="fault" required>

                            @if ($errors->has('fault'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fault') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <center>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-ticket"></i> Save Device Info.
                            </button>
                            </center>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        </div>
    </div>






    @endsection