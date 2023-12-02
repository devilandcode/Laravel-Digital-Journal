@extends('layouts.layout')

@section('title', $note->title)

@section('header')
    @include('notes.header.create')
@endsection


@section('content')
    <div class="container" style="flex: 1 1 auto;">
        <h1>Country - {{ $note->country->name }}</h1>
        <hr>
        <h2>{{ $note->title }}</h2>
        <p>{{ $note->description }}</p>
    </div>
@endsection
