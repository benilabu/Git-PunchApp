@extends('frontLayout.app')
@section('title')
Starter Qr login

@stop
@section('styles')
@stop
@section('content')
       <!--Start-- Portfolio Section-->
       <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <br>
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{__("Connection Mode")}}</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/qr2.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div  class="col-md-6 col-lg-4 mb-5">
                    <div  class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div  class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"> 
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/logorfid2.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/keypad1.png" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/game.png" alt="..." />
                    </div>
                </div> -->
                <!-- Portfolio Item 5-->
                <!-- <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="..." />
                    </div>
                </div> -->
                <!-- Portfolio Item 6-->
                <!-- <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="..." />
                    </div>
                </div> -->
            </div>
        </div>
    </section>
     <!--End-- Portfolio Section-->
      <!--Start-- Portfolio Modal 1-2-3 -->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                  <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                  <div class="modal-body text-center pb-5">
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-8">
                                  <!-- Portfolio Modal - Title-->
                                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{__("Login by Qrcode")}}</h2>
                                  <!-- Icon Divider-->
                                  <div class="divider-custom">
                                      <div class="divider-custom-line"></div>
                                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                      <div class="divider-custom-line"></div>
                                  </div>
                                  <!-- Portfolio Modal - Image-->
                               {{--    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." /> --}}
                                  <div class="row justify-content-center" >
                                    <div id="reader" style="width:300px;height:350px"></div>
                                  </div>
                                  <div id="message"></div>
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                  <button class="btn btn-primary" data-bs-dismiss="modal">
                                      <i class="fas fa-xmark fa-fw"></i>
                                      Close Window
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
       <!-- Portfolio Modal 2-->
       <div  class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div  class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{__("Login by card Rfid")}}</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/logorfid1.png" alt="..." />
                                  <form name="formrfid"  class="mb-3" action="{{url('qrLoginByrfid')}}" method="POST">
                                    {!! csrf_field() !!}
                              
                                     <div class="text-center">
                                       <span id="basic-icon-default-fullname2" class="input-group-text">Entrer le Password</span>
                                       <input name="Qrcode_pass" type="text" class="form-control" id="basic-icon-default-fullname" maxlength="10" />
                                    
                                      </div>
                                  </form>
                              
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{__("Login by key")}} </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/keypad2.png" alt="..." /> -->
                                <!-- Portfolio Modal - Text-->
<!-- Start keypad -->
        <div class="bodykey"><div id="jquery-script-menu">
                 <div class="jquery-script-center">
                 
                         <div id="carbon-block"></div>
                       <div class="jquery-script-ads"><script type="text/javascript"></script>
                          <script type="text/javascript" > </script></div>
                          <div class="jquery-script-clear"></div>
                     </div>
                 </div>
                 <br>
            <div id="pinpad">
                <form class="formkey" action="{{url('qrLoginBykeypad')}}" method="POST">
                {!! csrf_field() !!}
                      <input type="password" id="password" name="keypad_pass" /></br>
                      <input type="button" value="1" id="1" class="pinButton calc"/>
                      <input type="button" value="2" id="2" class="pinButton calc"/>
                      <input type="button" value="3" id="3" class="pinButton calc"/><br>
                      <input type="button" value="4" id="4" class="pinButton calc"/>
                      <input type="button" value="5" id="5" class="pinButton calc"/>
                      <input type="button" value="6" id="6" class="pinButton calc"/><br>
                      <input type="button" value="7" id="7" class="pinButton calc"/>
                      <input type="button" value="8" id="8" class="pinButton calc"/>
                      <input type="button" value="9" id="9" class="pinButton calc"/><br>
                      <input type="button" value="clear" id="clear" class="pinButton clear"/>
                      <input type="button" value="0" id="0 " class="pinButton calc"/>
                      <input type="submit" value="enter" id="enter" class="pinButton enter"/>
                 </form>
             </div>
             <br>
       </div>
