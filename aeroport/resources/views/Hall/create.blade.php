@extends('layouts.app')

@section('content')
  <h2>Création</h2>
  <form action="{{ route('Hall.store') }}" method="post">

    @csrf

    <div>
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" value="{{ old('nom') }}" required maxlength="75">
    </div>

    <div>
      <label for="nom">Niveau</label>
      <input type="text" name="niveau" id="niveau" value="{{ old('niveau') }}" required maxlength="20">
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection
