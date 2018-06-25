@extends ('layout')

@section ('content')

<div class="container">
  <ul class="list-unstyled">

    <li class="card mb-3 pb-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5><a href="{{ route('residents.index') }}" class="card-title">Bellevue</a></h5>
            <span class="text-muted">Vorst</span>
          </div>
          <div class="col text-right">
            <a href="{{ route('carehomes.create') }}" class="btn btn-sm btn-light">Edit</a>    
          </div>
        </div>
      </div>
    </li>
    
    <li class="card mb-3 pb-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5><a href="{{ route('residents.index') }}" class="card-title">Clos Bizet</a></h5>
            <span class="text-muted">Anderlecht</span>
          </div>
          <div class="col text-right">
            <a href="{{ route('carehomes.create') }}" class="btn btn-sm btn-light">Edit</a>    
          </div>
        </div>
      </div>
    </li>

    <li class="card mb-3 pb-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5><a href="{{ route('residents.index') }}" class="card-title">Magnolia</a></h5>
            <span class="text-muted">Laken</span>
          </div>
          <div class="col text-right">
            <a href="{{ route('carehomes.create') }}" class="btn btn-sm btn-light">Edit</a>    
          </div>
        </div>
      </div>
    </li>
    
    <li class="card mb-3 pb-3 pt-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5><a href="{{ route('residents.index') }}" class="card-title">Sint Monika</a></h5>
            <span class="text-muted">Brussel</span>
          </div>
          <div class="col text-right">
            <a href="{{ route('carehomes.create') }}" class="btn btn-sm btn-light">Edit</a>    
          </div>
        </div>
      </div>
    </li>

  </ul>
</div>

<div class="text-center">
  <a href="{{ route('carehomes.create') }}" class="btn btn-light">Woonzorgcentrum toevoegen</a>
</div>
@endsection