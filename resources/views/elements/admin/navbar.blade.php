<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center bg-white shadow-sm">
  <a href="{{route('admin.index')}}" class="navbar-brand d-flex w-25 me-auto">
     
      <span class="ms-3">
         <img src="{{ asset('images/logo/Logoweb_schrift.jpg') }}" alt="Logo" width="32px" height="32px">
      </span>
    <span class="ms-3">Dashboard</span>
  
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse ms-md-5" id="collapsingNavbar3">
    <ul class="navbar-nav justify-content-center">
      
      <li class="nav-item dropdown ms-2 ms-md-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Newsletter
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('admin.newsletter.index') }}">- Übersicht</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.newsletter.create') }}">- Erstellen</a></li>
        </ul>
      </li>
      
      <li class="nav-item dropdown ms-2 ms-md-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Abonennten
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('admin.subscriber.index') }}">- Übersicht</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.subscriber.create') }}">- Hinzufügen</a></li>
        </ul>
      </li>
      
      <li class="nav-item ms-2 ms-md-5">
        <a class="nav-link" href="{{ route('admin.foodlist.index') }}">
          Speisekarte
        </a>
{{--        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--          <li><a class="dropdown-item" href="">- Übersicht</a></li>--}}
{{--          <li><a class="dropdown-item" href="{{ route('admin.foodlist.create') }}">- Eintrag anlegen</a></li>--}}
{{--          <li><a class="dropdown-item" href="{{ route('admin.foodlist.sorting.index') }}">- Sortierung ändern</a></li>--}}
{{--        </ul>--}}
      </li>
      
      <li class="nav-item dropdown ms-2 ms-md-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          News
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('admin.news.index') }}">- Übersicht</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.news.create') }}">- Erstellen</a></li>
        </ul>
      </li>
      
{{--      <li class="nav-item dropdown ms-2 ms-md-5">--}}
{{--        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--          Kategorie--}}
{{--        </a>--}}
{{--        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--          <li><a class="dropdown-item" href="{{ route('admin.foodlist.category.index') }}">- Übersicht</a></li>--}}
{{--          <li><a class="dropdown-item" href="{{ route('admin.foodlist.category.create') }}">- Erstellen</a></li>--}}
{{--        </ul>--}}
{{--      </li>--}}
      
      <li class="nav-item dropdown ms-2 ms-md-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Story
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('admin.story.index') }}">- Übersicht</a></li>
          <li><a class="dropdown-item" href="{{ route('admin.story.create') }}">- Erstellen</a></li>

        </ul>
      </li>
    
    </ul>
  
  </div>
  <div class="navbar-collapse collapse w-25" id="collapsingNavbar3">
    
    <ul class="nav navbar-nav ms-md-auto me-3 justify-content-end">
      <li class="nav-item ms-2">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>
    
    </ul>
  </div>

</nav>
