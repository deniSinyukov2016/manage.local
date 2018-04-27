<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />


    <title>@yield('title', 'Managment projects')</title>

    @include('inc.default.styles')
    @yield('style')
</head>

<body class="nav-md" id="@yield('body-style')" >
<div class="container body" id="app">
    <div class="main_container">
        <div class="col-md-3 left_col">
            @include('inc.default.sidebar')
        </div>

        @include('inc.default.nav-menu')

        <div class="right_col" role="main">
            @yield('content')
        </div>

        @include('inc.default.footer')
    </div>

</div>

@include('inc.default.scripts')
@yield('script')
</body>
</html>