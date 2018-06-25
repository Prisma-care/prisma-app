@extends ('layout')

@section ('content')

@include('_breadcrumb')

<h1>Voorkeuren van Mr Feron</h4>
  <form class="needs-validation" novalidate="">

    <div class="row">
      @for ($i = 0; $i < 8; $i++)

      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleFormControlTextarea1" class="lead text-muted d-flex align-items-middle mt-4"><i class="material-icons text-muted mr-2">local_hospital</i> Zorg</label>

          <h3 Zorg</h3>

          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

      </div>

      @endfor

    </div>

    <hr class="mb-4">
    
    <button class="btn btn-primary btn-block" type="submit">Sla op</button>

  </form>


  @endsection