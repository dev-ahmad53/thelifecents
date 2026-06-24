@extends('layouts.app')

@section('title', $post->title)

@section('content')
<style>
    /* ============================================
       BLOG DETAIL - THEME COMPATIBLE
       ONLY REQUIRED STYLES ADDED
       ============================================ */

    /* ===== BLOG DETAIL WRAPPER ===== */
    .blog-detail-wrapper {
        padding: calc(var(--header-height, 80px) + 50px) 0 80px 0;
        background: var(--bg-primary);
        min-height: 100vh;
    }

    .blog-detail-container {
        background: var(--bg-glass);
        backdrop-filter: blur(12px);
        border-radius: var(--border-radius-lg, 24px);
        border: 1px solid var(--border-glass);
        padding: 40px;
        box-shadow: 0 8px 32px var(--color-card-shadow, rgba(0,0,0,0.3));
        position: relative;
        overflow: hidden;
    }

    .blog-detail-container::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: var(--color-glow);
        filter: blur(100px);
        top: -150px;
        right: -150px;
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
    }

    /* ===== HEADER ===== */
    .blog-detail-header {
        position: relative;
        z-index: 1;
        border-bottom: 1px solid var(--border-glass);
        padding-bottom: 30px;
        margin-bottom: 35px;
    }

    .blog-detail-meta-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 14px;
        margin-bottom: 16px;
    }

    /* ===== CATEGORY BADGE ===== */
    .blog-category-badge {
        display: inline-block;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        padding: 6px 16px;
        border-radius: 50px;
        color: #ffffff;
        box-shadow: 0 4px 12px var(--color-glow);
    }

    /* Category Colors */
    .badge-technology { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
    .badge-health { background: linear-gradient(135deg, #10b981, #059669); }
    .badge-fashion { background: linear-gradient(135deg, #ec4899, #db2777); }
    .badge-travel { background: linear-gradient(135deg, #f59e0b, #d97706); }
    .badge-parenting { background: linear-gradient(135deg, #8b5cf6, #6d28d9); }
    .badge-business { background: linear-gradient(135deg, #ef4444, #b91c1c); }
    .badge-lifestyle { background: linear-gradient(135deg, #f97316, #c2410c); }
    .badge-personal_dev { background: linear-gradient(135deg, #a855f7, #7e22ce); }

    /* ===== META INFO ===== */
    .blog-detail-meta {
        font-size: 0.85rem;
        color: var(--text-secondary);
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .blog-detail-meta strong {
        color: var(--text-primary);
    }

    .meta-dot {
        width: 4px;
        height: 4px;
        background: var(--text-muted);
        border-radius: 50%;
    }

    /* ===== TITLE ===== */
    .blog-detail-title {
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 16px;
        color: var(--text-primary);
        font-family: var(--font-heading);
    }

    .blog-detail-excerpt {
        font-size: 1.1rem;
        color: var(--text-secondary);
        line-height: 1.7;
    }

    /* ===== LAYOUT ===== */
    .blog-detail-layout {
        display: grid;
        grid-template-columns: 1.8fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .blog-visual-card {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .blog-visual-img {
        max-width: 280px;
        width: 100%;
        height: auto;
        border-radius: 16px;
        filter: drop-shadow(0 15px 30px var(--color-glow));
        transition: transform 0.4s ease;
    }

    .blog-visual-img:hover {
        transform: scale(1.03);
    }

    /* ===== CONTENT ===== */
    .blog-detail-content {
        position: relative;
        z-index: 1;
        font-size: 1.05rem;
        line-height: 1.8;
        color: var(--text-primary);
    }

    .blog-detail-content p {
        margin-bottom: 20px;
        color: var(--text-secondary);
    }

    .blog-detail-content h2 {
        font-size: 1.8rem;
        font-weight: 700;
        margin: 40px 0 16px;
        color: var(--text-primary);
        font-family: var(--font-heading);
        border-bottom: 1px solid var(--border-glass);
        padding-bottom: 8px;
    }

    .blog-detail-content h3 {
        font-size: 1.4rem;
        font-weight: 600;
        margin: 32px 0 14px;
        color: var(--text-primary);
        font-family: var(--font-heading);
    }

    .blog-detail-content ul,
    .blog-detail-content ol {
        margin-bottom: 20px;
        padding-left: 24px;
    }

    .blog-detail-content li {
        margin-bottom: 10px;
        color: var(--text-secondary);
    }

    .blog-detail-content ul li {
        list-style: disc;
    }
    .blog-detail-content ol li {
        list-style: decimal;
    }

    .blog-detail-content strong {
        color: var(--text-primary);
        font-weight: 700;
    }

    .blog-detail-content blockquote {
        border-left: 4px solid var(--color-accent);
        background: rgba(37,99,235,0.05);
        padding: 20px 24px;
        border-radius: 0 12px 12px 0;
        margin: 30px 0;
        font-style: italic;
        color: var(--text-secondary);
    }

    .blog-detail-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 24px 0;
        border: 1px solid var(--border-glass);
        box-shadow: 0 8px 24px rgba(0,0,0,0.2);
    }

    .blog-detail-content figure {
        margin: 30px 0;
        text-align: center;
    }

    .blog-detail-content figcaption {
        font-size: 0.85rem;
        color: var(--text-muted);
        margin-top: 8px;
    }

    /* ===== RELATED POSTS ===== */
    .related-section {
        margin-top: 60px;
        padding-top: 40px;
        border-top: 1px solid var(--border-glass);
    }

    .related-title {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 28px;
        color: var(--text-primary);
        font-family: var(--font-heading);
    }

    .related-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .related-card {
        background: var(--bg-glass);
        backdrop-filter: blur(8px);
        border-radius: 16px;
        border: 1px solid var(--border-glass);
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .related-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 32px var(--color-card-shadow, rgba(0,0,0,0.3));
        border-color: var(--color-accent);
    }

    .related-card-img-wrapper {
        height: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: rgba(10, 14, 26, 0.4);
        overflow: hidden;
        border-bottom: 1px solid var(--border-glass);
    }

    .related-card-img {
        max-height: 100%;
        width: auto;
        object-fit: contain;
        transition: transform 0.3s ease;
        filter: drop-shadow(0 6px 12px rgba(0,0,0,0.15));
    }

    .related-card:hover .related-card-img {
        transform: scale(1.05);
    }

    .related-card-body {
        padding: 20px 22px 22px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .related-card-category {
        font-size: 0.65rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: var(--color-accent-secondary);
        margin-bottom: 6px;
    }

    .related-card-title {
        font-size: 1rem;
        font-weight: 700;
        line-height: 1.35;
        margin-bottom: 10px;
        flex: 1;
        font-family: var(--font-heading);
    }

    .related-card-title a {
        color: var(--text-primary);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .related-card-title a:hover {
        color: var(--color-accent-secondary);
    }

    .related-card-link {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--color-accent-secondary);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: gap 0.3s ease;
        margin-top: auto;
    }

    .related-card-link:hover {
        gap: 10px;
    }

    .related-card-link svg {
        transition: transform 0.3s ease;
    }

    .related-card-link:hover svg {
        transform: translateX(3px);
    }

    /* ===== FOOTER ===== */
    .blog-detail-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
        margin-top: 40px;
        padding-top: 28px;
        border-top: 1px solid var(--border-glass);
        position: relative;
        z-index: 1;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 22px;
        border-radius: 10px;
        border: 1px solid var(--border-glass);
        background: transparent;
        color: var(--text-primary);
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-back:hover {
        background: var(--bg-glass-hover);
        border-color: var(--color-accent);
        box-shadow: 0 0 20px var(--color-glow);
    }

    .btn-back svg {
        stroke: currentColor;
    }

    .share-widget {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .share-label {
        font-size: 0.85rem;
        color: var(--text-secondary);
        font-weight: 500;
    }

    .share-btn {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 1px solid var(--border-glass);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-secondary);
        background: transparent;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .share-btn:hover {
        color: var(--text-primary);
        border-color: var(--color-accent);
        background: var(--bg-glass-hover);
        transform: translateY(-2px);
    }

    .share-btn svg {
        stroke: currentColor;
    }

    /* ===== PROGRESS BAR ===== */
    .reading-progress-bar {
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: var(--color-primary-grad);
        z-index: 9999;
        width: 0%;
        transition: width 0.15s ease;
        box-shadow: 0 2px 8px var(--color-glow);
    }

    /* ============================================
       RESPONSIVE
       ============================================ */

    @media (max-width: 992px) {
        .blog-detail-layout {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        .blog-visual-card {
            order: -1;
        }
        .blog-detail-title {
            font-size: 2.2rem;
        }
        .related-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 768px) {
        .blog-detail-container {
            padding: 24px;
        }
        .blog-detail-title {
            font-size: 1.8rem;
        }
        .blog-detail-footer {
            flex-direction: column;
            align-items: flex-start;
        }
        .share-widget {
            width: 100%;
        }
        .related-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 576px) {
        .blog-detail-container {
            padding: 16px;
        }
        .blog-detail-title {
            font-size: 1.5rem;
        }
        .blog-detail-excerpt {
            font-size: 1rem;
        }
        .blog-detail-content {
            font-size: 1rem;
        }
        .related-grid {
            grid-template-columns: 1fr;
        }
        .blog-visual-img {
            max-width: 200px;
        }
    }
</style>

<!-- Reading Progress Bar -->
<div class="reading-progress-bar" id="reading-progress"></div>

<div class="blog-detail-wrapper">
    <div class="container">
        <article class="blog-detail-container card-glass">

            <!-- ===== HEADER ===== -->
            <div class="blog-detail-header">
                <div class="blog-detail-layout">
                    <div>
                        <!-- Category & Meta -->
                        <div class="blog-detail-meta-row">
                            <span class="blog-category-badge badge-{{ $post->category }}">
                                {{ ucfirst(str_replace('_', ' ', $post->category)) }}
                            </span>
                            <div class="blog-detail-meta">
                                <span>By <strong>{{ $post->author }}</strong></span>
                                <span class="meta-dot"></span>
                                <span>{{ \Carbon\Carbon::parse($post->published_date)->format('M d, Y') }}</span>
                                <span class="meta-dot"></span>
                                <span>{{ $post->read_time }} min read</span>
                            </div>
                        </div>

                        <!-- Title -->
                        <h1 class="blog-detail-title">{{ $post->title }}</h1>
                        <p class="blog-detail-excerpt">{{ $post->excerpt }}</p>
                    </div>

                    <!-- Thumbnail -->
                    <!-- <div class="blog-visual-card">
                        <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}" class="blog-visual-img" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'font-size:60px; opacity:0.2;\'>📄</div>';">
                    </div> -->
                </div>
            </div>

            <!-- ===== CONTENT ===== -->
            <div class="blog-detail-content">
                {!! $post->content !!}
            </div>

            <!-- ===== FOOTER ===== -->
            <div class="blog-detail-footer">
                <a href="{{ route('blog') }}" class="btn-back">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    Back to Blog
                </a>

                <div class="share-widget">
                    <span class="share-label">Share:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="share-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}" target="_blank" class="share-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" target="_blank" class="share-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . request()->url()) }}" target="_blank" class="share-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    </a>
                </div>
            </div>

        </article>

        <!-- ===== RELATED POSTS ===== -->
        @if(isset($relatedPosts) && $relatedPosts->count() > 0)
        <div class="related-section">
            <h3 class="related-title">Related Articles</h3>
            <div class="related-grid">
                @foreach($relatedPosts as $rel)
                <div class="related-card card-glass">
                    <!-- <div class="related-card-img-wrapper">
                        <img src="{{ asset($rel->thumbnail) }}" alt="{{ $rel->title }}" class="related-card-img" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'font-size:32px; opacity:0.3;\'>📄</div>';">
                    </div> -->
                    <div class="related-card-body">
                        <span class="related-card-category">{{ ucfirst(str_replace('_', ' ', $rel->category)) }}</span>
                        <h4 class="related-card-title">
                            <a href="{{ route('blog', $rel->slug) }}">{{ $rel->title }}</a>
                        </h4>
                        <a href="{{ route('blog', $rel->slug) }}" class="related-card-link">
                            Read Post
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>

<script>
    // Reading progress indicator
    window.addEventListener('scroll', function() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
        document.getElementById('reading-progress').style.width = scrolled + '%';
    });
</script>
@endsection