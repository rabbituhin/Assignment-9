<!-- resources/views/projects.blade.php -->

@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>
    
    @if($projects->count() > 0)
        <ul>
            @foreach($projects as $project)
                <li>
                    <h2>{{ $project->title }}</h2>
                    <p>{{ $project->description }}</p>
                
                </li>
            @endforeach
        </ul>
    @else
        <p>No projects available at the moment.</p>
    @endif
@endsection

