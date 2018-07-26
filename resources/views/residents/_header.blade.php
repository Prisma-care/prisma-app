<div class="resi-header d-print-none">

  <img src="/img/tmp/profile_rolandvanderlinden.jpg" class="rounded-circle" alt="Roland Vander linden">
  <h1 class="resi-header-displayname">Roel</h1>
  <h2 class="resi-header-fullname">@{{resident_name[0]}}</h2>

</div>

<div class="resi-nav"
v-if="Object.keys(albums).length>2">

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