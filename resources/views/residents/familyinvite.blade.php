@extends ('layout')

@section ('content')
<div id="root" class="container mt-4">

  <h1 class="mb-2">Vraag om hulp via email</h1>
  <p class="lead">Wie helpt je met het verzamelen van verhalen?</p>
  <b-form action="">
    <div class="form-row">
      <div class="col-2 col-md-3">
        <div class="form-group firstname">
          <input type="text" v-model="form.firstname" class="form-control" placeholder="">
          <label for="firstname">Voornaam</label>
        </div>
      </div>
      <div class="col-2 col-md-3">
        <div class="form-group lastname">
          <input type="text" v-model="form.lastname" class="form-control" placeholder="">
          <label for="lastname">Familienaam</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input type="email" v-model="form.email" class="form-control" placeholder="">
          <label for="email">Email adres</label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Onderwerp" value="Verzamelen van herinneringen in foto en tekst">
      <label for="lastname">Onderwerp van de email</label>
    </div>

  </b-form>
  
  <div class="row">
    <div class="col-md-7">
      <textarea
      placeholder="Schrijf hier je persoonlijke boodschap"
      class="mb-3 form-control"
      rows="8"></textarea>

      <p>In de email komt automatisch meer info onder je bericht over hoe Prisma werk. <a href="#">Bekijk email voorvertoning</a></p>

      <button class="btn btn-primary btn-right" :disabled="isValidMessage">Verzend email</button>
      
    </div>
    <div class="col-md-5">
      <div class="card bg-light border-light">
        <div class="card-header"><h6 class="mb-0">Voorbeeld email tekst</h6></div>

        <div class="card-body">

          <p class="card-text">Met de familie verzamelen we verhalen van Lea die ik aan het rusthuis ga geven. Hiermee kan het personeel Lea dan beter leren kennen. </p>

          <p class="card-text">Help je mee? Kan je deze week de tijd nemen om enkele belangrijke foto's te scannen?</p>

          <p class="card-text"><a href="#" class="btn btn-sm btn-light">Gebruik deze tekst in je email</a></p>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection

@section ('scripts')
<script src="/js/family.js"></script>
@endsection
