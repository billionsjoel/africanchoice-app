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
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Feel free to contact us here</h1>
                    <p class="col-lg-10 fs-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="2em" height="2em"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">Kyaliwajjala Kata Complex</h6>
                                    <p class="mb-0 opacity-75">Opp Shell Room No. 40-41</p>
                                </div>
                                {{-- <small class="opacity-50 text-nowrap">now</small> --}}
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" class="text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                            </svg>
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">+256 (0) 200 925 015</h6>
                                    <p class="mb-0 opacity-75">+256 (0) 788 030 454</p>
                                </div>
                                {{-- <small class="opacity-50 text-nowrap">3d</small> --}}
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" class="text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">africanchoiceholdingsltd@gmail.com</h6>
                                    <p class="mb-0 opacity-75">info@africanchoiceholdings.com</p>
                                </div>
                                {{-- <small class="opacity-50 text-nowrap">1w</small> --}}
                            </div>
                        </a>
                    </div>
                    </p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea rows="10" cols="6" class="form-control" id="floatingPassword"
                                placeholder="Message"></textarea>
                            <label for="floatingPassword">Message</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Am not a robot
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-success text-light" type="submit">Send Message</button>
                        <hr class="my-4">
                        <small class="text-muted">By clicking send message, you agree to the terms of use.</small>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
