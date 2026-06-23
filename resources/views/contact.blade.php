@extends('layouts.app')

@section('title', 'Contact Us - Scale Your Business Online')

@section('content')
<!-- Contact Page Hero Section -->
<section class="contact-hero-section">
    <div class="container">
        <div class="section-header text-center">
            <div class="tag-badge">Connect With Us</div>
            <h1 class="section-title">Contact Us</h1>
            <p class="section-desc">Let's build your growth engine. Schedule a free consultation with our digital marketing experts.</p>
        </div>
        
        <div class="contact-grid">
            <!-- Left Side Details & Custom CSS Visual Map -->
            <div class="contact-info-panel">
                <h2>Scale Your Brand</h2>
                <p class="contact-desc">Ready to attract the right audience and compound your digital revenue? Reach out directly or complete the scheduling form.</p>
                
                <div class="contact-details">
                    <div class="detail-item">
                        <div class="detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <h5>Headquarters</h5>
                            <p>GT Road, Haripur, KPK, Pakistan</p>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h5>Email Enquiries</h5>
                            <p><a href="mailto:info@thelifecents.com">info@thelifecents.com</a></p>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div>
                            <h5>Call / WhatsApp</h5>
                            <p><a href="tel:+923345557778">+92 334 5557778</a></p>
                        </div>
                    </div>
                </div>
                
                <!-- Support agent animated illustration -->
                <div class="visual-location-card card-glass text-center">
                    <div class="hero-illustration-wrapper contact-illustration-wrapper">
                        <img src="{{ asset('images/contact_support.png') }}" alt="Customer Support" class="hero-illustration-img" style="max-height: 180px;">
                        
                        <!-- Overlay animated symbols simulating work -->
                        <div class="character-overlay flying-envelope mail-illustration-1">✉️</div>
                        <div class="character-overlay flying-envelope mail-illustration-2">✉️</div>
                        <div class="character-overlay typing-bubble chat-illustration">💬</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side Interactive Form -->
            <div class="contact-form-panel card-glass" id="form-container">
                @if(session('success'))
                    <div class="form-success-message" style="display: block;">
                        <div class="success-icon">✓</div>
                        <h3>Message Stored!</h3>
                        <p>{{ session('success') }}</p>
                        <p>Our digital strategist will get in touch with you shortly.</p>
                        <a href="{{ route('contact') }}" class="btn btn-secondary btn-sm">Send Another Message</a>
                    </div>
                @else
                    <form id="contact-form" action="{{ route('contact.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-group @error('name') error @enderror">
                            <label for="form-name">Full Name</label>
                            <input type="text" id="form-name" name="name" value="{{ old('name') }}" placeholder="John Doe" required>
                            <span class="error-msg">@error('name') {{ $message }} @else Please enter your name @enderror</span>
                        </div>
                        
                        <div class="form-group @error('email') error @enderror">
                            <label for="form-email">Work Email</label>
                            <input type="email" id="form-email" name="email" value="{{ old('email') }}" placeholder="john@company.com" required>
                            <span class="error-msg">@error('email') {{ $message }} @else Please enter a valid email address @enderror</span>
                        </div>
                        
                        <div class="form-group @error('service') error @enderror">
                            <label for="form-service">Required Service</label>
                            <select id="form-service" name="service" required>
                                <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a Service...</option>
                                <option value="seo" {{ old('service') === 'seo' ? 'selected' : '' }}>SEO Mastery</option>
                                <option value="content" {{ old('service') === 'content' ? 'selected' : '' }}>Content Crafting</option>
                                <option value="outreach" {{ old('service') === 'outreach' ? 'selected' : '' }}>Guest Posting</option>
                                <option value="web" {{ old('service') === 'web' ? 'selected' : '' }}>Website Wizardry</option>
                                <option value="copywriting" {{ old('service') === 'copywriting' ? 'selected' : '' }}>Copywriting Brilliance</option>
                                <option value="social" {{ old('service') === 'social' ? 'selected' : '' }}>Social Media Sorcery</option>
                                <option value="other" {{ old('service') === 'other' ? 'selected' : '' }}>General Enquiry</option>
                            </select>
                            <span class="error-msg">@error('service') {{ $message }} @else Please select a service option @enderror</span>
                        </div>
                        
                        <div class="form-group @error('message') error @enderror">
                            <label for="form-message">Tell us about your brand goals</label>
                            <textarea id="form-message" name="message" rows="5" placeholder="How can we help your business scale online?..." required>{{ old('message') }}</textarea>
                            <span class="error-msg">@error('message') {{ $message }} @else Please share your project details @enderror</span>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block" id="submit-btn">
                            <span>Send Message</span>
                            <span class="spinner" style="display:none;"></span>
                        </button>
                    </form>
                    
                    <!-- Success View (used for AJAX fallback) -->
                    <div class="form-success-message" id="success-view" style="display: none;">
                        <div class="success-icon">✓</div>
                        <h3>Message Stored!</h3>
                        <p>Thank you for reaching out. Your submission has been saved directly to our database. A digital strategist from TheLifeCents team will contact you within 24 hours.</p>
                        <button class="btn btn-secondary btn-sm" id="reset-form-btn">Send Another Message</button>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
