<nav class="navbar navbar-expand-lg sticky-top bg-white">
  <div class="container">
    
    <a class="navbar-brand" href="{{route('home')}}"><img src="/media/PrestoWatermark.png" alt="" style="width:50px; height:50px; margin-right:20px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{__('ui.Home')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('announcement.index')}}">{{__('ui.listaAnnunci')}}</a>
        </li>

        {{-- Dropdown Categorie --}}
        <li class="nav-item categorieNavCustom">
          <div class="nav-link dropdown">
            <a class="text-black dropdown-toggle " href="" data-bs-toggle="dropdown">Categorie</a>
            <ul class="dropdown-menu bg-dark-custom">
              @foreach ($categories as $category)
              <li>
                <a class="dropdown-item text-decoration-underline" href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <x-_locale lang="it" />
        </li>
        <li class="nav-item">
          <x-_locale lang="en" />
        </li>
        <li class="nav-item">
         <x-_locale lang="de" />
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        @endguest
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            @if(Auth::user()->is_revisor)
            <li class="nav-item">
              <a class="dropdown-item" href="{{route('revisor.index')}}">{{__('ui.areaRevisore')}}
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Announcement::toBeRevisionedCount()}}
                  <span class="visually-hidden"> {{__('ui.messaggi')}}</span>
                </span>
              </a>
            </li>
            @endif
            <li><a class="dropdown-item" href="{{ route('announcement.create') }}">{{__('ui.creaAnnuncio')}}</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-item"><a class="nav-link" onclick="event.preventDefault();document.getElementById('form-logout').submit();" href="#">Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="form-logout">
              @csrf
            </form>
          </ul>
        </li>

        @endauth
      </ul>
    </div>
  </div>
</nav>