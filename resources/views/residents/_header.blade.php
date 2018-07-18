<div class="resi-header d-print-none">

  <!--<img src="/img/tmp/profile_5.jpg" class="rounded-circle" alt="Charles Feron">-->
  <!-- <h1 class="resi-header-displayname">Mr Feron</h1>-->
  <h1 class="resi-header-displayname">@{{resident_name[0]}}</h1>

</div>

<div class="resi-nav">
  <nav class="nav d-print-none justify-content-center" id="navbar-albums">

    <a
    v-for="(albumstories, album) in albums" 
    v-if="stories.length>0"
    :href="'#' + album"
    class="nav-link">
    @{{ album }}
  </a>

</nav>

</div>

{{-- 
  <nav class="nav resi-nav justify-content-center">
    <a class=" verhalen nav-link {{ Route::currentRouteNamed('residents.stories') ? 'active' : '' }}" href="{{ route('residents.stories') }}">Verhalen</a>
    <a class="nav-link {{ Route::currentRouteNamed('residents.preferences') ? 'active' : '' }}" href="{{ route('residents.preferences') }}">Voorkeuren</a>
    <a class="nav-link {{ Route::currentRouteNamed('residents.family') ? 'active' : '' }}" href="{{ route('residents.family') }}">Familie</a>
    <a class="nav-link {{ Route::currentRouteNamed('residents.profile.edit') ? 'active' : '' }}" href="{{ route('residents.profile.edit') }}">Profiel</a>
  </nav> --}}