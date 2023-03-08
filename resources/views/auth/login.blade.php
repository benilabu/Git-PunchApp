@extends('frontLayout.app')
@section('title')
Login
@stop
@section('content')

 <!--Start-- Masthead-->
 <div class="masthead bg-primary text-white text-center">
  <div class="container d-flex align-items-center flex-column">
      <!-- Masthead Avatar Image-->
      <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
      <!-- Masthead Heading-->
      <h1 class="masthead-heading text-uppercase mb-0">{{__("Welcome Back! Please Sign In")}}</h1>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
      </div>
  
  </div>
<!--Start-- Form login-->
<div class = "row justify-content-center">
  <div class="col-lg-8 col-xl-7">
    @if (Session::has('message'))
     <div class="alert alert-{{(Session::get('status')=='error')?'danger':Session::get('status')}} " alert-dismissable fade in id="sessions-hide">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>{{Session::get('status')}}!</strong> {!! Session::get('message') !!}
      </div>
    @endif 
    {{ Form::open(array('url' => route('login'), 'class' => 'form-horizontal form-signin','files' => true)) }}    
     
    
        {!! csrf_field() !!}
        <div class="form-group  {{ $errors->has('email') ? 'has-error' : ''}}">
          <div class="form-floating mb-3">
            {!! Form::email('email', null, ['class' => 'form-control','placeholder '=>'E-mail']) !!}
              <label for="email">  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span> Email address</label>
          </div>
          {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group  {{ $errors->has('password') ? 'has-error' : ''}}">
          <div class="form-floating mb-3">
            {!! Form::password('password', ['class' => 'form-control','rel'=>'gp' ,'data-size'=>'60' ,'data-character-set'=>'a-z,A-Z,0-9,#' ,'placeholder '=>'Enter your Password']) !!}

              <label for="password">    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>  Password</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">Enter your Password.</div>
          </div>
          {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>    
       
        <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">Login</button>
      
        <div class="login-register">
                <a style="color:black"  href="{{url('register')}}">Register</a>
                <a style="color:black"  href="{{url('password/reset')}}">Forget Password</a>
                <br>
                @if ($errors->has('global'))
                <span class="help-block danger">
                    <strong style="color:red" >{{ $errors->first('global') }}</strong>
                </span>
              @endif 
        </div>     
    </form>
    
  </div>
</div>
<!--End-- Form login-->

</div>
<!--End-- Masthead-->

@endsection

@section('scripts')


@endsection