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
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row mt-4">
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/broilers inspecton-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/brooded broilers-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/collected eggs-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/grown broilers-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/happy workers in farm-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/layers in house with workers-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/layers with eggs-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/team-ink.jpeg') }}" class="img-thumbnail" alt="Cinque Terre">
                </div>
                <div class="col-md-4 mt-4">
                    <img src="{{ asset('images/gallery/worker in layers-ink.jpeg') }}" class="img-thumbnail"
                        alt="Cinque Terre">
                </div>
            </div>
        </div>
    </section>
@endsection
