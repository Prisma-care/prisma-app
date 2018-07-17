@extends ('layout') @section ('content') @include('residents/_header')

<div id="root" v-cloak class="container pt-1">
  <ul v-for="familyMember in familyMembers" class="list-unstyled" v-if="!showAddFamily && !firstrun">

    <li class="card familymember mb-3 pb-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-lg-4 d-flex align-items-center">
            <div class="media">
              <img class="mr-3 rounded-circle" src="http://i.pravatar.cc/48?img=@{{familyMember.id}}" alt="">
              <div class="media-body">
                <h5 class="card-title mb-0"> @{{familyMember.name}}</h5>
                <span class="text-muted">@{{familyMember.relationship}}</span>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-lg-4 d-flex align-items-center">
            <a href="mailto:georgette@gmail.com" class="familymember-email d-flex align-items-center">
              <i class="material-icons md-18 mr-1">email</i> @{{familyMember.email}}</a>
          </div>
          <div class="col-md-6 col-lg-2 text-muted text-right small d-flex align-items-center familymember-numstories">
            @{{familyMember.numStories}} verhalen
          </div>
          <div class="col-md-2 col-lg-2 d-flex align-items-center familymember-invite">
            <a href="#" class="btn btn-light btn-sm">Nodig uit</a>
          </div>
        </div>
      </div>
    </li>
  </ul>

  <div class="text-center" v-if="!showAddFamily && !firstrun">
    <button class="btn btn-primary" @click="showAddFamily=true">Voeg familie toe</button>
  </div>


  <p class="lead lead-lg text-center mt-0 mb-4" v-if="firstrun">Verzamel samen de verhalen van Charles</p>


  <div class="family-add" v-if="showAddFamily || firstrun">

    <div class="row">
      <div class="col-md-12">

        <h3 class="mb-2">Nodig familie uit</h3>
        <p class="lead mb-4" v-if="!firstrun">Verzamel samen verhalen van Charles</p>
        <p>Hoe wil je hulp? (We vullen de email al voor je aan)</p>
        


      </div>
      <div class="email-options row">
          <button class="option-card col-lg-3" v-on:click="changeBody($event)" value="general">
            <h2>Algemene uitnodiging</h2>
            <p></p>
          </button>
          <button class="option-card col-lg-3" v-on:click="changeBody($event)" value="story">
            <h2>Verhaal</h2>
            <p>Nodig iemand uit om een verhaal toe te voegen</p>
          </button>
          <button class="option-card col-lg-3" v-on:click="changeBody($event)" value="digital">
            <h2>Digitaliseren</h2>
            <p>Nodig iemand uit om foto's in te scannen en ze toe te voegen</p>
          </button>
          <button class="option-card col-lg-3" v-on:click="changeBody($event)" value="youtube">
            <h2>Youtubefilmpje</h2>
            <p>Nodig iemand uit om een filmpje toe te voegen</p>
          </button>
        </div>
      
      <!--<div class="col-md-5">
        <div class="card bg-light border-light mt-3">
          <div class="card-header"><h5 class="mb-0">Wat er gebeurt</h5></div>

          <div class="card-body">

            <p class="card-text">Het familielid krijgt via email een uitnodiging om herinneringen toe te voegen.</p>
            <p class="card-text"><a href="#" class="btn btn-sm btn-light">Bekijk email</a></p>
          </div>
        </div>
      </div> -->
    </div>
    <div class="row">
      <h1 class="col-md-12 mb-4">Email template</h1>
      <form class="needs-validation mb-4 col-md-8" novalidate="">

        <div class="form-group">

          <input type="text" id="firstname" class="form-control" v-model="firstname" placeholder="" value="" required="">
          <label for="firstname">Voornaam</label>

          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="form-group">

          <input type="text" id="lastname" class="form-control" v-model="lastname" placeholder="" value="" required="">
          <label for="lastname">Familienaam</label>

          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" v-model="email" placeholder="you@example.com">
          <label for="email">Email</label>

          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" v-model="subject" v-model="">
          <label for="subject">Onderwerp</label>

          <div class="invalid-feedback">
            Please enter a valid subject.
          </div>
        </div>

        <div class="form-group">
          <textarea name="email_body" id="" cols="30" rows="10" class="email-body form-control" placeholder="Jouw persoonlijke email"></textarea>
        </div>

      </form>
      <div class="col-md-4">
        <button class="btn btn-primary col-md-12 mb-4">
          Verzenden
        </button>
        <button class="btn btn-primary col-md-12 mb-4">
          Preview(?)
        </button>
        <h4 class="mb-4">Voorbeeld tekst</h4>
        <p>@{{email_body[current_body]}}</p>
      </div>
    </div>
  </div>

</div>
@endsection @section ('scripts')
<script src="/js/family.js"></script>
@endsection