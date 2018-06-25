@extends ('layout')

@section ('content')

<a href="{{ route('carehomes.create') }}" class="btn btn-secondary">Add care home</a>

<table class="table table-striped">

  @for ($i = 0; $i < 9; $i++)
  <tr>
    <td>Sint Monika</td>
    <td>Brussel</td>
    <td><a href="/residents/">More</a></td>
  </tr>
  @endfor

</table>

@endsection