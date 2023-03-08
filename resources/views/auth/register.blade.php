@extends('frontLayout.app')
@section('title')
Register
@stop
@section('content')
<style>
  .help-block{
    color:red;
  }
</style>
        <!--Start-- Contact Section-->
        <section class="page-section" id="contact">
          <div class="container">
              <!-- Contact Section Heading-->
              <br>
              <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('Register Me') }}</h2>
              <!-- Icon Divider-->
              <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                  <div class="divider-custom-line"></div>
              </div>
              <!-- Contact Section Form-->
              <div class="row justify-content-center">
                  <div class="col-lg-8 col-xl-7">
                    @if (Session::has('message'))
                    <div class="alert alert-{{(Session::get('status')=='error')?'danger':Session::get('status')}} " alert-dismissable fade in id="sessions-hide">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>{{Session::get('status')}}!</strong> {!! Session::get('message') !!}
                     </div>
                   @endif 
                    {{ Form::open(array('url' => route('register'), 'class' => 'form-horizontal form-signin','files' => true)) }}    
                       {!! csrf_field() !!}
                   
                          <!--First Name input-->
                        <div class="form-group  {{ $errors->has('first_name') ? 'has-error' : ''}}">
                          <div class="form-floating mb-3" >
                              {!! Form::text('first_name', null, ['class' => 'form-control','placeholder '=>'Enter your firtst name']) !!}
                              <label for="name"> <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span> First Name</label>
                              <div class="invalid-feedback" data-sb-feedback="name:required">A First name is required.</div>
                          </div>
                          {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                        </div>
                            <!--Last Name input-->
                          <div class="form-group  {{ $errors->has('last_name') ? 'has-error' : ''}}"> 
                            <div class="form-floating mb-3">
                              {!! Form::text('last_name', null, ['class' => 'form-control','placeholder '=>'Enter your last name']) !!}
                              <label for="name"> <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span> Last Name</label>
                              <div class="invalid-feedback" data-sb-feedback="name:required">A Last name is required.</div>
                          </div>
                          {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                        </div>
                          <!-- Email address input-->
                        <div class="form-group  {{ $errors->has('email') ? 'has-error' : ''}}">
                          <div class="form-floating mb-3">
                            {!! Form::email('email', null, ['class' => 'form-control','placeholder '=>'E-mail']) !!}
                              <label for="email">  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span> Email address</label>
                              <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                              <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                          </div>
                          {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                          <!-- Phone number input-->
                          <div class="form-floating mb-3">
                              <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                              <label for="phone">Phone number</label>
                              <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                          </div>
                          <!-- Password input-->
                        <div class="form-group  {{ $errors->has('password') ? 'has-error' : ''}}">
                          <div class="form-floating mb-3">
                            {!! Form::password('password', ['class' => 'form-control','rel'=>'gp' ,'data-size'=>'10' ,'data-character-set'=>'a-z,A-Z,0-9,#' ,'placeholder '=>'Enter your Password']) !!}
                
                              <label for="password">    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>  Password</label>
                              <div class="invalid-feedback" data-sb-feedback="message:required">Enter your Password.</div>
                          </div>
                          {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                          <!-- Password input-->
                        <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                          <div class="form-floating mb-3">
                            {!! Form::password('password_confirmation', ['class' => 'form-control','rel'=>'gp' ,'data-size'=>'10' ,'data-character-set'=>'a-z,A-Z,0-9,#' ,'placeholder '=>'Confirm your Password']) !!}
                
                            <label for="passwordsecond">   <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span> Confirm Password</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Confirm your Password.</div>
                        </div>
                        {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                      </div>
                          <!-- Submit success message-->
                          <!---->
                          <!-- This is what your users will see when the form-->
                          <!-- has successfully submitted-->
                          <div class="d-none" id="submitSuccessMessage">
                              <div class="text-center mb-3">
                                  <div class="fw-bolder">Form submission successful!</div>
                                  To activate this form, sign up at
                                  <br />
                                  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                              </div>
                          </div>
                          <!-- Submit error message-->
                          <!---->
                          <!-- This is what your users will see when there is-->
                          <!-- an error submitting the form-->
                          <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                          <!-- Submit Button-->
                          
            <div class="form-group  {{ $errors->has('password') ? 'has-error' : ''}} ">
                          <button class="btn btn-primary btn-xl " id="" type="submit">Send</button>
            </div>
            <div class="login-register">
              <a href="{{url('login')}}">Login</a>
              @if ($errors->has('global'))
              <span class="help-block danger">
                  <strong style="color:red" >{{ $errors->first('global') }}</strong>
              </span>
            @endif 
      </div>
                          {{ Form::close() }}   
                  </div>
              </div>
          </div>
      </section>
  <!--End-- Contact Section-->





@endsection

@section('scripts')


@endsection