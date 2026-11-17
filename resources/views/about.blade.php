
@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<section class="about-hero">
    <div class="about-container">
        <span class="about-label">WELCOME TO TIMPLA CAFÉ</span>
        <h1>More Than Coffee,<br>A Place to Connect.</h1>
        <p>
            Every cup tells a story. At Timpla Café, we bring people
            together through good coffee, delicious treats, and warm hospitality.
        </p>
        <a href="#our-story" class="about-button">Discover Our Story</a>
    </div>
</section>

<section class="about-story" id="our-story">
    <div class="about-container about-two-column">
        <div>
            <span class="about-label">OUR STORY</span>
            <h2>A Little Place with a Lot of Heart</h2>
        </div>

        <div>
            <p>
                Timpla Café is built around a simple idea: good food and
                good coffee make everyday moments special. We aim to create
                a welcoming place where friends, families, and individuals
                can relax, enjoy their favorite drinks, and feel at home.
            </p>

            <p id="about-more" hidden>
                From carefully prepared beverages to a comfortable café
                atmosphere, our goal is to make every visit memorable.
                Whether you are catching up with friends, taking a break,
                or working on something important, Timpla Café welcomes you.
            </p>

            <button type="button" id="read-more-btn" class="about-read-button"
                aria-expanded="false" aria-controls="about-more">
                Read More +
            </button>
        </div>
    </div>
</section>

<section class="about-purpose">
    <div class="about-container">
        <div class="about-heading">
            <span class="about-label">WHAT WE BELIEVE</span>
            <h2>Our Mission & Vision</h2>
        </div>

        <div class="about-cards">
            <article class="about-card">
                <div class="about-icon">☕</div>
                <h3>Our Mission</h3>
                <p>
                    To serve enjoyable food and beverages while providing
                    friendly service and a welcoming environment for everyone.
                </p>
            </article>

            <article class="about-card">
                <div class="about-icon">✦</div>
                <h3>Our Vision</h3>
                <p>
                    To become a beloved café destination known for quality,
                    comfort, meaningful connections, and memorable experiences.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="about-team">
    <div class="about-container">
        <div class="about-heading">
            <span class="about-label">THE PEOPLE BEHIND THE EXPERIENCE</span>
            <h2>Meet Our Café Team</h2>
            <p>Every great café experience starts with people who care.</p>
        </div>

        <div class="about-cards">
            <article class="about-card team-card">
                <div class="about-icon">☕</div>
                <h3>Our Baristas</h3>
                <p>Preparing every cup with care, creativity, and attention to detail.</p>
            </article>

            <article class="about-card team-card">
                <div class="about-icon">🍰</div>
                <h3>Our Kitchen Team</h3>
                <p>Making sure every meal and treat is prepared with quality in mind.</p>
            </article>

            <article class="about-card team-card">
                <div class="about-icon">♡</div>
                <h3>Our Service Team</h3>
                <p>Making every guest feel comfortable, welcome, and appreciated.</p>
            </article>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush
