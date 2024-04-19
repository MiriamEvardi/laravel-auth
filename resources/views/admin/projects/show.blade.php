@extends('layouts/app')

@section('content')
<div class="container py-5">
    <h1>{{$project->name}}</h1>
    <img src="{{$project->preview}}" alt="">
    <p class="mt-5"> {{$project->description}}</p>
    <p>Technologies: {{$project->technologies}}</p>
    <p>Link: {{$project->link}}</p>

    <div>
        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-primary">Edit</a>

        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
        </form>
    </div>


</div>



@endsection