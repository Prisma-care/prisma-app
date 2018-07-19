@extends ('layout') @section ('content')
<div id="root" class="container mt-4">
  
  <h1 class="mb-2">Vraag om hulp via email</h1>
  <p class="lead">Wie helpt je met het verzamelen van verhalen?</p>
  <transition name="fade">
  <div class="alert alert-success" role="alert" v-if="alert === true">
    <h4 class="alert-heading">Je email is verzonden!</h4>
    <p>Ken je nog iemand die...? </p>
    <hr>
    <a href="/residents/1/family" class="btn btn-primary">Terug naar overzicht</a>
  </div>
  </transition>
  
  <form action="">
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

  </form>

  <div class="row">
    <div class="col-md-7">
      <textarea placeholder="Schrijf hier je persoonlijke boodschap" class="mb-3 form-control" rows="8" v-model="message">@{{message}}</textarea>

      <p>In de email komt automatisch meer info onder je bericht over hoe Prisma werk.
        <a href="#">Bekijk email voorvertoning</a>
      </p>

      <button class="btn btn-primary btn-right" @click="send" :disabled="isValidMessage">Verzend email</button>

    </div>
    <div class="col-md-5">
      <div class="card bg-light border-light">
        <div class="card-header">
          <h6 class="mb-0">Voorbeeld tekst</h6>
        </div>

        <div class="card-body">
          <div class="example-text" v-html="example">
            @{{example}}
          </div>
          <p class="card-text mt-2">
            <button class="btn btn-sm btn-light" @click="fillMessage" :disabled="isMessageFilled">Gebruik deze tekst in je email</button>
          </p>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection @section ('scripts')
<script src="/js/family.js"></script>
@endsection