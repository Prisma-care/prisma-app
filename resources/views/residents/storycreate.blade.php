@extends ('layout')

@section ('content')
<div class="container mt-4">

  <div class="row">
    <div class="col-md-9 col-lg-8">

      <h1>Voeg een verhaal toe</h1>
      <p class="lead">Welk gespreksonderwerp wil je met het personeel delen?</p>

      <form class="needs-validation" novalidate="">

        <div class="form-row">
          <div class="col-6">
            <div class="form-group">           
              <select class="form-control" v-model="newAlbum">
                <option value="">Kies het onderwerp</option>
                <option>Familie en vrienden</option>
                <option>Gewoonten en tradities</option>
                <option>Muziek</option>
                <option>Vrije tijd</option>
                <option>School en werk</option>
                <option>Spel en hobbies</option>
                <option>Sport</option>
              </select>
            </div>
          </div>
          <div class="col-6">
            {{-- <a href="#" class="mt-2 small d-flex align-items-center"><i class="material-icons md-18">chat</i> Vragen over {chosensubject}</a> --}}
          </div>
        </div>


        <div class="form-row">
          <div class="col-4 col-lg-2">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="jjjj"> 
              <label for="description">Jaartal</label>
            </div>
          </div>
          <div class="col-6">
            <small>Optioneel</small>
          </div>
        </div>


        <div class="form-group">
          <textarea v-model="newStory" id="description" class="form-control" type="text" ref="storytext" placeholder="Vertel het verhaal beknopt" rows="3" autofocus></textarea>
          <label for="description">Beschrijving</label>
        </div>

        
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center active" id="photoupload-tab" data-toggle="tab" href="#photoupload" role="tab" aria-controls="photoupload" aria-selected="true"><i class="material-icons mr-2">camera_alt</i> Foto opladen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" id="youtubeadd-tab" data-toggle="tab" href="#youtubeadd" role="tab" aria-controls="youtubeadd" aria-selected="false"><i class="material-icons mr-2">movie</i> Video van Youtube kiezen</a>
          </li>
        </ul>

        <div class="tab-content my-3">

          {{-- Photo tab --}}
          <div class="tab-pane fade show active" id="photoupload" role="tabpanel" aria-labelledby="photoupload-tab">

            <div class="card bg-light w-25">
              <div class="card-body text-center">
                <i class="material-icons md-64 text-muted">cloud_upload</i>
                <p class="card-text"> Klik, of sleep een foto naar hier om op te laden.</p>
              </div>
            </div>

          </div>

          {{-- Youtube tab --}}
          <div class="tab-pane fade" id="youtubeadd" role="tabpanel" aria-labelledby="youtubeadd-tab">
            <p>Ga naar <a href="http://youtube.com/" target="_blank">YouTube</a> en plak de link van de pagina hier onder.</p>
            <div class="form-group __web-inspector-hide-shortcut__"><input name="regex" type="text" placeholder="https://www.youtube.com/watch?v=ffSnk4v3aeg" class="form-control" aria-required="true" aria-invalid="true"><label for="youtube">YouTube link</label></div>


          </div>

        </div>


        <button class="btn btn-primary">Opslaan</button>
      </form>  
    </div>

    <div class="col-md-3 col-lg-4">


      <img src="/img/illustration/familycollects.png" alt="" class="img-fluid mb-3 mt-3 px-4">
      <h5>Welke verhalen toevoegen?</h5>
      <p class="lead lead-sm">Inspireer het personeel. Zoek een leuke foto of video om je verhaal te illustreren. Dat kan een eigen foto zijn over het leven van Lea, maar even goed een afbeelding van internet of een video van Youtube.</p>

    </div>
  </div>


</div>

@endsection