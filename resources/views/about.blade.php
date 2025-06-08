@extends('layouts.template')

@section('content')
<div class="container">
    <h1 class="section-title">About Louis Vuitton</h1>

    <div class="about-content">
        <div class="row">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/1152077/pexels-photo-1152077.jpeg" class="img-fluid rounded" alt="Louis Vuitton Heritage" style="max-height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-6">
                <h3>Our Heritage</h3>
                <p>Founded in 1854, Louis Vuitton has been synonymous with luxury, quality, and innovation for over 160 years. What began as a small trunk-making workshop in Paris has evolved into one of the world's most prestigious fashion houses.</p>
                <p>Louis Vuitton revolutionized travel with his innovative flat-topped trunks, which were lighter and more practical than the traditional rounded-top trunks of the era. This spirit of innovation continues to drive the brand today.</p>
            </div>
        </div>
    </div>

    <div class="about-content">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg" class="img-fluid rounded" alt="Craftsmanship" style="max-height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-6 order-md-1">
                <h3>Exceptional Craftsmanship</h3>
                <p>Every Louis Vuitton piece is a testament to exceptional craftsmanship. Our artisans, many of whom have been with the company for decades, bring generations of expertise to every creation.</p>
                <p>From the selection of the finest materials to the meticulous hand-stitching process, each product undergoes rigorous quality control to ensure it meets our exacting standards.</p>
            </div>
        </div>
    </div>

    <div class="about-content">
        <div class="row">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg" class="img-fluid rounded" alt="Innovation" style="max-height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-6">
                <h3>Innovation & Tradition</h3>
                <p>While we honor our rich heritage, Louis Vuitton continues to push boundaries in fashion and luxury goods. We collaborate with renowned artists and designers to create collections that are both timeless and contemporary.</p>
                <p>Our commitment to sustainability and ethical practices ensures that luxury and responsibility go hand in hand, preserving our craft for future generations.</p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="about-content text-center">
                <h3>Our Values</h3>
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <i class="fas fa-heart" style="font-size: 2.5rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
                        <h5 style="color: var(--lv-brown);">Passion</h5>
                        <p>We are passionate about creating exceptional products that inspire and delight our customers.</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fas fa-handshake" style="font-size: 2.5rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
                        <h5 style="color: var(--lv-brown);">Excellence</h5>
                        <p>We strive for excellence in everything we do, from design to customer service.</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="fas fa-leaf" style="font-size: 2.5rem; color: var(--lv-gold); margin-bottom: 1rem;"></i>
                        <h5 style="color: var(--lv-brown);">Sustainability</h5>
                        <p>We are committed to sustainable practices and responsible luxury.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-content">
        <h3 class="text-center">Timeline</h3>
        <div class="row mt-4">
            <div class="col-md-3 text-center mb-4">
                <h4 style="color: var(--lv-gold);">1854</h4>
                <p><strong>Foundation</strong><br>Louis Vuitton opens his first store in Paris</p>
            </div>
            <div class="col-md-3 text-center mb-4">
                <h4 style="color: var(--lv-gold);">1896</h4>
                <p><strong>Monogram Canvas</strong><br>Introduction of the iconic LV monogram</p>
            </div>
            <div class="col-md-3 text-center mb-4">
                <h4 style="color: var(--lv-gold);">1987</h4>
                <p><strong>LVMH Formation</strong><br>Merger creating the luxury conglomerate</p>
            </div>
            <div class="col-md-3 text-center mb-4">
                <h4 style="color: var(--lv-gold);">Today</h4>
                <p><strong>Global Presence</strong><br>Over 460 stores worldwide</p>
            </div>
        </div>
    </div>
</div>
@endsection
