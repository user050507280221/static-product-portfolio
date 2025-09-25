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

        <!-- Intro Text -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">About</h2>
                <p class="justified">{{ $portfolio['about'] }}</p>
                <h3>Our Expertise</h3>
            </div>
        </div>

        <!-- Image + Info Grid -->
        <div class="row g-4">
            @foreach ($portfolio['education'] as $item)
                <div class="col-md-6 text-center">
                    <a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer">
                        <img
                            src="{{ $item['image'] }}"
                            alt="{{ $item['title'] }}"
                            style="width: 100%; height: 220px; border-radius: 8px; object-fit: cover; margin-bottom: 15px;"
                        >
                    </a>
                    <p class="justified">
                        <strong>{{ $item['title'] }}</strong><br>
                        {{ $item['description'] }}
                    </p>
                </div>
            @endforeach
        </div>

    </div>
</section>


<!-- TESTIMONIALS SECTION -->
<section id="testimonials" class="section">
    <div class="container">
        <h2 class="section-title">Testimonials</h2>
        <div class="row g-4">
            @foreach ($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm p-3">
                        <p class="justified">"{{ $testimonial['quote'] }}"</p>
                        <p class="text-end"><strong>— {{ $testimonial['author'] }}</strong></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>

        <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" placeholder="Your Name" required class="form-input">
            </div>
            <div class="mb-3">
                <input type="email" name="email" placeholder="Your Email" required class="form-input">
            </div>
            <div class="mb-3">
                <textarea name="message" placeholder="Your Message" rows="5" required class="form-input"></textarea>
            </div>
            <button type="submit" class="btn-custom">Submit</button>
        </form>

        <div class="social-links mt-4 text-center">
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

