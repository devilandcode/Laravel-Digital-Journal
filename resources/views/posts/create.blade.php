@extends('layouts.layout')

@section('title', 'Create Note')

@section('header')
    @include('posts.header.create')
@endsection

@section('content')
<h1 style="text-align: center">Create New Note</h1>
<div class="container">
    <form action="/post/create" method="post">
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>Choose Country</option>
                <option value="1">Russia</option>
                <option value="2">France</option>
                <option value="3">USA</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Amazing travel">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Create Note</button>
        </div>
    </form>
</div>

@endsection
