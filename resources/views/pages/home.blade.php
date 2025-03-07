@extends('layouts.app')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

<header class="hero">
    <div class="hero-video">
        <video autoplay loop muted>
            <source src="{{ asset('video/4761711-uhd_4096_2160_25fps.mp4') }}" type="video/mp4">
            Je browser ondersteunt de video-tag niet.
        </video>
    </div>
    <div class="hero-content">
        <h1>Vechters Wereldwijd Verbinden</h1>
        <p>Global Combat brengt vechters, organisaties en toernooien samen in één wereldwijd netwerk.</p>
        <div class="cta-buttons">
            <a href="#about" class="cta-btn">Ontdek Global Combat</a>
        </div>
    </div>
</header>

<section id="about" class="section about">
    <div class="container">
        <h2>Onze Missie</h2>
        <p>Bij Global Combat draait alles om het verbinden van vechters wereldwijd. Of je nu een amateur bent die zijn eerste stappen in de ring zet, of een ervaren wereldkampioen, wij bieden een platform waar jij kunt groeien, leren en je netwerk kunt uitbreiden.</p>
    </div>
</section>

<section class="section features">
    <div class="container">
        <h2>Onze Functionaliteiten</h2>
        <div class="feature-items">
            <div class="feature-item">
                <img src="{{ asset('images/databeheer.jpg') }}" alt="Databeheer" class="feature-img">
                <h3>Geavanceerd Databeheer</h3>
                <p>Betrouwbare statistieken voor vechters en promotors.</p>
            </div>
            <div class="feature-item">
                <img src="{{ asset('images/matchmaking.jpg') }}" alt="Matchmaking" class="feature-img">
                <h3>Internationale Matchmaking</h3>
                <p>Verbind met vechters en toernooien wereldwijd.</p>
            </div>
        </div>
    </div>
</section>

<section id="trusted" class="section trusted">
    <div class="container">
        <h2>ZE HEBBEN ONS VERTROUWD</h2>
        <div class="logo-slider">
            <div class="logo-track">
                <div class="logo-item"><img src="{{ asset('images/logo1.png') }}" alt="Logo 1"></div>
                <div class="logo-item"><img src="{{ asset('images/logo2.png') }}" alt="Logo 2"></div>
                <div class="logo-item"><img src="{{ asset('images/logo3.png') }}" alt="Logo 3"></div>
                <div class="logo-item"><img src="{{ asset('images/logo4.png') }}" alt="Logo 4"></div>
            </div>
        </div>
    </div>
</section>

<section id="join" class="cta-section">
    <div class="container">
        <h2>Word Deel van Ons Netwerk</h2>
        <p>Verbind je met vechters, trainers en organisaties wereldwijd.</p>
        <a href="{{ route('pages.wordlid') }}" class="cta-btn">Word Lid</a>
    </div>
</section>

@endsection

@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
