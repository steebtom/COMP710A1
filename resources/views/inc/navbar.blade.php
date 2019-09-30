<nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Bosscuts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="{{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('about') ? 'active' : ''}}">
        <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/gallery">Gallery<span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/services">Services<span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/contact">Contact<span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::check())
      <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/bookingDetails">Bookings <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/imageUpload">Upload Photos <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/uploadvideo">Upload Video <span class="sr-only">(current)</span></a>
      </li> -->
      <!-- <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/bookingDetails">Business Cards <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/updatedetails">Update Details<span class="sr-only">(current)</span></a>
      </li>

      <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/messages">Messages<span class="sr-only">(current)</span></a>
      </li>

      <!-- <li class="{{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="/contact"> <span class="sr-only">(current)</span></a>
      </li> -->
      
@endif
      @guest
                            <li class="nav-item menu-right">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                            <!-- @endif -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
  </div>
</nav>