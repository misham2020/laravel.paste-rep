
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
           
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
             <!-- START LOGO -->
<div id="logo" class="group">
    <a href="#"  title="Pastebin"><img width="55" src="{{ asset('site') }}/images/Pastebin.com_logo.png" title="Pastebin" alt="Pastebin" />Pastebin</a>
</div>
<!-- END LOGO -->
            </a>
        </div>

        {{-- <div class="collapse navbar-collapse" id="app-navbar-collapse"> --}}
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    <li>{!! Html::link(route('index'),'На главную',['class' => 'btn btn-the-salmon-dance']) !!}</li>
                @else
                    <li class="dropdown">
                        <a href="home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            <li>{!! Html::link(route('priv'),'My Pastebin',['class' => 'btn btn-the-salmon-dance']) !!}</li>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
       {{--  </div> --}}
    </div>
