<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/app.css">
        <style>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>{{ config('app.name', 'Bosscuts') }}</title>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer="defer"></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
        <body>
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav mr-auto">
                            <li class="{{Request::is('/') ? 'active' : ''}}">
                                <a class="nav-link" href="/">Home
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="{{Request::is('about') ? 'active' : ''}}">
                                <a class="nav-link" href="/about">About
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="{{Request::is('contact') ? 'active' : ''}}">
                                <a class="nav-link" href="/contact">Contact
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="{{Request::is('contact') ? 'active' : ''}}">
                                <a class="nav-link" href="/contact">Bookings
                                    <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto"></ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif @else
                                <li class="nav-item dropdown">
                                    <a
                                        id="navbarDropdown"
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        role="button"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        v-pre="v-pre">
                                        {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a
                                            class="dropdown-item"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form
                                            id="logout-form"
                                            action="{{ route('logout') }}"
                                            method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>