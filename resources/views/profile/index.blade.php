@extends('layouts.layout')

@section('title', 'profile')

@section('header')
@include('blocks.header.profile')
@include('profile.header.index')
@endsection

@section('content')
    <div class="container-fluid"  style="height: 300px">
        <img src="{{ asset('images/image.jpeg') }}" class="lj d-inline-block w-100 h-100" alt="...">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2">
                <img src="" alt="" style="height: 50px; width: 50px">
                <p class="d-inline-block">Blog</p>
            </div>
            <div class="col-4">
                <p class="mb-0 " style="">Username</p>
            </div>
        </div>
        <div class="menu">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">RECENT ENTRIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">FRIENDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">TAGS</a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <button type="button" class="btn btn-primary">Create your first entry</button>
                </div>
                <div class="col-2">

                </div>
            </div>
        </div>
        <div class="container">

        </div>

    </div>
@endsection