<!-- End keypad -->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--End-- Portfolio Modal 1-2-3 -->
    <!-- Header -->
    <div class="container-fluid header_se">
      <div class="col-md-2">
       
      </div>
   
         
          @if(!Sentinel::getUser())
          <div> </div>
      @else
        <h1>Bonjour! {{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}</h1>
        <h1 style="color: green">Votre temps est entrée avec succés</h1>
      @endif
       </div>
      
    </div>
    <!-- /.Header -->
@endsection
{{-- @if( !Sentinel::getUser()) --}}
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('/qr_login/jsqrcode-combined.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/qr_login/html5-qrcode.min.js') }}"></script>

<script type="text/javascript">
   $('#reader').html5_qrcode(function(data){
        $('#message').html('<span class="text-success send-true">Scanning now....</span>');
        $('#reader').html('<span class="text-success send-true">Patientez....</span>');
        if (data!='') {
                 $.ajax({
                    type: "POST",
                    cache: false,
                    url : "{{action('QrLoginController@checkUser')}}",
                    data: {"_token": "{{ csrf_token() }}",data:data},
                        success: function(data) {
                          console.log(data);
                          if (data==1) {
                            //location.reload()
                            $(location).attr('href', '{{url('qrLogin')}}');
                          }else{
                           return confirm("il n'existe pas d'utilisateur ayant ce qr code"); 
                          }
                        
                          // 
                        }
                    })

        }else{return confirm('There is no  data');}
    },
    function(error){
       $('#message').html('Scaning now ....'  );
    }, function(videoError){
       $('#message').html('<span class="text-danger camera_problem"> there was a problem with your camera </span>');
    }
);
</script>
<script>
 function activefocus()
    {
        console.log('sot');
        document.formrfid.Qrcode_pass.focus();
    }
                                        
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="./js/app.js"></script>
<script>
    $(document).ready(function () {
  const input_value = $("#password");

  //disable input from typing

  $("#password").keypress(function () {
    return false;
  });

  //add password
  $(".calc").click(function () {
    let value = $(this).val();
    field(value);
  });
  function field(value) {
    input_value.val(input_value.val() + value);
  }
  $("#clear").click(function () {
    input_value.val("");
  });
  $("#enter").click(function () {
    alert("Your password " + input_value.val() + " added");
  });
});

</script>



<style>

.lead { margin: 30px auto; text-align: center; color: #fff; }
* {
box-sizing: border-box;
margin: 0;
padding: 0;
font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.bodykey {
background-color: #2c3e50;
}

.formkey{
width: 390px;
margin: 50px auto;
background: #fff;
padding: 35px 25px;
text-align: center;
box-shadow: 0px 5px 5px -0px rgba(0, 0, 0, 0.3);
border-radius: 5px;
}

input[type="password"] {
padding: 0 40px;
border-radius: 5px;
width: 350px;
margin: auto;
border: 1px solid rgb(228, 220, 220);
outline: none;
font-size: 60px;
color: transparent;
text-shadow: 0 0 0 rgb(71, 71, 71);
text-align: center;
}

input:focus {
outline: none;
}

.pinButton {
border: none;
background: none;
font-size: 1.5em;
border-radius: 50%;
height: 60px;
font-weight: 550;
width: 60px;
color: transparent;
text-shadow: 0 0 0 rgb(102, 101, 101);
margin: 7px 20px;
}

.clear,
.enter {
font-size: 1em !important;
}

.pinButton:hover {
box-shadow: #506ce8 0 0 1px 1px;
}
.pinButton:active {
background: #506ce8;
color: #fff;
}
.clear:hover {
box-shadow: #ff3c41 0 0 1px 1px;
}
.clear:active {
background: #ff3c41;
color: #fff;
}
.enter:hover {
box-shadow: #47cf73 0 0 1px 1px;
}
.enter:active {
background: #47cf73;
color: #fff;
}

</style>


@endsection
{{-- @endif --}}
