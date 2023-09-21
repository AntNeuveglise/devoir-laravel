@extends('layouts.app')

@section('content')
  <a href="{{ route('matiere.create') }}" class="btn btn-primary">Ajouter</a>
  <ul>
    @forelse ($matieres as $matiere)
      <li>
        <div>
          {{ $matiere->libelle }} [{{ $matiere->niveau }}]
        </div>
        <div>
          <a href="{{ route('matiere.edit', ['matiere' => $matiere->id]) }}">Modifier</a>
        </div>
      </li>
    @empty
      <li>
        Aucune matière connue
      </li>
    @endforelse
  </ul>
@endsection
