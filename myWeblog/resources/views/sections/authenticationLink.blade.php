@guest

    @if (Route::has('login'))
        <div class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>
        </div>
    @endif

    @if (Route::has('register'))
        <div class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
        </div>
    @endif
@else
    <div class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('خروج') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
@endguest
