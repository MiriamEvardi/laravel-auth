@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Qui sono i tuoi progetti</h1>
    <a href="{{ route('admin.projects.project') }}">Visualizza i progetti</a>
</div>
@endsection