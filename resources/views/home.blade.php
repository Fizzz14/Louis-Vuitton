@extends('layouts.template')

@section('content')
<section class="hero-section">
    <div class="hero-content">
        <h1>LOUIS VUITTON</h1>
        <p>Luxury Fashion & Leather Goods Since 1854</p>
        <a href="{{ route('gallery') }}" class="btn btn-luxury">
            <i class="fas fa-eye"></i> Explore Collection
        </a>
    </div>
</section>

<div class="container">
    <h2 class="section-title">Featured Collections</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-luxury">
                <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg" class="card-img-top" alt="Handbags">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--lv-brown);">Iconic Handbags</h5>
                    <p class="card-text">Discover our timeless collection of luxury handbags, crafted with the finest materials and attention to detail.</p>
                    <a href="{{ route('gallery') }}" class="btn btn-luxury btn-sm">View Collection</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-luxury">
                <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg" class="card-img-top" alt="Leather Goods">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--lv-brown);">Leather Goods</h5>
                    <p class="card-text">Exquisite leather accessories including wallets, belts, and travel goods made with traditional craftsmanship.</p>
                    <a href="{{ route('gallery') }}" class="btn btn-luxury btn-sm">View Collection</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-luxury">
                <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg" class="card-img-top" alt="Fashion">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--lv-brown);">Ready-to-Wear</h5>
                    <p class="card-text">Elegant fashion pieces that embody the Louis Vuitton spirit of luxury and sophistication.</p>
                    <a href="{{ route('gallery') }}" class="btn btn-luxury btn-sm">View Collection</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <h3 style="color: var(--lv-brown); margin-bottom: 2rem;">Why Choose Louis Vuitton?</h3>
        </div>
        <div class="col-md-3 text-center mb-4">
            <i class="fas fa-crown" style="font-size: 3rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
            <h5 style="color: var(--lv-brown);">Heritage</h5>
            <p>Over 160 years of luxury craftsmanship and innovation.</p>
        </div>
        <div class="col-md-3 text-center mb-4">
            <i class="fas fa-gem" style="font-size: 3rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
            <h5 style="color: var(--lv-brown);">Quality</h5>
            <p>Only the finest materials and meticulous attention to detail.</p>
        </div>
        <div class="col-md-3 text-center mb-4">
            <i class="fas fa-star" style="font-size: 3rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
            <h5 style="color: var(--lv-brown);">Exclusivity</h5>
            <p>Limited editions and unique pieces for discerning customers.</p>
        </div>
        <div class="col-md-3 text-center mb-4">
            <i class="fas fa-globe" style="font-size: 3rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
            <h5 style="color: var(--lv-brown);">Global</h5>
            <p>Worldwide presence with boutiques in major cities.</p>
        </div>
    </div>
</div>
@endsection
