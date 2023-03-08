

@extends('frontLayout.app')
@section('title')
Starter Qr login

@stop
@section('style')
<link href=" {{ URL::asset('/qr_login/option2/css/style.css') }}" rel="stylesheet">
@stop
@section('content')

        <!--Start-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                 
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Start Bootstrap</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
               <!--start-- camera-->
               <div class="container" id="QR-Code">
               {{--  @if(!Sentinel::getUser()) --}}
                  
                  <div class="col-md-6">
                   {{--    <div class="well" style="position: relative;display: inline-block;">
                          <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                          <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                          <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                          <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                          <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                      </div> --}}
                  {{--     <div class="well" style="width: 100%;">
                          <label id="zoom-value" width="100">Zoom: 2</label>
                          <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                          <label id="brightness-value" width="100">Brightness: 0</label>
                          <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                          <label id="contrast-value" width="100">Contrast: 0</label>
                          <input id="contrast" onchange="Page.changeContrast();" type="range" min="-128" max="128" value="0">
                          <label id="threshold-value" width="100">Threshold: 0</label>
                          <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                          <label id="sharpness-value" width="100">Sharpness: off</label>
                          <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                          <label id="grayscale-value" width="100">grayscale: off</label>
                          <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                          <br>
                          <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                          <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                          <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                          <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
                      </div> --}}
                  </div>
                  <div class="col-md-6">
                     {{--  <select class="form-control" id="camera-select"></select>
                      <div class="form-group">
                         
                          <button title="Decode Image" style="background-color:rgb(135, 141, 137)" class="btn btn-outline-light btn-social mx-1" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span><i class="fab fa fa-download"></i></button>
                          <button title="Image shoot" style="background-color:blue" class="btn btn-outline-light btn-social mx-1" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span><i class=" fa fa-file-image-o"></i></button>
                          <button title="Play" style="background-color:darkcyan" class="btn btn-outline-light btn-social mx-1" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span><i class="fab fa fa-play"></i></button>
                          <button title="Pause" style="background-color:chocolate" class="btn btn-outline-light btn-social mx-1" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span><i class="fab fa fa-pause"></i></button>
                          <button title="Stop streams" style="background-color: brown" class="btn btn-outline-light btn-social mx-1" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span><i class="fab fa fa-stop"></i></button>

                       </div>

      
                      <div class="thumbnail" id="result">
                          <div class="well">
                              <img width="320" height="240" id="scanned-img" src="">
                          </div>
                          <div class="caption">
                              <h3>Scanned result</h3>
                              <p id="scanned-QR"></p>
                          </div>
                      </div> --}}
                  </div>
             {{--   @else
                  <h1>Hallo! {{Sentinel::getUser()->first_name}}</h1>
                @endif --}}
      
       </div>
                <!--end-- camera-->
             
            </div>
        </header>
        <!--End-- Masthead-->


          <!-- Portfolio Section-->
          <section class="page-section portfolio" id="portfolio">
            <div class="container" id="QR-Code">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{__("Connect Qr code")}}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    @if(!Sentinel::getUser())
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="well" style="position: relative;display: inline-block;">
                                <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                                <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="well" style="width: 100%;">
                                <label id="zoom-value" width="100">Zoom: 2</label>
                                <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                                <label id="brightness-value" width="100">Brightness: 0</label>
                                <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                                <label id="contrast-value" width="100">Contrast: 0</label>
                                <input id="contrast" onchange="Page.changeContrast();" type="range" min="-128" max="128" value="0">
                                <label id="threshold-value" width="100">Threshold: 0</label>
                                <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                                <label id="sharpness-value" width="100">Sharpness: off</label>
                                <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                                <label id="grayscale-value" width="100">grayscale: off</label>
                                <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                                <br>
                                <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                                <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                                <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                                <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <select class="form-control" id="camera-select"></select>
                            <div class="form-group">
                               
                                <button title="Decode Image" style="background-color:rgb(135, 141, 137)" class="btn btn-outline-light btn-social mx-1" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span><i class="fab fa fa-download"></i></button>
                                <button title="Image shoot" style="background-color:blue" class="btn btn-outline-light btn-social mx-1" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span><i class="fa fa-file-image-o"></i></button>
                                <button title="Play" style="background-color:darkcyan" class="btn btn-outline-light btn-social mx-1" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span><i class="fab fa fa-play"></i></button>
                                <button title="Pause" style="background-color:chocolate" class="btn btn-outline-light btn-social mx-1" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span><i class="fab fa fa-pause"></i></button>
                                <button title="Stop streams" style="background-color: brown" class="btn btn-outline-light btn-social mx-1" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span><i class="fab fa fa-stop"></i></button>
      
                             </div>
      
            
                            <div class="thumbnail" id="result">
                                <div class="well">
                                    <img width="320" height="240" id="scanned-img" src="">
                                </div>
                                <div class="caption">
                                    <h3>Scanned result</h3>
                                    <p id="scanned-QR"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <h1>Hallo! {{Sentinel::getUser()->first_name}}</h1>
          @endif
        </section>




