
@extends('layout')

@section('title', 'Carrera | '. $project->title)
    
@section('content')

    <h1>
        
        {{ $project->title}}


    </h1>
    <p>
        {{ $project->description}}

    </p>
    <p>
        {{ $project->created_at->diffForHumans()}}
    </p>

    
@endsection