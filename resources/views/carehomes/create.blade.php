@extends ('layout')

@section ('content')

<h1 class="text-center mb-4">WZC toevoegen</h1>

<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-6">

      <div id="root">
        <form class="needs-validation" novalidate="">

          <div class="form-group">
            <input type="text" class="form-control" v-model="name" placeholder="" value="" required="" autofocus>
            <label for="name">Naam</label>
            <div class="invalid-feedback">
              Naam is vereist
            </div>
          </div>

          <div class="form-group">
            <input type="email" class="form-control" v-model="email" placeholder="info@voorbeeld.be">
            <label for="email">Email</label>
            <div class="invalid-feedback">
              Email adres is vereist
            </div>
          </div>

          <div class="form-group">
            <select class="custom-select d-block w-100" v-model="city" required="">
              <option value="">Gemeente</option>
              <option>Brussel</option>
            </select>
            <div class="invalid-feedback">
              Gemeente is vereist
            </div>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="send-invite" checked>
            <label class="custom-control-label" for="send-invite">Stuur email uitnodiging</label>
          </div>

          <hr class="mb-4">

          <button class="btn btn-primary btn-block" type="submit" :disabled="isValid">Voeg toe</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/vue"></script>

<script>
  var app = new Vue({
    el: '#root',
    data : {
      name : '',
      email : '',
      city : ''
    },
    computed : {
      isValid() {
        return (this.name != '' && this.email != '' && this.city != '') ? false : 'disabled';
      }
    }
  })
</script>

@endsection