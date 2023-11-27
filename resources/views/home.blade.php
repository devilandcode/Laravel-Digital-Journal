@extends('layouts.app')

@section('title', 'Home page')

@section('content')
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Preview</th>
            <th scope="col">Link</th>
        </tr>
        </thead>
        <tbody>
        @foreach($notes as $note)
        <tr>
            <th scope="row">{{ $note->id }}</th>
            <td>{{ $note->title }}</td>
            <td>{{ $note->preview }}</td>
            <td><a href="/notes/{{ $note->slug }}">Read more</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="container my-3">
        {{ $notes->links()}}
    </div>


</div>
@endsection
