@extends ('layout')

@section ('content')

@include('residents/_header')

<div class="container">

  <div class="row">
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">

      <form class="needs-validation" novalidate="">

        <div class="form-group">
          <input type="text" class="form-control" id="displayname" placeholder="Roepnaam" value="Mr Feron" required="true" spellcheck="true">
          <label for="displayname">Roepnaam</label>
          <div class="invalid-feedback">Roepnaam is vereist.</div>
        </div>

        <div class="d-flex flex-row">
          <div class="form-group mr-2">
            <input type="text" class="form-control" id="firstname" placeholder="Voornaam" value="Charles" required="true" spellcheck="true">
            <label for="firstname">Voornaam</label>
            <div class="invalid-feedback">Voornaam is vereist.</div>    
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="lastname" placeholder="Familienaam" value="Feron" required="true" spellcheck="true">
            <label for="lastname">Familienaam</label>
            <div class="invalid-feedback">Familienaam is vereist.</div>    
          </div>

        </div>

        {{-- Date of birth --}}
        <div class="row">
          <div class="col-md-10 col-lg-6">
            <div class="form-group mt-0 mb-4 pb-3">
              <label for="dob">Geboortedatum</label>
            </div>

            <div class="d-flex flex-row">

              <div class="form-group mr-2" style="min-width: 5rem">
                <input type="number" class="form-control" id="dob-day" placeholder="dd" maxlength="2">
                <label for="dob-day">Dag</label>
              </div>

              <div class="form-group mr-2" style="min-width: 5rem">        
                <input type="number" class="form-control" id="dob-month" placeholder="mm" maxlength="2">
                <label for="dob-month">Maand</label>
              </div>

              <div class="form-group" style="min-width: 5rem">
                <input type="number" class="form-control" id="dob-year" placeholder="jjjj" maxlength="4">
                <label for="dob-year">Jaar</label>
              </div>

            </div>

          </div>
        </div>

        {{-- Photo --}}
        <div class="form-group">
          <input type="file" id="photo" class="form-control" aria-describedby="fileHelp">
          <label for="photo">Foto</label>
        </div>

        <hr class="mb-4">

        <button class="btn btn-primary btn-block" type="submit">Opslaan</button>
      </form>

    </div>
  </div>

  @endsection