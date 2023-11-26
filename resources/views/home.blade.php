
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div style="text-align: center; padding: 50px;">
        <h1>Welcome to My Portfolio!</h1>
        <p>Hello, I'm Md.Fazla Rabbi Tuhin, a passionate web developer based in Beanibazar,Sylhet.</p>
        <p>Explore my projects and feel free to get in touch!</p>

        <a href="{{ route('projects.index') }}" style="padding: 10px 20px; background-color: #3490dc; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 20px; display: inline-block;">View My Projects</a>
    </div>
@endsection
