@extends ('layout')

@section ('content')

@include('residents/_header')

<div class="container">
  <div class="row">

    <div class="col-md-3">

      <div class="d-flex align-items-baseline">
        <h2 class="section-tit">Voorkeuren</h2>

        <div class="btn-group d-inline-flex" role="group" aria-label="Basic example">
          <a href="{{ route('preferences.edit') }}" class="btn btn-sm btn-link">Edit</a>
        </div>

      </div>

      <h3 class="text-muted d-flex align-items-middle mt-4"><i class="material-icons text-muted mr-2">local_hospital</i> Zorg</h3>
      <p>Toilette au lavabo > stimuler <br>AVJ 2x par semaine <br>Douche le lundi. Aime bien aussi le bain.</p>

      <h3 class="text-muted d-flex align-items-middle mt-4"><i class="material-icons text-muted mr-2">chat_bubble</i> Communicatie</h3>
      <p>Verbale <br>Metre monsieur en valeur</p>

      <h3 class="text-muted d-flex align-items-middle mt-4"><i class="material-icons text-muted mr-2">extension</i> Ergo</h3>
      <p>Musique <br>Sorties</p>

      <h3 class="text-muted d-flex align-items-middle mt-4"><i class="material-icons text-muted mr-2">directions_run</i> Kine</h3>
      <p>Gym 3x par semaine <br>
      Marcher</p>

      <h3 class="text-muted d-flex align-items-middle mt-4"><i class="material-icons text-muted mr-2">lock</i> Veiligheid</h3>
      <p>Lever la barre du lit coté tête</p>

      <h3 class="text-muted d-flex align-items-middle mt-4"><i class="material-icons text-muted mr-2">restaurant</i> Eten</h3>
      <p>Lever la barre du lit coté tête</p>

    </div>

    <div class="col-md-9">

      <h2 class="section-tit">Verhalen</h2>

      @for ($i = 0; $i < 4; $i++)

      <div class="row">

        @for ($j = 0; $j < 2; $j++)

        <div class="col-sm-6">
          <div class="card mb-4">
            <img class="card-img-top" src="https://placeimg.com/800/800/nature" alt="Card image cap">        
            <div class="card-body">
              <p class="card-text">Lorem ipum dolor sit amet consectetuer</p>
              <a href="#">Edit</a>

            </div>        
          </div>
        </div>

        @endfor

      </div>

      @endfor

    </div>

  </div>
</div>
</div>

@endsection