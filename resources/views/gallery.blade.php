@extends('layouts.template')

@section('content')
<div class="container">
    <h1 class="section-title">Gallery</h1>
    <p class="text-center mb-5" style="font-size: 1.2rem; color: var(--lv-brown);">
        Explore our exquisite collection of luxury fashion and leather goods
    </p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg" alt="Luxury Handbag Collection">
                <div class="gallery-overlay">
                    <h5>Iconic Handbags</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg" alt="Premium Leather Goods">
                <div class="gallery-overlay">
                    <h5>Leather Accessories</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg" alt="Fashion Collection">
                <div class="gallery-overlay">
                    <h5>Ready-to-Wear</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Luxury Watches">
                <div class="gallery-overlay">
                    <h5>Timepieces</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1927259/pexels-photo-1927259.jpeg" alt="Travel Collection">
                <div class="gallery-overlay">
                    <h5>Travel Essentials</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1456706/pexels-photo-1456706.jpeg" alt="Jewelry Collection">
                <div class="gallery-overlay">
                    <h5>Fine Jewelry</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1598508/pexels-photo-1598508.jpeg" alt="Men's Collection">
                <div class="gallery-overlay">
                    <h5>Men's Collection</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1464624/pexels-photo-1464624.jpeg" alt="Women's Fashion">
                <div class="gallery-overlay">
                    <h5>Women's Fashion</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg" alt="Limited Edition">
                <div class="gallery-overlay">
                    <h5>Limited Edition</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="about-content text-center">
                <h3>Collection Highlights</h3>
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="card card-luxury">
                            <div class="card-body">
                                <i class="fas fa-star" style="font-size: 2rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
                                <h5 style="color: var(--lv-brown);">Signature Monogram</h5>
                                <p>Our iconic monogram canvas pieces featuring the classic LV pattern, representing timeless elegance and luxury craftsmanship.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card card-luxury">
                            <div class="card-body">
                                <i class="fas fa-gem" style="font-size: 2rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
                                <h5 style="color: var(--lv-brown);">Artisan Crafted</h5>
                                <p>Each piece is meticulously handcrafted by skilled artisans using traditional techniques passed down through generations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 text-center">
            <div class="about-content">
                <h4 style="color: var(--lv-brown); margin-bottom: 2rem;">Discover More</h4>
                <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                    Visit our boutiques worldwide to experience the full range of Louis Vuitton collections and receive personalized service from our expert consultants.
                </p>
                <a href="{{ route('about') }}" class="btn btn-luxury me-3">
                    <i class="fas fa-info-circle"></i> Learn More About Us
                </a>
                <a href="{{ route('home') }}" class="btn btn-luxury">
                    <i class="fas fa-home"></i> Back to Home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
