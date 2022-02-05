@extends('layouts.index')

@section('assets')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/heros.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('css/album.css') }}"> --}}
    <style>
        .img-style {
            height: 30rem;
            background-size: cover;
            background-position: top;
            object-fit: cover;
            object-position: 50% 50%;
        }

    </style>
@endsection

@section('content')
    <section id="gallery">

    </section>

    {{-- contact us info --}}
    <section id="contact">
        <div class="container">
            <div class="row">

            </div>
        </div>
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        </div>
    </section>
@endsection
