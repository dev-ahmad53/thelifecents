@extends('layouts.app')

@section('title', 'Blog - Explore Insights, Ideas, and Inspiration')

@section('content')
<!-- Blog Hero Section -->
<section class="blog-hero-section">
    <div class="container">
        <div class="hero-grid-layout">
            <div class="hero-content text-left">
                <div class="tag-badge">Insights & Ideas</div>
                <h1>BLOGS</h1>
                <p class="hero-subtitle font-bold">Explore Insights, Ideas, and Inspiration</p>
                <p>Welcome to TheLifeCents Blog, where we delve into a wide range of topics to enrich your life across technology, health, fashion, lifestyle, parenting, personal development, and personal finance.</p>
            </div>
            
            <div class="hero-visual-panel">
                <div class="hero-illustration-wrapper blog-illustration-wrapper">
                    <img src="{{ asset('images/blog_creator.png') }}" alt="Creative Content Creator" class="hero-illustration-img">
                    <div class="character-overlay shifting-folder folder-illustration">📁</div>
                    <div class="character-overlay growing-bar bar-illustration">📊</div>
                    <div class="character-overlay steam-particle steam-illustration">☕💨</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Blog Hub Section -->
<section class="blog-hub-section">
    <div class="container">
        <!-- Search Bar & Filters -->
        <div class="blog-search-container card-glass">
            <div class="search-form-row">
                <div class="search-input-group">
                    <input type="text" id="blog-search" placeholder="Search articles by title...">
                </div>
                <button class="btn btn-primary" id="search-btn">Search</button>
            </div>
            
            <div class="blog-filters-row">
                <span class="filter-label">Categories:</span>
                <div class="blog-filters" id="blog-filters">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="technology">Technology</button>
                    <button class="filter-btn" data-filter="health">Health</button>
                    <button class="filter-btn" data-filter="fashion">Fashion</button>
                    <button class="filter-btn" data-filter="lifestyle">Lifestyle</button>
                    <button class="filter-btn" data-filter="travel">Travel</button>
                    <button class="filter-btn" data-filter="parenting">Parenting</button>
                    <button class="filter-btn" data-filter="business">Business</button>
                    <button class="filter-btn" data-filter="personal_dev">Personal Dev</button>
                </div>
            </div>
        </div>

        <!-- Articles Grid - DYNAMIC FROM SEEDER -->
        <div class="blog-grid" id="blog-grid">
            @forelse($posts as $post)
            <article class="blog-card card-glass" data-category="{{ $post->category }}">
                <!-- Thumbnail with Category Badge -->
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
                    min-height: 200px;
                    position: relative;
                    overflow: hidden;
                ">
                    <!-- Category Icon (Large Background) -->
                    <div style="
                        position: absolute;
                        font-size: 80px;
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
                    
                    <!-- Category Name in Center -->
                    <div style="
                        color: white;
                        font-size: 28px;
                        font-weight: bold;
                        text-shadow: 0 4px 20px rgba(0,0,0,0.3);
                        z-index: 1;
                        letter-spacing: 2px;
                        text-transform: uppercase;
                    ">
                        {{ ucfirst(str_replace('_', ' ', $post->category)) }}
                    </div>
                    
                    <!-- Category Tag -->
                    <div class="blog-category-tag">{{ ucfirst(str_replace('_', ' ', $post->category)) }}</div>
                </div>
                
                <!-- Content -->
                <div class="blog-card-content">
                    <span class="blog-date">Written by {{ $post->author }} • {{ $post->read_time }} min read</span>
                    <h3>
                        <a href="{{ route('blog', $post->slug) }}">{{ $post->title }}</a>
                    </h3>
                    <p>{{ Str::limit(strip_tags($post->excerpt ?? $post->content), 120) }}</p>
                    <a href="{{ route('blog.detail', $post->slug) }}" class="read-more-link">Read Article →</a>
                </div>
            </article>
            @empty
            <div class="col-12 text-center" style="grid-column: 1 / -1; padding: 60px 0;">
                <h3 style="color: #6b7280; font-size: 24px;">📝 No blog posts found!</h3>
                <p style="color: #9ca3af; margin-top: 10px;">
                    Please run the seeder:
                    <code style="background: #f3f4f6; padding: 4px 8px; border-radius: 4px; color: #dc2626;">
                        php artisan db:seed --class=BlogPostSeeder
                    </code>
                </p>
            </div>
            @endforelse
        </div>
        
        <!-- ===== PAGINATION SECTION ===== -->
        @if($posts->hasPages())
        <div class="pagination-wrapper">
            <!-- <div class="pagination-info">
                <span class="info-badge">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    Showing {{ $posts->firstItem() }} – {{ $posts->lastItem() }} of {{ $posts->total() }} articles
                </span>
            </div> -->
            
            <div class="pagination-container">
                @if($posts->onFirstPage())
                    <span class="page-btn prev disabled">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Previous</span>
                    </span>
                @else
                    <a href="{{ $posts->previousPageUrl() }}" class="page-btn prev">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Previous</span>
                    </a>
                @endif
                
                <div class="page-numbers">
                    @php
                        $current = $posts->currentPage();
                        $last = $posts->lastPage();
                        $start = max(1, $current - 2);
                        $end = min($last, $current + 2);
                    @endphp
                    
                    @if($start > 1)
                        <a href="{{ $posts->url(1) }}" class="num">1</a>
                        @if($start > 2)
                            <span class="dots">···</span>
                        @endif
                    @endif
                    
                    @for($i = $start; $i <= $end; $i++)
                        @if($i == $current)
                            <span class="num active">{{ $i }}</span>
                        @else
                            <a href="{{ $posts->url($i) }}" class="num">{{ $i }}</a>
                        @endif
                    @endfor
                    
                    @if($end < $last)
                        @if($end < $last - 1)
                            <span class="dots">···</span>
                        @endif
                        <a href="{{ $posts->url($last) }}" class="num">{{ $last }}</a>
                    @endif
                </div>
                
                @if($posts->hasMorePages())
                    <a href="{{ $posts->nextPageUrl() }}" class="page-btn next">
                        <span>Next</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                @else
                    <span class="page-btn next disabled">
                        <span>Next</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                @endif
            </div>
        </div>
        @endif
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

