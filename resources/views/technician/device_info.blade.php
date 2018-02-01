@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    #{{$electronics->serial }} - {{$electronics->model}}
                </div>

                <div class="panel-body">
                    @include('includes.flash')
                    <form class="form-horizontal" role="form" method="post" action="{{url('/')}}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                            <label for="model" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="{{ $electronics->model }}" required>

                                @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('machine_type') ? ' has-error' : '' }}">
                            <label for="machine_type" class="col-md-4 control-label">Machine Type</label>

                            <div class="col-md-6">
                                <select id="machine_type" type="machine_type" class="form-control" name="machine_type">
                                    <option value="">Select Category</option>

                                        <option >{{ $electronics->machine_type }}</option>

                                </select>

                                @if ($errors->has('machine_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('machine_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Priority</label>

                            <div class="col-md-6">
                                <select id="priority" type="" class="form-control" name="priority">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>

                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <textarea rows="10" id="message" class="form-control" name="message" required></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="model" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" value="1500" required>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <center>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Complete Transaction
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