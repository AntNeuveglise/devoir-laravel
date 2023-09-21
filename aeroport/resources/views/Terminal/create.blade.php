@extends('layouts.app')

@section('content')
  <h2>Création</h2>
  <form action="{{ route('Terminal.store') }}" method="post">

    @csrf

    <div>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" required value="{{ old('nom') }}" maxlength="75">
    </div>

    <div>
      <label for="emplacement">Emplacement</label>
      <input type="text" name="emplacement" id="emplacement" required value="{{ old('emplacement') }}" maxlength="75">
    </div>

    <div>
      <label for="date_MIS">Date d'entrée</label>
      <input type="date" name="date_MIS" id="date_MIS" required value="{{ old('date_MIS') }}">
    </div>

    <div>
      <label for="Hall">Hall</label>
      <select name="Hall_id" id="Hall_id">
        @foreach ($Halls as $Hall)
          <option value="{{ $Hall->id }}">{{ $Hall->libelle }}</option>
        @endforeach
      </select>
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection
