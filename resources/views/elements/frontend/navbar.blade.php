<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center shadow-sm mb-3">
  <a href="/" class="navbar-brand d-flex w-50 me-auto">
     
      <span class="ms-3 ">
         <img src="{{ asset('images/logo/Logoweb_schrift.png') }}" alt="Logo" width="64px" height="64px">
      </span>
{{--    <span class="ms-3 fontsize-3">Firmenname</span>--}}
  
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse w-100 " id="collapsingNavbar3">
    <ul class="navbar-nav w-100 justify-content-center">
      <li class="nav-item ms-3">
        <a class="nav-link" href="{{ route('frontend.index') }}">Story</a>
      </li>
      <li class="nav-item ms-3 w-90px">
        <a class="nav-link" href="{{ route('frontend.foodlist') }}">@if (session('applocale') == 'en') Our Foods @else Speisekarte @endif</a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link" href="{{ route('frontend.approach') }}">@if (session('applocale') == 'en') Approach @else Anfahrt @endif</a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link" href="{{ route('frontend.impress') }}">@if (session('applocale') == 'en') Impress @else Impressum @endif </a>
      </li>
      <li class="nav-item ms-3">
        <a class="nav-link" href="{{ route('frontend.privacy') }}">@if (session('applocale') == 'en') Privacy @else Datenschutz @endif</a>
      </li>
      <li class="nav-item dropdown ms-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Sprache
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="{{route('frontend.lang','de')}}">@if (session('applocale') == 'en') German @else Deutsch @endif</a></li>
          <li><a class="dropdown-item" href="{{route('frontend.lang','en')}}">@if (session('applocale') == 'en') English @else Englisch @endif</a></li>
        </ul>
      </li>

    </ul>
    <ul class="nav navbar-nav ms-auto me-3 w-100 justify-content-end">
      <li class="nav-item ms-3">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      
      {{--        <li class="nav-item dropdown">--}}
      {{--          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Menu </a>--}}
      {{--          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">--}}
      {{--            <li><a class="dropdown-item" href="#">Item</a></li>--}}
      {{--            <li><a class="dropdown-item" href="#">Item</a></li>--}}
      {{--            <li>--}}
      {{--              <hr class="dropdown-divider">--}}
      {{--            </li>--}}
      {{--            <li><a class="dropdown-item" href="#">Item</a></li>--}}
      {{--          </ul>--}}
      {{--        </li>--}}
    </ul>
  </div>
</nav>
