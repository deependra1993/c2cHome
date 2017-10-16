@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('/adminRegister') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('aUser') ? ' has-error' : '' }}">
                            <label for="aUser" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="aUser" type="text" class="form-control" name="name" value="{{ old('aUser') }}" required autofocus>

                                @if ($errors->has('aUser'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aUser') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('aPassword') ? ' has-error' : '' }}">
                            <label for="aPassword" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="aPassword" type="password" class="form-control" name="password" required>

                                @if ($errors->has('aPassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aPassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
