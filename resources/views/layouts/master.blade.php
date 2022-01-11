<!DOCTYPE html>
<html>
    <head>
        <title>Trees Dictionary</title>
        @include('layouts.style')
        @yield('index_css')
        @yield('detail_css')
        @yield('list_tree_css')
        @yield('search_css')
    </head>

    <body>

        @include('pages.header.header')
        @yield('index')
        @yield('detail')
        @yield('list_tree')
        @yield('search')
        @include('pages.footer.footer')


    </body>

</html>
