@extends('layouts.login')


@section('content')


      <div class="login-box-body">

            <p class="login-box-msg">Sign in to Tymr</p>

            <form class="form-horizontal" method="POST" action="{{ route('user.login.submit') }}">

                {{ csrf_field() }}


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @if ($errors->has('email'))

                        <span class="help-block">

                            <strong>{{ $errors->first('email') }}</strong>

                        </span>

                    @endif    
                </div>
                                

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                        @if ($errors->has('password'))

                            <span class="help-block">

                                <strong>{{ $errors->first('password') }}</strong>

                            </span>

                        @endif         
                </div>



                <div class="row">

                        <div class="col-xs-8">
                              <div class="checkbox icheck">
                                <label>
                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                              </div>
                        </div>


                        <!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                </div>
            </form>

      </div>

@endsection
