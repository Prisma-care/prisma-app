<header class="d-print-none main">

  <nav class="navbar navbar-expand-sm">

    <div class="container d-flex justify-content-between">

      <a href="/residents/rolandvanderlinden/stories" class="navbar-brand d-flex align-items-center mr-auto">
        <svg id="logo" width="71px" height="62px" viewBox="0 0 71 62" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <path d="M11.8999497,11.2284332 L62.6562202,23.6249066 C66.948338,24.6731933 69.5779827,29.0024465 68.529696,33.2945644 C68.1821769,34.7174506 67.4506896,36.0176214 66.4149834,37.0533276 L28.0551863,75.4131247 C24.930992,78.537319 19.8656722,78.537319 16.7414778,75.4131247 C15.7057716,74.3774185 14.9742843,73.0772477 14.6267653,71.6543615 L2.23029192,20.898091 C1.1820052,16.6059732 3.81164988,12.2767199 8.10376771,11.2284332 C9.35083392,10.9238556 10.6528835,10.9238556 11.8999497,11.2284332 Z" id="Rectangle" fill="#ABAEB4" transform="translate(35.379994, 44.378135) rotate(-315.000000) translate(-35.379994, -44.378135) "></path>
          </g>
        </svg>
        Prisma
      </a>

      <ul class="navbar-nav">

        <li class="nav-item"><a class=" verhalen nav-link {{ Route::currentRouteNamed('residents.stories') ? 'active' : '' }}" href="{{ route('residents.stories') }}">Verhalen</a></li>
        <li class="nav-item"><a class="nav-link {{ (Route::currentRouteNamed('residents.family') || Route::currentRouteNamed('residents.familyinvite') ) ? 'active' : '' }}" href="{{ route('residents.family') }}">Familie uitnodigen</a></li>
        {{-- <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('residents.preferences') ? 'active' : '' }}" href="{{ route('residents.preferences') }}">Voorkeuren</a></li>
        <li class="nav-item"><a class="nav-link {{ Route::currentRouteNamed('residents.profile.edit') ? 'active' : '' }}" href="{{ route('residents.profile.edit') }}">Profiel</a></li> --}}
      </ul>

      {{-- <div class="dropdown">
        <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Frederik</a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Profiel van Marie-Josée</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Afmelden</a>
        </div>
      </div> --}}

    </div>
  </nav>

</header>