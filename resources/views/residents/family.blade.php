@extends ('layout')

@section ('content')
<div id="root" class="container mt-4">

  <div v-if="step === 1">
    <div class="row">
      <div class="col-md-8">
        <h1>Nodig familie uit</h1>
    <p class="lead">Waar babbelt Lea graag over? Verzamel samen beelden die personeel in het woonzorgcentrum helpen om een gesprek aan te knopen.</p>

      </div>
      <div class="col-md-4 text-right pt-5">
        <a href="{{ route('residents.familyinvite') }}" class="btn btn-primary">Vraag hulp aan een familielid</a>
      </div>
    </div>

    

    <div class="row">
      <div class="col-4">
        <img src="/img/invite-ownphotos.jpg" alt="Foto's uit jullie familie albums" class="img-fluid mb-4">
      </div>
      <div class="col-8 pt-5">
        <h4>Wie zal de familiefoto's digitaliseren?</h4>
        <p>Zoek in jullie foto albums naar belangrijke beelden in het leven van Lea. Wie in de familie heeft de albums en kan foto's inscannen met computer of smartphone? </p>

        <a href="{{ route('residents.familyinvite') }}" class="btn btn-light">Vraag hulp</a>
      </div>
    </div>

    <div class="row">
      <div class="col-8 pt-5">
        <h4>Wie helpt foto's en video's opzoeken op internet?</h4>
        <p>Zoek op het internet naar foto’s en video’s die leuke verhalen losmaken. Wie kent bijvoorbeeld de favoriete muziek van Lea? Wie is goed in video's over vroeger opzoeken op Youtube?</p>
        <a href="{{ route('residents.familyinvite') }}" class="btn btn-light">Vraag hulp</a>
      </div>
      <div class="col-4">
        <img src="/img/invite-generalstories.jpg" alt="Beelden over de interesses van Lea" class="img-fluid">
      </div>
    </div>

  </div>

</div>

@endsection