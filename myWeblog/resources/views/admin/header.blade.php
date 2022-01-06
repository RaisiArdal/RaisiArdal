<?php
use App\Models\Categorie;
$menus = Categorie::where(['parent_id'=>0,'show'=>1])->get();
?>
<div id= "topHeader"  title="" vv="False">
    <div class="icon-bar">
        <!-- include('sections.authenticationLink') -->

    @if(\Auth::guest())
                <a class="fa fa-registered" href="{{ url('/register') }}">
                    <div class="iconSvg">
                        {!! ($svg->register())!!}
                    </div>
                    <span class="float-right text-center" style="margin-top: -30px;margin-right: 30px;">
                      ثبت نام کنید
                </span>
                </a>
                <a class="fa glyphicon-log-in" href="{{ url('/login') }}">
                    <div class="iconSvg">
                        {!! ($svg->login())!!}
                    </div>
                    <span class="float-right " style="margin-top: -30px;margin-right: 30px;">
                      وارد شوید
                    </span>
                </a>


            @endif
            @include('admin.topHeaderAdmin')
            <div class="float-left ">
                        <span class="text-center" style="margin-top: -30px;margin-right: 30px;" next-date="جمعه 21 آبان 1400">
                                {{\Morilog\Jalali\Jalalian::now()->format('%A, %d %B %Y')}}

                        </span>
                        <span class="text-center" style="margin-top: -30px;margin-right: 30px;" >
                                {{\Morilog\Jalali\Jalalian::now()->addHours(3)->addMinutes(30)->format('h:i:s')}}
                        </span>

            </div>
    </div>

</div>

<nav id = "mainNav" class=" navbar navbar-expand-sm navbar-light bg-faded">

    <div class="container center-block center text-center " >
                <div class="collapse navbar-collapse ">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{redirect('home')}}">صفحه اصلی</a>
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
