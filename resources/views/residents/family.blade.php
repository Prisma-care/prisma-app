@extends ('layout')

@section ('content')
<div id="root">
  <div class="email-invite">
    <div class="email-form">
      <div class="container">
        <div v-if="step === 1">
          <div class="row">
            <div class="col-lg-12 mt-4">
              <h1>Nodig familie uit om mee verhalen te verzamelen</h1>
              <p>Stuur hen een uitnodiging via email voor Prisma</p>
            </div>
          </div>
          <div class="row">
            <b-form action="" class="col-lg-12">
              <div class="row">
                <div class="col-lg-6 form-group name">
                  <input type="text" v-model="form.firstname" class="form-control">
                  <label for="firstname">Voornaam</label>
                </div>
                <div class="col-lg-6 form-group name">
                  <input type="text" v-model="form.lastname" class="form-control">
                  <label for="lastname">Familienaam</label>
               </div>
              </div>
              <div class="form-group">
                <input type="email" v-model="form.email" class="form-control">
                <label for="email">Email</label>
              </div>
              <div class="form-group">
                <input type="text" v-model="form.subject" class="form-control">
                <label for="subject">Onderwerp</label>
              </div>
              <button @click="next" :disabled="isValid" class="btn btn-primary">Volgende stap</button>
            </b-form>
          </div>
        </div>
        <div v-if="step ===2">
          <div class="row">
            <div class="col-lg-12 mt-4">
              <h1>Schrijf een gepersonaliseerd bericht</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 mt-4">
              <h5>Waarvoor heb je hulp nodig?</h5>
            </div>
            <div class="col-lg-3">
              <button class="option" @click="changeExample($event)" value="general">Alles</button>
              <button class="option" @click="changeExample($event)" value="digital">Foto's digitaliseren</button>
              <button class="option" @click="changeExample($event)" value="search">Beelden opzoeken</button>
              <button class="option" @click="changeExample($event)" value="interview">Familie interviewen</button>
            </div>
            <div class="col-lg-8">
              <p>@{{example[current_example]}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 mt-3">
                  <h5>Stuur een persoonlijk bericht</h5>
                  <textarea
                  v-model="message"
                  placeholder="Schrijf hier je persoonlijke boodschap"
                  class="mb-3 form-control"
                  >
                  </textarea>
                <button class="btn btn-primary btn-left"  @click="prev">Vorige stap</button>
                <button class="btn btn-primary btn-right" :disabled="isValidMessage">Verzenden</button>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="email-expl" v-if="step === 1">
      
    </div>
    <div class="email-expl" v-if="step === 2">
      <div class="email-template-header">
        <p>Zo zal je email er uit zien</p>
      </div>
      <div class="email-info">
        <p><span>Aan: </span>@{{form.email}}</p>
      </div>
      <div class="email-info">
        <p><span>Onderwerp: </span>@{{form.subject}}</p>
      </div>
      <div class="email-body">
        <p>@{{message}}</p>
      </div>
    </div>
  </div>
</div>

@endsection

@section ('scripts')
<script src="/js/family.js"></script>
@endsection
