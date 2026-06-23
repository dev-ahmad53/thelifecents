@extends('layouts.app')

@section('title', 'About Us - Passionate Digital Strategists')

@section('content')
<!-- About Hero Section -->
<section class="about-hero-section">
    <div class="container">
        <div class="hero-grid-layout reverse-grid">
            <div class="hero-visual-panel">
                <div class="hero-illustration-wrapper seo-illustration-wrapper">
                    <!-- SEO Illustration -->
                    <img src="{{ asset('images/about_seo.png') }}" alt="Expert SEO Solutions" class="hero-illustration-img">
                    
                    <!-- Overlay animated symbols simulating work -->
                    <div class="character-overlay rotating-gear gear-illustration">⚙️</div>
                    <div class="character-overlay scanning-magnifier magnifier-illustration">🔍</div>
                    <div class="character-overlay pulsing-target target-illustration">🎯</div>
                </div>
            </div>
            
            <div class="hero-content text-left">
                <div class="tag-badge">Welcome to TheLifeCents</div>
                <h1>About Us</h1>
                <p class="hero-subtitle">
                    At TheLifeCents, we believe that modern digital marketing should not be built on vague templates. Every business is unique, and so should be its growth plan. We specialize in deep industry research, audience modeling, and conversion rate optimization.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Pillars Section -->
<section class="pillars-section">
    <div class="container">
        <div class="pillars-grid">
            <!-- Card 1 -->
            <div class="pillar-card card-glass">
                <h3>Who Are We</h3>
                <p>We are passionate digital strategists committed to your success. Using data-driven methods and deep analysis, we help businesses and individuals thrive online. Our focus is on delivering measurable results and converting your traffic into leads.</p>
            </div>
            
            <!-- Card 2 -->
            <div class="pillar-card card-glass">
                <h3>Our Mission</h3>
                <p>Our mission is to empower businesses and entrepreneurs to succeed in the digital world. Through ethical practices, innovative strategies, and actionable insights, we help you increase traffic, boost conversions, and build lasting authority.</p>
            </div>

            <!-- Card 3 -->
            <div class="pillar-card card-glass">
                <h3>What We Do</h3>
                <p>We deliver expert Search Engine Optimization (SEO), Content Marketing, Guest Posting & Link Building, Copywriting Brilliance, Social Media Marketing, and Website Design & Development optimized for conversions.</p>
            </div>
        </div>
    </div>
</section>

<!-- 6-D Process Section -->
<section id="process" class="process-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">6-D Process</h2>
            <p class="section-desc">How our team plans, executes, and delivers results for your project.</p>
        </div>
        
        <div class="process-grid-display">
            <!-- Step 1 -->
            <div class="process-step-box card-glass">
                <div class="step-header">
                    <span class="num">01.</span>
                    <h4>Discover</h4>
                </div>
                <p>Our journey begins with thoroughly exploring your goals, and aspirations. Through in-depth discussions and comprehensive analysis, we uncover insights that pave the way for success.</p>
            </div>

            <!-- Step 2 -->
            <div class="process-step-box card-glass">
                <div class="step-header">
                    <span class="num">02.</span>
                    <h4>Define</h4>
                </div>
                <p>With a clear understanding of your objectives, we set actionable goals and metrics to measure progress. Establishing a solid foundation ensures alignment throughout the project.</p>
            </div>

            <!-- Step 3 -->
            <div class="process-step-box card-glass">
                <div class="step-header">
                    <span class="num">03.</span>
                    <h4>Design</h4>
                </div>
                <p>Leveraging creativity and expertise, we craft custom blueprints tailored to your unique challenges and opportunities. Our design phase matches form and functionality to deliver compelling experiences.</p>
            </div>

            <!-- Step 4 -->
            <div class="process-step-box card-glass">
                <div class="step-header">
                    <span class="num">04.</span>
                    <h4>Develop</h4>
                </div>
                <p>With meticulous attention to detail, we bring your vision to life through robust development. Our team of experts utilizes cutting-edge technologies and best practices to build robust, scalable solutions.</p>
            </div>

            <!-- Step 5 -->
            <div class="process-step-box card-glass">
                <div class="step-header">
                    <span class="num">05.</span>
                    <h4>Deploy</h4>
                </div>
                <p>As we prepare for launch, we rigorously test and refine our creations to ensure seamless deployment. With precision and efficiency, we ensure your solution is ready to make an impact from day one.</p>
            </div>

            <!-- Step 6 -->
            <div class="process-step-box card-glass">
                <div class="step-header">
                    <span class="num">06.</span>
                    <h4>Discover</h4>
                </div>
                <p>Our journey does not end at launch. We focus on delivering exceptional results that exceed expectations. We deliver outcomes that drive growth and build trust through collaboration, communication, and continuous improvement.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us & Stats -->
<section class="why-choose-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-info">
                <h2>Why Choose Us?</h2>
                <p>At TheLifeCents, we function as a trusted partner for digital growth. We help businesses understand their core market, capture organic search value, and develop scalable funnels.</p>
                
                <ul class="why-bullets">
                    <li><strong>Expertise in Diverse Digital Solutions:</strong> Across SEO, content, design, and code.</li>
                    <li><strong>Innovative Approach:</strong> Utilizing human-guided AI to scale output without compromising quality.</li>
                    <li><strong>Proven Track Record:</strong> Backed by client testimonials and measurable ranking increases.</li>
                    <li><strong>Ethical and Responsible Practices:</strong> Absolute transparency in outreach, links, and reporting.</li>
                    <li><strong>Continuous Learning and Adaptation:</strong> Regularly adjusting to Google Core algorithm updates.</li>
                    <li><strong>Holistic Growth Approach:</strong> Bridging the gap between brand copy and technical speed.</li>
                </ul>
            </div>
            
            <div class="about-visual card-glass text-center">
                <div class="methodology-title">TheLifeCents Performance Metrics</div>
                <!-- Stats Grid -->
                <div class="why-stats-grid">
                    <div class="why-stat-box">
                        <span class="stat-number" data-target="150">0</span><span class="stat-plus">+</span>
                        <span class="stat-label">Projects Delivered</span>
                    </div>
                    <div class="why-stat-box">
                        <span class="stat-number" data-target="60">0</span><span class="stat-plus">+</span>
                        <span class="stat-label">Potential Clients</span>
                    </div>
                    <div class="why-stat-box">
                        <span class="stat-number" data-target="150">0</span><span class="stat-plus">+</span>
                        <span class="stat-label">Positive Feedback</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Team Section -->
<section id="team" class="team-section">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-desc">From SEO optimization and content writing to guest posting, copywriting, social media marketing, and website development, our team of experts is ready to help you achieve your goals.</p>
        </div>
        
        <div class="team-grid">
            <!-- Member 1 -->
            <div class="team-card card-glass text-center">
                <div class="team-avatar-box">
    <div class="avatar-circle avatar-gradient-2">
        <img src="{{ asset('images/junaid.jpg') }}" alt="junaid" 
             style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;"
             onerror="this.style.display='none'; this.parentElement.innerHTML='F';">
    </div>
</div>
                <h4>Junaid Hafeez</h4>
                <p class="role">Founder / SEO Strategist</p>
                <p class="bio">Passionate strategist with over 6 years of expertise guiding brands to rank on search engines.</p>
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
                <p class="bio">Creative editor structuring authority guides, capsule wardrobe blogs, and copywriting campaigns.</p>
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
                <p class="bio">Full-stack engineer building fast, responsive, and secure digital conversion platforms.</p>
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
