<html>
    <header>
        <title>@yield('title')</title>
        {{Html::style('css/bootstrap.min.css')}}
        {{Html::style('css/bootstrap-utilities.min.css')}}
    </header>
    <body>
        <div class="container">
            @yield('content')
        </div>
        {{Html::script('js/jquery-3.5.1.min.js')}}
        {{Html::script('js/bootstrap.min.js')}}
    </body>
</html>