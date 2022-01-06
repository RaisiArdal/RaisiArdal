@if(Auth::user())
    <div class="float-right col-1">
        <a class=" navbar-brand " href="/" >
            {{ Auth::user()->name }} خوش آمدید&nbsp;
        </a>
    </div>

    <div class="float-right col-3">
        <a href="{{ url('/user') }}">

                        <span style="margin-top: -30px;margin-right: 30px;">
                            {{ Auth::user()->name }}خوش آمدید
                        </span>
        </a>
    </div>

    <div class="float-right col-2">
        <a href="{{ url('/user/home') }}">
                        <span style="margin-top: -30px;margin-right: 30px;">
                             پنل کاربر
                            </span>
        </a>

    </div>
    <div class="float-right col-2">
        <a class="nav-link"  href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('خروج') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
        </form>
    </div>

@endif