<!-- Custom CSS for Blog Cards -->
@push('styles')
<!-- <style>
    .blog-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        margin-right: 30px;
    }
    
    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .blog-image-fallback {
        min-height: 200px;
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
        font-size: 12px;
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
    }
    
    .read-more-link:hover {
        gap: 8px;
        color: #1d4ed8;
    }
    
    /* Blog Grid */
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-top: 40px;
    }
    
    @media (max-width: 992px) {
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 576px) {
        .blog-grid {
            grid-template-columns: 1fr;
        }
    }
    
    /* Search & Filters */
    .blog-search-container {
        background: white;
        padding: 24px 30px;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    }
    
    .search-form-row {
        display: flex;
        gap: 12px;
        margin-bottom: 16px;
    }
    
    .search-input-group {
        flex: 1;
    }
    
    .search-input-group input {
        width: 100%;
        padding: 12px 18px;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        font-size: 14px;
        transition: border-color 0.2s ease;
        outline: none;
    }
    
    .search-input-group input:focus {
        border-color: #2563eb;
    }
    
    .btn-primary {
        background: #2563eb;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease;
    }
    
    .btn-primary:hover {
        background: #1d4ed8;
    }
    
    .blog-filters-row {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }
    
    .filter-label {
        font-weight: 600;
        color: #374151;
        font-size: 14px;
    }
    
    .blog-filters {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }
    
    .filter-btn {
        padding: 6px 16px;
        border: 2px solid #e5e7eb;
        border-radius: 20px;
        background: transparent;
        color: #6b7280;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .filter-btn:hover {
        border-color: #2563eb;
        color: #2563eb;
    }
    
    .filter-btn.active {
        background: #2563eb;
        color: white;
        border-color: #2563eb;
    }
    
    .card-glass {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
    }

    /* ===== PAGINATION STYLES ===== */
    .pagination-wrapper {
        margin-top: 50px;
        padding-top: 35px;
        border-top: 2px solid #f1f5f9;
        text-align: center;
    }
    
    .pagination-info {
        margin-bottom: 25px;
    }
    
    .info-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        color: #475569;
        padding: 10px 24px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.3px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .info-badge svg {
        color: #3b82f6;
        flex-shrink: 0;
    }
    
    .pagination-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        flex-wrap: wrap;
    }
    
    .page-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 20px;
        border-radius: 12px;
        background: white;
        color: #334155;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        border: 2px solid #e2e8f0;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        font-family: inherit;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    }
    
    .page-btn:hover:not(.disabled) {
        background: #f8fafc;
        border-color: #3b82f6;
        color: #1d4ed8;
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(59, 130, 246, 0.15);
    }
    
    .page-btn svg {
        flex-shrink: 0;
        transition: transform 0.3s ease;
    }
    
    .page-btn.prev:hover:not(.disabled) svg {
        transform: translateX(-4px);
    }
    
    .page-btn.next:hover:not(.disabled) svg {
        transform: translateX(4px);
    }
    
    .page-btn.disabled {
        opacity: 0.4;
        cursor: not-allowed;
        pointer-events: none;
        background: #f8fafc;
        border-color: #e2e8f0;
    }
    
    .page-numbers {
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .num {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 44px;
        height: 44px;
        padding: 0 6px;
        border-radius: 12px;
        background: transparent;
        color: #475569;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        border: 2px solid transparent;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        font-family: inherit;
    }
    
    .num:hover:not(.active) {
        background: #f1f5f9;
        border-color: #e2e8f0;
        color: #1e293b;
        transform: translateY(-2px);
    }
    
    .num.active {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: white;
        border-color: #3b82f6;
        box-shadow: 0 4px 16px rgba(59, 130, 246, 0.35);
        transform: translateY(-2px);
        cursor: default;
    }
    
    .dots {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 30px;
        height: 44px;
        color: #94a3b8;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 2px;
        cursor: default;
        user-select: none;
    }

    /* Pagination Responsive */
    @media (max-width: 768px) {
        .page-btn {
            padding: 8px 16px;
            font-size: 13px;
            gap: 6px;
        }
        
        .page-btn svg {
            width: 18px;
            height: 18px;
        }
        
        .num {
            min-width: 40px;
            height: 40px;
            font-size: 14px;
        }
        
        .dots {
            min-width: 26px;
            height: 40px;
            font-size: 16px;
        }
        
        .pagination-container {
            gap: 6px;
        }
        
        .info-badge {
            font-size: 13px;
            padding: 8px 18px;
        }
    }
    
    @media (max-width: 480px) {
        .page-btn span {
            display: none;
        }
        
        .page-btn {
            padding: 8px 14px;
        }
        
        .page-btn svg {
            width: 20px;
            height: 20px;
        }
        
        .num {
            min-width: 38px;
            height: 38px;
            font-size: 14px;
        }
        
        .dots {
            min-width: 24px;
            height: 38px;
            font-size: 14px;
        }
        
        .pagination-container {
            gap: 4px;
        }
        
        .info-badge {
            font-size: 12px;
            padding: 6px 14px;
            gap: 6px;
        }
        
        .info-badge svg {
            width: 14px;
            height: 14px;
        }
    }
</style> -->
@endpush

@push('scripts')
<script>
    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const blogCards = document.querySelectorAll('.blog-card');
        const searchInput = document.getElementById('blog-search');
        const searchBtn = document.getElementById('search-btn');
        
        // Filter by category
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                
                blogCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
        
        // Search functionality
        function searchBlogs() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            
            blogCards.forEach(card => {
                const title = card.querySelector('h3 a').textContent.toLowerCase();
                const excerpt = card.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
        
        searchBtn.addEventListener('click', searchBlogs);
        searchInput.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                searchBlogs();
            }
        });
    });
</script>
@endpush
@endsection