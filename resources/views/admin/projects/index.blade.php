@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Elenco dei Progetti</h1>

    <ul class="list-group">
        @foreach ($projects as $project)
        <li class="list-group-item">{{ $project->name }}</li>
        @endforeach
    </ul>


</div>
@endsection