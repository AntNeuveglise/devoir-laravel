@extends('layouts.app')

@section('title', $professeur->identite())

@section('content')
  <h1>Présentation du professeur</h1>

  @if ($retraite)
    <p class="text-danger">A la retraite</p>
  @else
    <p class="text-info">En activité</p>
  @endif

  <h2>Identité</h2>
  <p>{{ $professeur->identite() }}</p>

  <h2>Date d'entrée</h2>
  <p>{{ $professeur->date_entree }}</p>

  <h2>Matiere</h2>
  <p>{{ $professeur->matiere->libelle }}</p>
@endsection
