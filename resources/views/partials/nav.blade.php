<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        {{-- <li class="{{ request()->routeIs('home') ? 'active': '' }}"><a href="{{ Route('home')}}">Home</a></li>
        <li class="{{ request()->routeIs('about') ? 'active': '' }}"><a href="{{ Route('about')}}">About</a></li>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-pills">
                <li class="nav-item ">
                    <a class="nav-link  {{ setActive('home') }} " href="{{ Route('home')}}">@lang('Home')</a>
                </li>
                <li class=" nav-item ">
                    <a class="nav-link {{setActive('about')  }}" href="{{ Route('about')}}">@lang('About')</a>
                </li>

                <li class=" nav-item">
                    <a class="nav-link  {{ setActive('proyectos.*') }}" href="{{ Route('proyectos.index')}}">Portafolio</a></li>
                <li class=" nav-item">
                    <a class="nav-link {{ setActive('contact') }}" href="{{ Route('contact')}}">@lang('Contact')</a></li>
                @guest
                <li class=" nav-item">
                    <a class="nav-link {{ setActive('login') }}" href="{{ Route('login')}}">@lang('Login')</a></li>
                @else
                <li class="nav-item ">
                    <a class="dropdown-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li> @endguest
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                
                </form>
                </ul>
        </div>
    </div>
</nav>