@endsection

@if( !Sentinel::getUser())
@section('scripts')
<script type="text/javascript" src=" {{ URL::asset('/qr_login/option2/js/filereader.js') }}"></script>
<script type="text/javascript" src=" {{ URL::asset('/qr_login/option2/js/qrcodelib.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/qr_login/option2/js/webcodecamjs.js ') }}"></script>

<script>
 function CallAjaxLoginQr(code) {
      $.ajax({
            type: "POST",
            cache: false,
            url : "{{action('QrLoginController@checkUser')}}",
            data: {data:code},
                success: function(data) {
                  console.log(data);
                  if (data==1) {
                    //location.reload()
                    $(location).attr('href', '{{url('/')}}');
                  }else{
                   return confirm('There is no user with this qr code'); 
                  }
                  // 
                }
            })
 }

(function(undefined) {
    "use strict";

    function Q(el) {
        if (typeof el === "string") {
            var els = document.querySelectorAll(el);
            return typeof els === "undefined" ? undefined : els.length > 1 ? els : els[0];
        }
        return el;
    }
    var txt = "innerText" in HTMLElement.prototype ? "innerText" : "textContent";
    var scannerLaser = Q(".scanner-laser"),
        imageUrl = new Q("#image-url"),
        play = Q("#play"),
        scannedImg = Q("#scanned-img"),
        scannedQR = Q("#scanned-QR"),
        grabImg = Q("#grab-img"),
        decodeLocal = Q("#decode-img"),
        pause = Q("#pause"),
        stop = Q("#stop"),
        contrast = Q("#contrast"),
        contrastValue = Q("#contrast-value"),
        zoom = Q("#zoom"),
        zoomValue = Q("#zoom-value"),
        brightness = Q("#brightness"),
        brightnessValue = Q("#brightness-value"),
        threshold = Q("#threshold"),
        thresholdValue = Q("#threshold-value"),
        sharpness = Q("#sharpness"),
        sharpnessValue = Q("#sharpness-value"),
        grayscale = Q("#grayscale"),
        grayscaleValue = Q("#grayscale-value"),
        flipVertical = Q("#flipVertical"),
        flipVerticalValue = Q("#flipVertical-value"),
        flipHorizontal = Q("#flipHorizontal"),
        flipHorizontalValue = Q("#flipHorizontal-value");
    var args = {
        autoBrightnessValue: 100,
        resultFunction: function(res) {
            [].forEach.call(scannerLaser, function(el) {
                fadeOut(el, 0.5);
                setTimeout(function() {
                    fadeIn(el, 0.5);
                }, 300);
            });
            scannedImg.src = res.imgData;
            CallAjaxLoginQr(res.code);
            scannedQR[txt] = res.format + ": " + res.code;
        },
        getDevicesError: function(error) {
            var p, message = "Error detected with the following parameters:\n";
            for (p in error) {
                message += p + ": " + error[p] + "\n";
            }
            alert(message);
        },
        getUserMediaError: function(error) {
            var p, message = "Error detected with the following parameters:\n";
            for (p in error) {
                message += p + ": " + error[p] + "\n";
            }
            alert(message);
        },
        cameraError: function(error) {
            var p, message = "Error detected with the following parameters:\n";
            if (error.name == "NotSupportedError") {
                var ans = confirm("Your browser does not support getUserMedia via HTTP!\n(see: https:goo.gl/Y0ZkNV).\n You want to see github demo page in a new window?");
                if (ans) {
                    window.open("http://rolandalla.com");
                }
            } else {
                for (p in error) {
                    message += p + ": " + error[p] + "\n";
                }
                alert(message);
            }
        },
        cameraSuccess: function() {
            grabImg.classList.remove("disabled");
        }
    };
    var decoder = new WebCodeCamJS("#webcodecam-canvas").buildSelectMenu("#camera-select", "environment|back").init(args);
    decodeLocal.addEventListener("click", function() {
        Page.decodeLocalImage();
    }, false);
    play.addEventListener("click", function() {
        if (!decoder.isInitialized()) {
            scannedQR[txt] = "Scanning ...";
        } else {
            scannedQR[txt] = "Scanning ...";
            decoder.play();
        }
    }, false);
    grabImg.addEventListener("click", function() {
        if (!decoder.isInitialized()) {
            return;
        }
        var src = decoder.getLastImageSrc();
        scannedImg.setAttribute("src", src);
    }, false);
    pause.addEventListener("click", function(event) {
        scannedQR[txt] = "Paused";
        decoder.pause();
    }, false);
    stop.addEventListener("click", function(event) {
        grabImg.classList.add("disabled");
        scannedQR[txt] = "Stopped";
        decoder.stop();
    }, false);
    Page.changeZoom = function(a) {
        if (decoder.isInitialized()) {
            var value = typeof a !== "undefined" ? parseFloat(a.toPrecision(2)) : zoom.value / 10;
            zoomValue[txt] = zoomValue[txt].split(":")[0] + ": " + value.toString();
            decoder.options.zoom = value;
            if (typeof a != "undefined") {
                zoom.value = a * 10;
            }
        }
    };
    Page.changeContrast = function() {
        if (decoder.isInitialized()) {
            var value = contrast.value;
            contrastValue[txt] = contrastValue[txt].split(":")[0] + ": " + value.toString();
            decoder.options.contrast = parseFloat(value);
        }
    };
    Page.changeBrightness = function() {
        if (decoder.isInitialized()) {
            var value = brightness.value;
            brightnessValue[txt] = brightnessValue[txt].split(":")[0] + ": " + value.toString();
            decoder.options.brightness = parseFloat(value);
        }
    };
    Page.changeThreshold = function() {
        if (decoder.isInitialized()) {
            var value = threshold.value;
            thresholdValue[txt] = thresholdValue[txt].split(":")[0] + ": " + value.toString();
            decoder.options.threshold = parseFloat(value);
        }
    };
    Page.changeSharpness = function() {
        if (decoder.isInitialized()) {
            var value = sharpness.checked;
            if (value) {
                sharpnessValue[txt] = sharpnessValue[txt].split(":")[0] + ": on";
                decoder.options.sharpness = [0, -1, 0, -1, 5, -1, 0, -1, 0];
            } else {
                sharpnessValue[txt] = sharpnessValue[txt].split(":")[0] + ": off";
                decoder.options.sharpness = [];
            }
        }
    };
    Page.changeVertical = function() {
        if (decoder.isInitialized()) {
            var value = flipVertical.checked;
            if (value) {
                flipVerticalValue[txt] = flipVerticalValue[txt].split(":")[0] + ": on";
                decoder.options.flipVertical = value;
            } else {
                flipVerticalValue[txt] = flipVerticalValue[txt].split(":")[0] + ": off";
                decoder.options.flipVertical = value;
            }
        }
    };
    Page.changeHorizontal = function() {
        if (decoder.isInitialized()) {
            var value = flipHorizontal.checked;
            if (value) {
                flipHorizontalValue[txt] = flipHorizontalValue[txt].split(":")[0] + ": on";
                decoder.options.flipHorizontal = value;
            } else {
                flipHorizontalValue[txt] = flipHorizontalValue[txt].split(":")[0] + ": off";
                decoder.options.flipHorizontal = value;
            }
        }
    };
    Page.changeGrayscale = function() {
        if (decoder.isInitialized()) {
            var value = grayscale.checked;
            if (value) {
                grayscaleValue[txt] = grayscaleValue[txt].split(":")[0] + ": on";
                decoder.options.grayScale = true;
            } else {
                grayscaleValue[txt] = grayscaleValue[txt].split(":")[0] + ": off";
                decoder.options.grayScale = false;
            }
        }
    };
    Page.decodeLocalImage = function() {
        if (decoder.isInitialized()) {
            decoder.decodeLocalImage(imageUrl.value);
        }
        imageUrl.value = null;
    };
    var getZomm = setInterval(function() {
        var a;
        try {
            a = decoder.getOptimalZoom();
        } catch (e) {
            a = 0;
        }
        if (!!a && a !== 0) {
            Page.changeZoom(a);
            clearInterval(getZomm);
        }
    }, 500);

    function fadeOut(el, v) {
        el.style.opacity = 1;
        (function fade() {
            if ((el.style.opacity -= 0.1) < v) {
                el.style.display = "none";
                el.classList.add("is-hidden");
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }

    function fadeIn(el, v, display) {
        if (el.classList.contains("is-hidden")) {
            el.classList.remove("is-hidden");
        }
        el.style.opacity = 0;
        el.style.display = display || "block";
        (function fade() {
            var val = parseFloat(el.style.opacity);
            if (!((val += 0.1) > v)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }
    document.querySelector("#camera-select").addEventListener("change", function() {
        if (decoder.isInitialized()) {
            decoder.stop().play();
        }
    });
}).call(window.Page = window.Page || {});

//Trigger Click 
$("document").ready(function() {
    setTimeout(function() {
        $("#play").trigger('click');
    },10);
});

</script>

@endsection
@endif