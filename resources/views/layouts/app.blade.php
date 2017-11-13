<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/materialize-css@0.100.2/dist/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        html, body {
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
        }

        /*input:not([type]):focus:not([readonly]),
        input[type=text]:not(.browser-default):focus:not([readonly]),
        input[type=password]:not(.browser-default):focus:not([readonly]),
        input[type=email]:not(.browser-default):focus:not([readonly]),
        input[type=url]:not(.browser-default):focus:not([readonly]),
        input[type=time]:not(.browser-default):focus:not([readonly]),
        input[type=date]:not(.browser-default):focus:not([readonly]),
        input[type=datetime]:not(.browser-default):focus:not([readonly]),
        input[type=datetime-local]:not(.browser-default):focus:not([readonly]),
        input[type=tel]:not(.browser-default):focus:not([readonly]),
        input[type=number]:not(.browser-default):focus:not([readonly]),
        input[type=search]:not(.browser-default):focus:not([readonly]),
        textarea.materialize-textarea:focus:not([readonly]),
        textarea.materialize-textarea
        {
            border-bottom: 1px solid transparent !important;
            -webkit-box-shadow: 0 1px 0 0 transparent;
            box-shadow: 0 1px 0 0 transparent;
            color: #e0e0e0;
        }

        input:not([type]):focus:not([readonly]) + label,
        input[type=text]:not(.browser-default):focus:not([readonly]) + label,
        input[type=password]:not(.browser-default):focus:not([readonly]) + label,
        input[type=email]:not(.browser-default):focus:not([readonly]) + label,
        input[type=url]:not(.browser-default):focus:not([readonly]) + label,
        input[type=time]:not(.browser-default):focus:not([readonly]) + label,
        input[type=date]:not(.browser-default):focus:not([readonly]) + label,
        input[type=datetime]:not(.browser-default):focus:not([readonly]) + label,
        input[type=datetime-local]:not(.browser-default):focus:not([readonly]) + label,
        input[type=tel]:not(.browser-default):focus:not([readonly]) + label,
        input[type=number]:not(.browser-default):focus:not([readonly]) + label,
        input[type=search]:not(.browser-default):focus:not([readonly]) + label,
        textarea.materialize-textarea:focus:not([readonly]) + label
        {
            color: #C33764;
        }*/

        .new-post {
            background: #C33764;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>
    <script>
        document.addEventListener('contextmenu', function (event) {
            event.preventDefault();

            alert('Don\'t try to right click');
        });
    </script>
</head>
<body>
    <div id="app">
        <ul id="navbar-dropdown" class="dropdown-content">
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Logout</a>
            </li>
        </ul>

        <nav class="black">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center yellow-text">
                    <img src="{{ asset('image/1.png') }}" alt="GrapeSoup logo" class="responsive-img" width="55">
                </a>
                <ul id="nav-mobile-left" class="left hide-on-med-and-down">
                    <li><a href="sass.html" class="yellow-text">Features</a></li>
                    <li><a href="badges.html" class="yellow-text">Company</a></li>
                    <li><a href="collapsible.html" class="yellow-text">Blog</a></li>
                    <li><a href="#" class="yellow-text">Grape<b>+</b></a></li>
                </ul>
                <ul id="nav-mobile-right" class="right hide-on-med-and-down">
                    @guest
                        <li><a href="{{ route('login') }}" class="waves-effect waves-yellow btn-flat black
                        yellow-text">Login</a></li>
                        <li><a href="{{ route('register') }}" class="waves-effect waves-black btn yellow
black-text">REGISTER</a></li>

                    @else
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </ul>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://balupton.github.io/jquery-scrollto/lib/jquery-scrollto.js"></script>
    <script src="https://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ajaxify@6.9.2/ajaxify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.16.2/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/materialize-css@0.100.2/dist/js/materialize.min.js"></script>
</body>
</html>
