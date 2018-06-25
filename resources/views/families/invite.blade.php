@extends ('layout')

@section ('content')

<h1>Nodig familie uit</h1>

<form class="needs-validation" novalidate="">

  <label for="firstName">Naam</label>
  <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
  <div class="invalid-feedback">
    Valid first name is required.
  </div>

  <label for="lastName">Familienaam</label>
  <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
  <div class="invalid-feedback">
    Valid last name is required.
  </div>
  
  <label for="email">Email</label>
  <input type="email" class="form-control" id="email" placeholder="you@example.com">
  <div class="invalid-feedback">
    Please enter a valid email address.
  </div>
  
  <hr class="mb-4">
  
  <button class="btn btn-primary btn-block" type="submit">Verder</button>
</form>


@endsection