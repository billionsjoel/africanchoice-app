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
    <header id="home">
        <div class="row header" id="home">
            <div class="col-sm-12">
                <div class="center">
                    <span class="heading-main">African Choice Holdings ltd</span>
                    <span class="heading-sub mb-4 border-bottom border-teal">Uganda</span>
                    <span class="heading-sub P-4">"Heart of Perfect Farming."</span></p>
                    <a class="btn btn-warning btn-lg text-success" style="width:13rem; border-radius: 100px;"
                        href="#about-us">Learn More</a>
                </div>
            </div>
        </div>
    </header>

    {{-- hero section --}}
    <section id="about-us">
        <div class="px-4 py-5 my-5 text-center">
            <img src="{{ asset('images/logo.jpeg') }}" alt="logo" height="150em" width="165em">
            <h1 class="display-5 fw-bold">Background</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">African Choice holdings Limited is a fast-growing Agro
                    based company dealing in a wide range of agro based
                    products and services. African Choice Holdings imports
                    high quality pre-vaccinated day-old chicks, hatching
                    eggs, parent stock, concentrates from its strategic
                    partners HasTavuk and Bregan based in Turkey and
                    Netherland, these are ene of the biggest exporters of
                    high Quality Agro based products in the whole of
                    Europe. African Choice Holdings offers Consultations
                    veterinary services, Construction of poultry farms and
                    management, farming trainings</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a type="button" href="#hanging-icons" class="btn btn-success btn-lg px-4 gap-3 text-light">Read
                        More</a>
                    <a type="button" href="#contact" class="btn btn-outline-secondary btn-lg px-4">Contact Us</a>
                </div>
            </div>
        </div>


        {{-- vision mission core values --}}

        <div class="container px-4 py-5" id="hanging-icons">
            <h2 class="pb-2 border-bottom">Our Belief System</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" height="45" width="45" class="text-dark"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <div>
                        <h2>Mission</h2>
                        <p>To be a trust worthy and innovative global leader in the market</p>
                        {{-- <a href="#" class="btn btn-primary">
                    Primary button
                </a> --}}
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" height="45" width="45" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h2>Vision</h2>
                        <p>To be the leading and trusted supplier of Agro-based products in the growing market as the
                            quality
                            managed company.</p>
                        {{-- <a href="#" class="btn btn-primary">
                    Primary button
                </a> --}}
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" height="45" width="45" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9 3a1 1 0 012 0v5.5a.5.5 0 001 0V4a1 1 0 112 0v4.5a.5.5 0 001 0V6a1 1 0 112 0v5a7 7 0 11-14 0V9a1 1 0 012 0v2.5a.5.5 0 001 0V4a1 1 0 012 0v4.5a.5.5 0 001 0V3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h2>Core Values</h2>
                        <p>
                        <ul>
                            <li>Innovative</li>
                            <li>Integrity</li>
                            <li>Competitive pricing</li>
                            <li>Service Excellence</li>
                            <li>Team work.</li>
                        </ul>
                        </p>
                        {{-- <a href="#" class="btn btn-primary">
                    Primary button
                </a> --}}
                        <div id="services">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- products section --}}
    <section id="services">
        <div class="container px-4 py-5 mt-4" id="custom-cards">
            <h2 class="pb-2">Our Services</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg img-style"
                        style="background-image: url('images/Farm-Construction.jpeg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Farm Construction</h2>
                            {{-- <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>fertilized</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>Incubating</small>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg img-style"
                        style="background-image: url('images/Management-of-farms.jpeg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Farm management
                            </h2>
                            {{-- <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>Pakistan</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>4d</small>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg img-style"
                        style="background-image: url('images/Trainings-Farmers.jpeg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Farmer's Training</h2>
                            {{-- <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>California</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>5d</small>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg img-style"
                        style="background-image: url('images/consultancy.jpeg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Consulting & Training</h2>
                            {{-- <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>fertilized</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>Incubating</small>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg img-style"
                        style="background-image: url('images/Management-of-farms.jpeg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Laboratory tests and reports
                            </h2>
                            {{-- <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>Pakistan</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>4d</small>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg img-style"
                        style="background-image: url('images/Vertinary.jpeg');">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Veterinary services</h2>
                            {{-- <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                        class="rounded-circle border border-white">
                                </li>
                                <li class="d-flex align-items-center me-3">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#geo-fill" />
                                    </svg>
                                    <small>California</small>
                                </li>
                                <li class="d-flex align-items-center">
                                    <svg class="bi me-2" width="1em" height="1em">
                                        <use xlink:href="#calendar3" />
                                    </svg>
                                    <small>5d</small>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- types of products --}}
    <section id="products">
        <div class="album py-5 bg-light" id="products">
            <div class="container">
                <div class="container px-4 py-5" id="custom-cards">
                    <h2 class="pb-2">Our Products</h2>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-4">
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/Lohmann-Brown-Layer.png') }}" alt=""
                                    width="100%" height="150">

                                <div class="card-body">
                                    <h5 class="card-title">Lohmann Brown Layer</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li>It is commercially bred, used mainly for egg laying, at which they excel</li>
                                        <li>They start laying at around 18 weeks of age, lays for 2 years of production</li>
                                        <li>It gives a brown egg shell.</li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/Hy-Line-Brown-Layer.jpeg') }}" alt=""
                                    width="100%" height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Hy-Line Brown Layers</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li> Prolific Producer, Rich Brown Eggs, Hardy Layer</li>
                                        <li> The Hy-Line Brown is the world's most balanced brown egg layer. She
                                            produces over 355 rich brown
                                            eggs to 80 weeks, peaks well and begins lay early with optimum egg size. These
                                            traits combined with
                                            an excellent temperament, unrivalled feed efficiency, the best interior egg
                                            quality in the market and
                                            unbeatable liveability and feather cover give the Hy-Line Brown the perfect
                                            balance for both
                                            Enriched Colony and Alternative production systems, which means more profit for
                                            the poultry
                                            producer.</li>
                                        <li> With the Hy-Line Brown's superior performance and world beating
                                            efficiencies it's the perfect choice
                                            for a more profitable future. </li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/Hy-Line-W-80.jpeg') }}" alt=""
                                    width="100%" height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Hy-Line W80</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li>Robust, Prolific, Strong Performance in Alternative Systems, Long Single-Cycle
                                            Lay</li>
                                        <li> The Hy-Line W-80 is a robust white egg layer for all housing systems and
                                            environments. This bird
                                            delivers prolific egg numbers, excellent egg shell strength, and strong
                                            performance under
                                            challenging environments and low-density feed rations. </li>
                                        <li> The W-80 is adaptable to alternative production systems and remains calm for
                                            easy management.
                                            For markets requiring a larger egg size, the W-80 Plus gives producers the same
                                            great traits with an
                                            egg weight profile two grams heavier.
                                        </li>
                                        <li>Its persistency for long single-cycle lay means more eggs on five grams less
                                            feed. Producers gain
                                            more profitability with a feed savings of approximately two kilograms per bird
                                            per year versus
                                            competing brands.
                                        </li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/parents.gif') }}" alt="" width="100%"
                                    height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Kuroilers</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li>It matures in about 10 weeks.</li>
                                        <li>At maturity, The hen weighs about 3.5kg</li>
                                        <li>It starts laying eggs at 5 months</li>
                                        <li>At 4 months, they are ready to be sold</li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/cobb-500-broiler.jpeg') }}" alt=""
                                    width="100%" height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Cobb 500 Broilers</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li>Superior performace on lower cost feed ratio.</li>
                                        <li>Lowest cost of live weight produced.</li>
                                        <li>Excellent growth rate.</li>
                                        <li>Most feed efficient</li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/Ross-308-Broiler.png') }}" alt=""
                                    width="100%" height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Ross 308 Broilers</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li> It gives consistent performance
                                            in the broiler house. </li>
                                        <li> Produces a high number
                                            of eggs combined with
                                            good hatchability </li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/Concetrates.jpeg') }}" alt=""
                                    width="100%" height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Concentrates/Feeds</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li>Pre-starter feeds</li>
                                        <li>Layer concentrates</li>
                                        <li>Broiler concentrates</li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/hatch.jpeg') }}" alt="" width="100%"
                                    height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Hatching Eggs</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li>Layers</li>
                                        <li>Broilers</li>
                                        <li>Kuroilers</li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="img-style" src="{{ asset('images/day-old.jpeg') }}" alt="" width="100%"
                                    height="150">
                                <div class="card-body">
                                    <h5 class="card-title">Day Old Chicks</h5>
                                    <p class="card-text">
                                    <ul>
                                        <li>One day old.</li>
                                        <li>Vaccinated.</li>
                                        <li>Ready for brooding</li>
                                    </ul>
                                    </p>
                                    {{-- <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
