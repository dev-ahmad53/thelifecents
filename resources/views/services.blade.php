@extends('layouts.app')

@section('title', 'Services - Expert Digital Solutions')

@section('content')
<!-- Services Hero -->
<section class="services-hero-section">
    <div class="container">
        <div class="hero-grid-layout">
            <div class="hero-content text-left">
                <div class="tag-badge">What We Excel In</div>
                <h1>Services</h1>
                <p class="hero-subtitle font-bold">We provide a wide range of Services</p>
                <p>Welcome to TheLifeCents, your one-stop destination for expert digital services designed to elevate your online presence and drive success.</p>
            </div>
            
            <div class="hero-visual-panel">
                <div class="hero-illustration-wrapper dev-illustration-wrapper">
                    <!-- Developers Illustration -->
                    <img src="{{ asset('images/hero_developers.png') }}" alt="Our Services" class="hero-illustration-img">
                    
                    <!-- Overlay animated symbols simulating characters work -->
                    <div class="character-overlay overlay-tag-bracket float-item" style="top: 15%; left: 25%; animation-delay: 0s;">{ }</div>
                    <div class="character-overlay overlay-tag-code float-item" style="top: 8%; left: 45%; animation-delay: 1.5s;">&lt;HTML&gt;</div>
                    <div class="character-overlay overlay-tag-div float-item" style="top: 38%; right: 12%; animation-delay: 0.8s;">&lt;/&gt;</div>
                    
                    <!-- Screen code overlays -->
                    <div class="monitor-code-box">
                        <span class="code-line line-1"></span>
                        <span class="code-line line-2"></span>
                        <span class="code-line line-3"></span>
                    </div>

                    <!-- Keyboard pulsing particles -->
                    <div class="keyboard-spark spark-1"></div>
                    <div class="keyboard-spark spark-2"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Services Grid -->
<section class="services-detailed-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">How Can We Help You?</h2>
            <p class="section-desc">Welcome to TheLifeCents, your one-stop destination for expert digital services designed to elevate your online presence and drive success.</p>
        </div>
        
        <div class="services-grid">
            <!-- SEO Mastery -->
            <div class="service-card card-glass text-center">
                <div class="service-icon-box mx-auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                </div>
                <h3>SEO Mastery</h3>
                <p>Boost your website's visibility and reach the top of search engine results with our cutting-edge SEO strategies.</p>
            </div>

            <!-- Content Crafting -->
            <div class="service-card card-glass text-center">
                <div class="service-icon-box mx-auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </div>
                <h3>Content Crafting</h3>
                <p>Captivate your audience with compelling content tailored to your brand's voice and vision.</p>
            </div>

            <!-- Guest Posting -->
            <div class="service-card card-glass text-center">
                <div class="service-icon-box mx-auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                </div>
                <h3>Guest Posting</h3>
                <p>Expand your reach and build authority in your industry with strategic guest posting opportunities on over 30,000 high-traffic platforms.</p>
            </div>

            <!-- Copywriting Brilliance -->
            <div class="service-card card-glass text-center">
                <div class="service-icon-box mx-auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h3>Copywriting Brilliance</h3>
                <p>Communicate your message effectively and leave a lasting impression with our expert copywriting services.</p>
            </div>

            <!-- Social Media Sorcery -->
            <div class="service-card card-glass text-center">
                <div class="service-icon-box mx-auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <line x1="17" y1="8" x2="23" y2="8"></line>
                        <line x1="20" y1="5" x2="20" y2="11"></line>
                    </svg>
                </div>
                <h3>Social Media Sorcery</h3>
                <p>Harness the power of social media to engage your audience, drive traffic, and build meaningful connections with our social media marketing expertise.</p>
            </div>

            <!-- Website Wizardry -->
            <div class="service-card card-glass text-center">
                <div class="service-icon-box mx-auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="16 18 22 12 16 6"></polyline>
                        <polyline points="8 6 2 12 8 18"></polyline>
                    </svg>
                </div>
                <h3>Website Wizardry</h3>
                <p>From sleek designs to seamless functionality, trust our team to create a stunning website that stands out.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-desc">At TheLifeCents, client satisfaction is our top priority. Here's what some of our valued clients have to say about their experience working with us:</p>
        </div>
        
        <div class="carousel-container">
            <div class="testimonials-slider" id="testimonials-slider">
                <!-- Testimonial 1 -->
                <div class="testimonial-slide active card-glass">
                    <div class="client-quote">"TheLifeCents has been instrumental in helping us enhance our online presence and reach our target audience effectively. Their team's expertise, dedication, and attention to detail have made them a valuable partner in our digital marketing efforts."</div>
                    <div class="client-profile">
                        <div class="client-meta">
                            <span class="client-name">John Doe</span>
                            <span class="client-role">CEO, Eddie Bauer Amphib Cargo Shorts</span>
                        </div>
                        <div class="client-metric gradient-text">Growth Partner</div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-slide card-glass">
                    <div class="client-quote">"I've been consistently impressed with the quality of service and professionalism provided by this team. They go above and beyond to understand our needs and deliver tailored solutions that drive real results. Highly recommended!"</div>
                    <div class="client-profile">
                        <div class="client-meta">
                            <span class="client-name">Anna Smith</span>
                            <span class="client-role">Owner, Stuart Agni Boutique</span>
                        </div>
                        <div class="client-metric gradient-text">Highly Recommended</div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-slide card-glass">
                    <div class="client-quote">"Their strategic SEO and content marketing approach has significantly increased our website traffic and conversions. We couldn't be happier with the results."</div>
                    <div class="client-profile">
                        <div class="client-meta">
                            <span class="client-name">Michael K Johnson</span>
                            <span class="client-role">Founder, OnePoint Tech Solutions</span>
                        </div>
                        <div class="client-metric gradient-text">SEO Success</div>
                    </div>
                </div>
            </div>
            
            <div class="carousel-nav">
                <button id="prev-btn" class="carousel-btn" aria-label="Previous Testimonial">←</button>
                <div class="carousel-dots" id="carousel-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button id="next-btn" class="carousel-btn" aria-label="Next Testimonial">→</button>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-banner-section">
    <div class="container">
        <div class="cta-banner card-glass text-center">
            <h2>Join us on a discovery at TheLifeCents.</h2>
            <p>Contact us today to learn how we can help you elevate your digital presence and achieve your business goals.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary">Contact Now</a>
        </div>
    </div>
</section>
@endsection
