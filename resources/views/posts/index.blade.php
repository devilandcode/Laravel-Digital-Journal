@extends('layouts.layout')

@section('title', $note->title)

@section('header')
    @include('posts.header.create')
@endsection


@section('content')
    <div class="container" style="flex: 1 1 auto;">
        <h1>{{ $note->title }}</h1>
        <p>{{ $note->description }}</p>
    </div>
@endsection
