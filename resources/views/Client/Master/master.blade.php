@include('Client.Layouts.header')
@include('Client.Layouts.nav_header')
@include('Client.Layouts.footer')
@include('Client.Layouts.nav_footer')


@yield('header')
@yield('nav_header')

@yield('content')

@yield('footer')
@yield('nav_footer')
