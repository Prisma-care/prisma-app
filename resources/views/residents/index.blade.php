@extends ('layout')

@section ('content')

@php 
$residents = ['Lea', 'Monsieur Masure', 'Madame Briard', 'Luc', 'Mr Feron', 'Felix', 'Madame De Vooght', 'Madame Pelgrims', 'Roel'];
@endphp

<div class="container mt-4">
  <div class="row">

    @for ($i = 0; $i < 9; $i++)

    <div class="col-6 col-md-4 col-lg-3">
      <a href="{{ route('residents.show') }}">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="img/tmp/profile_<?=$i+1?>.jpg" alt="">
          <div class="card-body">
            <p class="card-title text-center mb-0"><?=$residents[$i]?></p>
          </div>
        </div>
      </a>
    </div>

    @endfor

  </div>
</div>

<div class="text-center">
  <a href="{{ route('carehomes.create') }}" class="btn btn-light">Bewoner toevoegen</a>
</div>

@endsection