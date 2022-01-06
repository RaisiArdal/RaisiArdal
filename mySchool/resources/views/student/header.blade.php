<?php
use App\Models\Categorie;
$menus = Categorie::where('parent_id',0)->get();
?>
<div id= "topHeader" class="col-xs-12 p-a-0 pull-xs-none" title="" vv="False">
    <div class="row text-center m-0">
        <!-- include('sections.authenticationLink') -->

    @if(\Auth::guest())
            <div class="float-right col-2">
                <a href="{{ url('/register') }}">
                    <div class="iconSvg">
                        {!! ($svg->register())!!}
                    </div>
                    <span class="float-right text-center" style="margin-top: -30px;margin-right: 30px;">
                      ثبت نام کنید
                </span>
                </a>
            </div>
            <div class="float-right col-2 ">
                <a href="{{ url('/login') }}">
                    <div class="iconSvg">
                        {!! ($svg->login())!!}
                    </div>
                    <span class="float-right " style="margin-top: -30px;margin-right: 30px;">
                      وارد شوید
                    </span>
                </a>
            </div>
            <div class="float-right col-4 ">
            </div>


            @endif
            @include('student.topHeaderStudent')
            <div class="float-left col-3">
                        <span class="text-center" style="margin-top: -30px;margin-right: 30px;" next-date="جمعه 21 آبان 1400">
                             پنجشنبه 20 آبان 1400
                        </span>
                        <span class="text-center" style="margin-top: -30px;margin-right: 30px;" >
                             23:01:25
                        </span>

            </div>
    </div>

</div>
<div class="row p-a-0 pull-xs-none" id="logoSite">
    <div class="float-right col-2 m-5">
        <form id="login-form" action="{{ url('/logout') }}" method="POST" style="display:flow;">
                         <span  style="margin-top: -30px;margin-right: 30px;">
                             سبد خرید
                            <div class="iconSvg" style="margin-top: -20px;margin-right: 30px;">
                                {!! ($svg->shoppingCart())!!}
                            </div>
                        </span>
        </form>
    </div>
    <div class="float-right col-7 m-5 text-center">
        <input style="width: 60%" id="keyword" name="keyword" placeholder="کالای مورد نظر خود را جستجو کنید..." autocomplete="off" type="text" >
        <i class="fa fa-search"></i>
    </div>
    <div class="float-left col-1 m-1">
        <a href="/" >
            <img class="img-fluid" src="{{url('/upload/images/mySite/logo.png')}}" title="مصطفی رییسی" alt="مصطفی رییسی">
        </a>

    </div>

</div>

<nav id = "mainNav" class=" navbar navbar-expand-sm navbar-light bg-faded">

    <div class="container center-block center text-center " >
                <div class="collapse navbar-collapse ">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="/">صفحه اصلی</a>
                        </li>
                        @foreach($menus as $mnu)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="Preview" href="{{url('/category/'.$mnu->id)}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{$mnu->name}}
                                </a>
                                @if($mnu->getChild->count()>0)
                                    <div class="dropdown-menu text-center" aria-labelledby="Preview">
                                        @foreach($mnu->getChild as $submnu)
                                            <a class="dropdown-item" href="{{url('/category/'.$mnu->id.'/'.$submnu->id)}}"> {{$submnu->name}}</a>
                                        @endforeach
                                    </div>
                                @endif
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" href="#">تماس با ما</a>
                        </li>


                    </ul>

                </div>
    </div>
</nav>
