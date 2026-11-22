@extends('layouts.app')

@section('title', 'Home | Timpla Café')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <p class="hero-subtitle">WELCOME TO TIMPLA CAFÉ</p>

            <h1>
                Your Daily Cup of
                <span>Happiness.</span>
            </h1>

            <p class="hero-description">
                Take a break from the busy day.
                Enjoy freshly brewed coffee, delicious treats,
                and moments worth remembering.
            </p>

            <a href="#featured" class="hero-button">
                Explore Our Coffee
            </a>
        </div>
    </section>


    <!-- Introduction Section -->
    <section class="introduction">
        <p class="section-label">MORE THAN JUST COFFEE</p>

        <h2>A Place to Slow Down.</h2>

        <p>
            At Timpla Café, every cup is prepared with care.
            We believe great coffee brings people together
            and makes ordinary moments special.
        </p>
    </section>


    <!-- Featured Coffee Section -->
    <section class="featured" id="featured">

        <div class="section-heading">
            <p class="section-label">OUR FAVORITES</p>
            <h2>Featured Coffee</h2>
            <p>Discover some of our favorite drinks.</p>
        </div>

        <div class="coffee-carousel">

            <button class="carousel-btn prev-btn" id="prevBtn">
                &#10094;
            </button>

            <div class="coffee-slider" id="coffeeSlider">

                <article class="coffee-card">
                    <img
                        src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=600"
                        alt="Iced coffee"
                    >
                    <h3>Iced Coffee</h3>
                    <p>Refreshing coffee served over ice.</p>
                </article>

                <article class="coffee-card">
                    <img
                        src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600"
                        alt="Cappuccino"
                    >
                    <h3>Cappuccino</h3>
                    <p>Rich espresso topped with creamy foam.</p>
                </article>

                <article class="coffee-card">
                    <img
                        src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600"
                        alt="Hot brewed coffee"
                    >
                    <h3>Classic Brew</h3>
                    <p>Simple, smooth, and freshly brewed.</p>
                </article>

            </div>

            <button class="carousel-btn next-btn" id="nextBtn">
                &#10095;
            </button>

        </div>

    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush