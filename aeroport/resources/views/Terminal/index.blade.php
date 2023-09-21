@extends('layouts.app')

@section('content')
  <a href="{{ route('professeur.create') }}" class="btn btn-primary">Ajouter</a>
  <ul>
    @forelse ($professeurs as $professeur)
      <li>
        <div>
          {{ $professeur->identite() }}
        </div>
        <div>
          <a href="{{ route('professeur.edit', ['professeur' => $professeur->id]) }}">Modifier</a>
        </div>
      </li>
    @empty
      <li>
        Aucun professeur connu
      </li>
    @endforelse
  </ul>
@endsection
