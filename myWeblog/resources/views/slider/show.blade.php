<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@if(isset($sliders[0]))

       <div class="row">
           <div class="col-lg-9 col-md-12 col-sm-12 m-auto">
               <div class="container mt-3 border">
                   <div class="row bg-light">
                       <nav class="col-1 justify-content-center m-0">
                           <ul class="pagination iconSvg">
                               <li class="page-item " id="nextSlider">
                        <span class="page-link " style="top: 200px; ">
                                        {!! ($svg->next())!!}

                        </span>
                               </li>
                           </ul>
                       </nav>

                           <div class="col-10 justify-content-center mt-5 mb-5">
                           <div id="slider" class="row">
                               @foreach($sliders as $slider)

                               <img src="/upload/images/slider/tmp/{{$slider->fileName}}" alt="{{$slider->title}}" class="sliderItem" width="100%" height="100%" >
                               @endforeach

                           </div>
                           <div style="margin-top: -50px">
                               <nav id="sliderAllBtn" aria-label="Page navigation slider">
                                   <ul class="pagination justify-content-center">
                                       @foreach($sliders as $slider)

                                       <li class="page-item"><span class="page-link">&nbsp;</span></li>
                                       @endforeach
                                   </ul>
                               </nav>

                           </div>
                       </div>


                       <nav class="col-1 justify-content-center m-0">
                           <ul class="pagination iconSvg">
                               <li class="page-item" id="preSlider">
                        <span class="page-link" style="top: 200px; ">
                                        {!! ($svg->previouse())!!}
                        </span>
                               </li>
                           </ul>
                       </nav>

                   </div>
               </div>            </div>
       </div>

       </div>
       <div clas="row m-0">
           <div class="container-fluid ">
               @foreach($sliders as $slider)

               <div class="col-1 float-left">
                   <div class="m-0">
                       <img src="/upload/images/slider/tmp/{{$slider->fileName}}" alt="{{$slider->title}}"  width="100%" height="100%" >

                   </div>
               </div>
               @endforeach


           </div>
       </div>
@endif


<i class="clearfix"></i>
