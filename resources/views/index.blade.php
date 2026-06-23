@extends('layouts.app')

@section('title', 'Home - Expert SEO, Content, and Digital Marketing Solutions')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-bg-gradients">
            <div class="grad-blob grad-blob-1"></div>
            <div class="grad-blob grad-blob-2"></div>
        </div>
        <div class="container">
            <div class="hero-grid-layout">
                <div class="hero-content text-left">
                    <div class="tag-badge">Turn Insights into Actionable Growth</div>
                    <h1>Expert SEO, Content, and Digital Marketing Solutions</h1>
                    <p class="hero-subtitle">
                        At TheLifeCents, we help businesses and entrepreneurs grow online, attract the right audience, and
                        boost conversions. Every strategy is practical, data-driven, and designed for real results.
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
                        <a href="{{ route('services') }}" class="btn btn-secondary">Explore Services</a>
                    </div>
                </div>
                <div class="hero-visual-panel">
                    <div class="floating-hero-card card-glass">
                        <div class="mock-dashboard">
                            <div class="dashboard-header">
                                <span class="dot-red"></span>
                                <span class="dot-yellow"></span>
                                <span class="dot-green"></span>
                                <span class="dash-title">TheLifeCents Growth Dashboard</span>
                            </div>
                            <div class="dashboard-stats-grid">
                                <div class="dash-stat">
                                    <span class="lbl">Organic Traffic</span>
                                    <span class="val">+382%</span>
                                </div>
                                <div class="dash-stat">
                                    <span class="lbl">Conversion Rate</span>
                                    <span class="val">4.8%</span>
                                </div>
                            </div>
                            <div class="dashboard-chart">
                                <svg viewBox="0 0 100 40" class="chart-svg">
                                    <path d="M0 35 Q15 25 30 28 T60 12 T90 5 T100 2" fill="none"
                                        stroke="var(--color-accent)" stroke-width="3" stroke-linecap="round" />
                                    <path d="M0 35 Q15 25 30 28 T60 12 T90 5 T100 2 L100 40 L0 40 Z" fill="url(#chart-grad)"
                                        opacity="0.15" />
                                    <defs>
                                        <linearGradient id="chart-grad" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="var(--color-accent)" />
                                            <stop offset="100%" stop-color="transparent" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Highlight Section -->
    <section id="services-highlight" class="services-highlight-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">How We Help You Grow</h2>
                <p class="section-desc">Practical digital services designed to elevate your online presence and drive
                    success.</p>
            </div>

            <div class="services-grid">
                <!-- SEO Card -->
                <div class="service-card card-glass">
                    <div class="service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="20" x2="18" y2="10"></line>
                            <line x1="12" y1="20" x2="12" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="14"></line>
                        </svg>
                    </div>
                    <h3>SEO Mastery</h3>
                    <p>Looking for more traffic? Our experienced SEO strategists committed to your growth design custom SEO
                        strategies tailored to your industry.</p>
                    <a href="{{ route('services') }}" class="read-more-link">Learn More →</a>
                </div>

                <!-- Content Marketing -->
                <div class="service-card card-glass">
                    <div class="service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <h3>Content Marketing</h3>
                    <p>Engage your audience with high-quality, SEO-optimized content tailored to your brand's voice and
                        deliver conversions.</p>
                    <a href="{{ route('services') }}" class="read-more-link">Learn More →</a>
                </div>

                <!-- Guest Posting -->
                <div class="service-card card-glass">
                    <div class="service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                    </div>
                    <h3>Guest Posting</h3>
                    <p>Expand your reach and build authority in your industry with strategic guest posting opportunities on
                        over 30,000+ high-traffic platforms.</p>
                    <a href="{{ route('services') }}" class="read-more-link">Learn More →</a>
                </div>

                <!-- Copywriting -->
                <div class="service-card card-glass">
                    <div class="service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </div>
                    <h3>Copywriting Brilliance</h3>
                    <p>Turn visitors into customers with persuasive copy that communicates your message clearly and drives
                        action.</p>
                    <a href="{{ route('services') }}" class="read-more-link">Learn More →</a>
                </div>

                <!-- Social Media -->
                <div class="service-card card-glass">
                    <div class="service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                    </div>
                    <h3>Social Media Marketing</h3>
                    <p>Increase engagement, grow followers, and drive traffic with targeted campaigns that build lasting
                        connections.</p>
                    <a href="{{ route('services') }}" class="read-more-link">Learn More →</a>
                </div>

                <!-- Web Dev -->
                <div class="service-card card-glass">
                    <div class="service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h3>Website Design & Development</h3>
                    <p>Create a visually stunning, responsive, and mobile-friendly website that represents your brand and
                        delivers results.</p>
                    <a href="{{ route('services') }}" class="read-more-link">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-desc">At TheLifeCents, client satisfaction is our top priority. Here's what some of our
                    valued clients have to say about their experience working with us:</p>
            </div>

            <div class="carousel-container">
                <div class="testimonials-slider" id="testimonials-slider">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-slide active card-glass">
                        <div class="client-quote">"TheLifeCents has been instrumental in helping us enhance our online
                            presence and reach our target audience effectively. Their team's expertise, dedication, and
                            attention to detail have made them a valuable partner in our digital marketing efforts."</div>
                        <div class="client-profile">
                            <div class="client-meta">
                                <span class="client-name">John Doe</span>
                                <span class="client-role">CEO, Eddie Bauer Amphib Cargo Shorts</span>
                            </div>
                            <div class="client-metric gradient-text">SEO Partner</div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-slide card-glass">
                        <div class="client-quote">"I've been consistently impressed with the quality of service and
                            professionalism provided by this team. They go above and beyond to understand our needs and
                            deliver tailored solutions that drive real results. Highly recommended!"</div>
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
                        <div class="client-quote">"Their strategic SEO and content marketing approach has significantly
                            increased our website traffic and conversions. We couldn't be happier with the results."</div>
                        <div class="client-profile">
                            <div class="client-meta">
                                <span class="client-name">Michael K Johnson</span>
                                <span class="client-role">Founder, OnePoint Tech Solutions</span>
                            </div>
                            <div class="client-metric gradient-text">2.4x Leads</div>
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

    <!-- Meet Our Team Section -->
    <section id="team" class="team-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="section-desc">From SEO optimization and content writing to guest posting, copywriting, social
                    media marketing, and website development, our team of experts is ready to help you achieve your goals.
                </p>
            </div>

            <div class="team-grid">
                <!-- Member 1 -->
                <div class="team-card card-glass text-center">
                    <div class="team-avatar-box">
                        <div class="avatar-circle avatar-gradient-1">
                            <img src="{{ asset('images/junaid.jpg') }}" alt="Junaid"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"
                                onerror="this.style.display='none'; this.parentElement.innerHTML='JH';">
                        </div>
                    </div>
                    <h4>Junaid Hafeez</h4>
                    <p class="role">Founder / SEO Strategist</p>
                    <p class="bio">Passionate strategist with over 6 years of expertise guiding brands to rank on search
                        engines.</p>
                </div>

                <!-- Member 2 -->
                <div class="team-card card-glass text-center">
                    <div class="team-avatar-box">
                        <div class="avatar-circle avatar-gradient-2">
                            <img src="{{ asset('images/faiz.jpg') }}" alt="Faiz"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"
                                onerror="this.style.display='none'; this.parentElement.innerHTML='F';">
                        </div>
                    </div>
                    <h4>Syed Awais Fiaz</h4>
                    <p class="role">Content Lead</p>
                    <p class="bio">Creative editor structuring authority guides, capsule wardrobe blogs, and copywriting
                        campaigns.</p>
                </div>

                <!-- Member 3 -->
                <div class="team-card card-glass text-center">
                    <div class="team-avatar-box">
                        <div class="avatar-circle avatar-gradient-2">
                            <img src="{{ asset('images/ghalib.jpg') }}" alt="ghalib"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"
                                onerror="this.style.display='none'; this.parentElement.innerHTML='F';">
                        </div>
                    </div>
                    <h4>Ghalib Hussain</h4>
                    <p class="role">Technical Lead</p>
                    <p class="bio">Full-stack engineer building fast, responsive, and secure digital conversion platforms.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- RECENT BLOGS SECTION - DYNAMIC               -->
    <!-- ============================================ -->
    <section id="blog-preview" class="blog-preview-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Recent Blogs</h2>
                <p class="section-desc">Explore our latest ideas, marketing updates, and lifestyle tips to enrich your everyday life.</p>
            </div>

            <div class="blog-grid">
                @forelse($recentPosts as $post)
                <article class="blog-card card-glass">
                    <div class="blog-image-fallback" style="
                        background: linear-gradient(135deg, 
                            @switch($post->category)
                                @case('technology') #3b82f6 0%, #1d4ed8 100% @break
                                @case('health') #10b981 0%, #047857 100% @break
                                @case('fashion') #ec4899 0%, #be185d 100% @break
                                @case('travel') #f59e0b 0%, #d97706 100% @break
                                @case('parenting') #8b5cf6 0%, #6d28d9 100% @break
                                @case('business') #ef4444 0%, #b91c1c 100% @break
                                @case('lifestyle') #f97316 0%, #c2410c 100% @break
                                @case('personal_dev') #a855f7 0%, #7e22ce 100% @break
                                @default #6b7280 0%, #374151 100% @break
                            @endswitch
                        );
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        padding: 20px;
                        min-height: 180px;
                        position: relative;
                        overflow: hidden;
                    ">
                        <!-- Category Icon -->
                        <div style="
                            position: absolute;
                            font-size: 70px;
                            opacity: 0.15;
                            transform: rotate(-10deg);
                        ">
                            @switch($post->category)
                                @case('technology') 💻 @break
                                @case('health') 🏥 @break
                                @case('fashion') 👗 @break
                                @case('travel') ✈️ @break
                                @case('parenting') 👶 @break
                                @case('business') 💼 @break
                                @case('lifestyle') 🌟 @break
                                @case('personal_dev') 🧠 @break
                                @default 📝 @break
                            @endswitch
                        </div>
                        
                        <!-- Category Name -->
                        <div style="
                            color: white;
                            font-size: 22px;
                            font-weight: 700;
                            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
                            z-index: 1;
                            letter-spacing: 1px;
                            text-transform: uppercase;
                            text-align: center;
                        ">
                            {{ ucfirst(str_replace('_', ' ', $post->category)) }}
                        </div>
                        
                        <!-- Category Tag -->
                        <div class="blog-category-tag">{{ ucfirst(str_replace('_', ' ', $post->category)) }}</div>
                    </div>
                    
                    <div class="blog-card-content">
                        <span class="blog-date">By {{ $post->author }} • {{ $post->read_time }} min read</span>
                        <h3>
                            <a href="{{ route('blog', $post->slug) }}">{{ Str::limit($post->title, 55) }}</a>
                        </h3>
                        <p>{{ Str::limit(strip_tags($post->excerpt ?? $post->content), 100) }}</p>
                        <a href="{{ route('blog', $post->slug) }}" class="read-more-link">Read Blog →</a>
                    </div>
                </article>
                @empty
                <div class="col-12 text-center" style="grid-column: 1 / -1; padding: 60px 0;">
                    <h3 style="color: #6b7280;">No blog posts found</h3>
                    <p style="color: #9ca3af;">Please run the seeder to add posts.</p>
                </div>
                @endforelse
            </div>
            
            <div class="text-center" style="margin-top: 40px;">
                <a href="{{ route('blog') }}" class="btn btn-secondary">View All Blogs</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-banner-section">
        <div class="container">
            <div class="cta-banner card-glass text-center">
                <h2>Join us on a discovery at TheLifeCents.</h2>
                <p>Contact us today to learn how we can help you elevate your digital presence and achieve your business
                    goals.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Contact Now</a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* ============================================ */
    /* BLOG PREVIEW SECTION STYLES                 */
    /* ============================================ */
    .blog-preview-section {
        padding: 60px 0;
        background: #f8fafc;
    }

    .section-header {
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 36px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 10px;
    }

    .section-desc {
        color: #64748b;
        font-size: 16px;
        max-width: 600px;
        margin: 0 auto;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .blog-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .blog-image-fallback {
        min-height: 180px;
        position: relative;
        flex-shrink: 0;
    }

    .blog-category-tag {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255,255,255,0.95);
        color: #1f2937;
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        backdrop-filter: blur(4px);
    }

    .blog-card-content {
        padding: 20px 24px 24px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .blog-date {
        font-size: 13px;
        color: #6b7280;
        margin-bottom: 10px;
    }

    .blog-card-content h3 {
        font-size: 18px;
        line-height: 1.4;
        margin-bottom: 10px;
        font-weight: 700;
        min-height: 50px;
    }

    .blog-card-content h3 a {
        color: #1f2937;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .blog-card-content h3 a:hover {
        color: #2563eb;
    }

    .blog-card-content p {
        color: #6b7280;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 16px;
        flex: 1;
    }

    .read-more-link {
        color: #2563eb;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        transition: gap 0.3s ease;
        align-self: flex-start;
    }

    .read-more-link:hover {
        gap: 8px;
        color: #1d4ed8;
    }

    .read-more-link::after {
        content: '→';
        transition: transform 0.3s ease;
    }

    .read-more-link:hover::after {
        transform: translateX(4px);
    }

    .btn-secondary {
        background: transparent;
        color: #2563eb;
        padding: 12px 32px;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        border: 2px solid #2563eb;
        cursor: pointer;
    }

    .btn-secondary:hover {
        background: #2563eb;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(37, 99, 235, 0.15);
    }

    /* ============================================ */
    /* RESPONSIVE                                  */
    /* ============================================ */
    @media (max-width: 992px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .section-title {
            font-size: 28px;
        }

        .blog-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .blog-card {
            margin-left: 20px;
            margin-right: 20px;
        }
    }

    @media (max-width: 576px) {
        .blog-card {
            margin-left: 10px;
            margin-right: 10px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Testimonial Carousel
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        let currentSlide = 0;
        let interval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
            });
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', function() {
                clearInterval(interval);
                prevSlide();
                startAutoSlide();
            });

            nextBtn.addEventListener('click', function() {
                clearInterval(interval);
                nextSlide();
                startAutoSlide();
            });
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                clearInterval(interval);
                currentSlide = index;
                showSlide(currentSlide);
                startAutoSlide();
            });
        });

        function startAutoSlide() {
            interval = setInterval(nextSlide, 5000);
        }

        startAutoSlide();
    });
</script>
@endpush