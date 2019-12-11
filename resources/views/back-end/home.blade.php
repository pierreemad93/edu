@extends('back-end.layout.app')
@section('title')
    HomePage
@endsection
@section('content')

    @component('back-end.layout.navbar')
        @slot('nav_title')
            Home page
        @endslot
    @endcomponent

    <h1>Home Page</h1>

@endsection
