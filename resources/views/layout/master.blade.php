<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            {{ isset($title) ? $title : ''}}
        </title>

        @include('layout.partial.head-styles')
        
        @include('layout.partial.head-scripts')

    </head>
    <body>

       @include('layout.partial.navbar')
        
        <div class="container">
            
            @include('layout.partial.alerts')

            @yield('content')
            
        </div>

        @yield('styles')

        @yield('scripts')

        @include('layout.partial.body-scripts')

    </body>
</html>