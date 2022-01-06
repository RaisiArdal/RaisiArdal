@if(Auth::user())
    <div class="float-right col-1">
        <a class=" navbar-brand " href="/" >
            <img id="imgLogo" src="{{url('/upload/images/admin/user.png')}}" title="مصطفی رییسی" alt="مصطفی رییسی">
        </a>
    </div>

    <div class="float-right col-3">

                        <span style="margin-top: -30px;margin-right: 30px;">
                            {{ Auth::user()->name }} خوش آمدید&nbsp;
                        </span>
    </div>

    <div class="float-right col-1">
        <a href="{{ route('admin.home') }}">
                        <span style="margin-top: -30px;margin-right: 30px;">
                             پنل مدیریت
                            </span>
        </a>

    </div>
    <div class="float-right col-1">
        <a  href="{{route('home')}}">
                        <span style="margin-top: -30px;margin-right: 30px;">
                             صفحه اصلی
                            </span>
        </a>

    </div>
    <div class="float-right col-1">
        <a  href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('خروج') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
        </form>
    </div>
@endif
