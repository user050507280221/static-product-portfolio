@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Coffee Experience')

@section('content')

<section id="hero" class="hero-section">
    <div class="container hero-container">
        <div class="hero-text">
            <h1>{{ $portfolio['name'] }}</h1>
            <h3>{{ $portfolio['title'] }}</h3>
            <p>{{ $portfolio['bio'] }}</p>
            <div class="social-icons">
                @foreach ($portfolio['social_links'] as $platform => $link)
                    @if ($platform === 'LinkedIn')
                        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                    @elseif ($platform === 'GitHub')
                        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
                    @elseif ($platform === 'Email')
                        <a href="mailto:{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
                    @elseif ($platform === 'Facebook')
                        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    @elseif ($platform === 'Instagram')
                        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">About</h2>
        <p class="justified">{{ $portfolio['about'] }}</p>

        <h3>Our Expertise</h3>
@foreach ($portfolio['education'] as $item)
    <div style="margin-bottom: 20px;">
        <p class="justified"><strong>{{ $item['title'] }}</strong> — {{ $item['description'] }}</p>
        <a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer" style="display: inline-block; margin-top: 10px;">
            <img 
                src="{{ $item['image'] }}" 
                alt="{{ $item['title'] }}" 
                style="width: 150px; border-radius: 8px; object-fit: cover;"
            >
        </a>
    </div>
@endforeach



        <h3>What We Do</h3>
        <p class="justified">
            @foreach ($portfolio['skills'] as $skill)
                {{ $skill }}@if (!$loop->last), @endif
            @endforeach
        </p>
    </div>
</section>

<!-- PRODUCTS SECTION -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">Our Products</h2>
        @foreach ($portfolio['projects'] as $title => $project)
            <p class="justified">
                <strong>
                    <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer">{{ $title }}</a>
                </strong><br>
                {{ $project['details'] }}
            </p>
        @endforeach
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <p class="justified"><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
        <p class="justified"><strong>Location:</strong> {{ $portfolio['location'] }}</p>

        <div class="social-links">
            @foreach ($portfolio['social_links'] as $platform => $link)
                @if ($platform === 'LinkedIn')
                    <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                @elseif ($platform === 'GitHub')
                    <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
                @elseif ($platform === 'Email')
                    <a href="mailto:{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
                @elseif ($platform === 'Facebook')
                    <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                @elseif ($platform === 'Instagram')
                    <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                @endif
            @endforeach
        </div>
    </div>
</section>

@endsection
