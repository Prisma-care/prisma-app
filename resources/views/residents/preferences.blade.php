@extends ('layout')

@section ('content')

@include('residents/_header')

<div class="container">

  <p class="lead lead-lg text-center mt-0 mb-4" v-if="firstrun">Wat is belangrijk voor Charles?</p>

  <div class="row pref">

    <div class="col-md-6 pref-item" v-for="pref in prefs">
      <div class="row">
        <div class="col-sm-4 pref-item-title">
          <i class="material-icons">@{{pref.icon}}</i>
        </div>
        <div class="col-sm-8">
          <h2 class="my-3">@{{pref.name}}</h2>
          
          <div class="pref-item-edit" v-if="pref.editing">
            <textarea v-model="pref.body" id="" class="form-control" cols="30" rows="4"></textarea>
            <button @click="pref.editing = false" class="btn btn-primary btn-sm mt-2">Slaag op</button>            
          </div>
          
          <div class="pref-item-show" v-if="!pref.editing">
            <div class="pref-item-body" v-if="!firstrun">
              <p>@{{pref.body}}</p>
            </div>          

            <div class="pref-item-rollover">
              <button @click="pref.editing = true" class="btn btn-light btn-sm">Vul aan</button>
            </div>    
          </div>

        </div>
      </div>
    </div>

  </div>

</div>

@endsection


@section ('scripts')

<script>

  new Vue({
    el: 'main',
    data: {
      firstrun : false,
      prefs: [
      { "id": 1, "name": "Zorg", "icon": "local_hospital", "body" : "Toilette au lavabo > stimuler \n AVJ 2x par semaine \n Douche le lundi. Aime bien aussi le bain.", "editing": false},
      { "id": 2, "name": "Communicatie", "icon": "insert_emoticon", "body" : "Verbale \nMetre monsieur en valeur", "editing": false},
      { "id": 3, "name": "Ontspanning", "icon": "extension", "body" : "Musique \n Sorties", "editing": false},
      { "id": 4, "name": "Beweging", "icon": "directions_run", "body" : "Gym 3x par semaine \n Marcher", "editing": false},
      { "id": 5, "name": "Veiligheid", "icon": "lock", "body" : "Lever la barre du lit coté tête", "editing": false},
      { "id": 6, "name": "Eten", "icon": "restaurant", "body" : false, "editing": false}
      ]
    }
  });

</script>

@endsection