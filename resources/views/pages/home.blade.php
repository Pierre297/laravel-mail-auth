@extends('layouts.main-layout')
@section('content')

<h1>Hello World</h1>

<videogames-component user= "{{ Auth::check() }}"></videogames-component>
    
@endsection