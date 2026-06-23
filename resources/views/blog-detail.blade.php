@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <style>
        /* Premium Blog Detail Styles */
        :root {
            --bg-glass: rgba(255, 255, 255, 0.85);
            --bg-glass-hover: rgba(255, 255, 255, 0.95);
            --border-glass: rgba(0, 0, 0, 0.08);
            --border-glass-hover: rgba(37, 99, 235, 0.3);
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #94a3b8;
            --color-accent: #2563eb;
            --color-accent-secondary: #1d4ed8;
            --color-glow: rgba(37, 99, 235, 0.15);
            --color-primary-grad: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            --color-text-grad: linear-gradient(135deg, #0f172a 0%, #2563eb 100%);
            --border-radius-sm: 8px;
            --border-radius-md: 16px;
            --border-radius-lg: 24px;
            --transition-fast: 0.2s ease;
            --transition-normal: 0.3s ease;
            --font-heading: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .blog-detail-wrapper {
            padding: 60px 0 100px 0;
            position: relative;
            background: #f8fafc;
        }

        .blog-detail-container {
            border-radius: var(--border-radius-lg);
            border: 1px solid var(--border-glass);
            padding: 40px;
            position: relative;
            overflow: hidden;
            margin-bottom: 60px;
            background: var(--bg-glass);
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
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

        .blog-detail-header {
            position: relative;
            z-index: 1;
            margin-bottom: 40px;
            border-bottom: 1px solid var(--border-glass);
            padding-bottom: 30px;
        }

        .blog-detail-meta-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
        }

        .blog-category-badge {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 6px 16px;
            border-radius: 50px;
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            display: inline-block;
        }

        .badge-technology {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .badge-health {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        .badge-parenting {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        .badge-fashion {
            background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);
        }

        .badge-personal_dev {
            background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
        }

        .badge-lifestyle {
            background: linear-gradient(135deg, #a855f7 0%, #7c3aed 100%);
        }

        .badge-travel {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        }

        .badge-business {
            background: linear-gradient(135deg, #64748b 0%, #475569 100%);
        }

        .blog-detail-meta {
            font-size: 0.9rem;
            color: var(--text-secondary);
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .blog-detail-meta span strong {
            color: var(--text-primary);
        }

        .meta-dot {
            width: 4px;
            height: 4px;
            background-color: var(--text-muted);
            border-radius: 50%;
        }

        .blog-detail-title {
            font-size: 2.8rem;
            line-height: 1.2;
            margin-bottom: 24px;
            font-family: var(--font-heading);
            font-weight: 800;
            background: var(--color-text-grad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .blog-detail-layout {
            display: grid;
            grid-template-columns: 1.8fr 1.2fr;
            gap: 40px;
            align-items: center;
        }

        .blog-visual-card {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .blog-visual-img {
            max-width: 320px;
            width: 100%;
            height: auto;
            animation: float-slow 4s ease-in-out infinite;
            filter: drop-shadow(0 15px 30px var(--color-glow));
        }

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .blog-detail-content {
            position: relative;
            z-index: 1;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-primary);
        }

        .blog-detail-content p {
            margin-bottom: 24px;
            color: #334155;
        }

        .blog-detail-content h2,
        .blog-detail-content h3 {
            font-family: var(--font-heading);
            margin: 40px 0 20px 0;
            background: var(--color-text-grad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .blog-detail-content h2 {
            font-size: 1.8rem;
        }

        .blog-detail-content h3 {
            font-size: 1.5rem;
        }

        .blog-detail-content ul,
        .blog-detail-content ol {
            margin-bottom: 24px;
            padding-left: 20px;
        }

        .blog-detail-content li {
            margin-bottom: 12px;
            color: var(--text-secondary);
        }

        .blog-detail-content ul li {
            list-style: disc outside;
        }

        .blog-detail-content ol li {
            list-style: decimal outside;
        }

        .blog-detail-content strong {
            color: var(--text-primary);
            font-weight: 700;
        }

        .blog-detail-content blockquote {
            background: rgba(37, 99, 235, 0.05);
            border-left: 4px solid var(--color-accent);
            padding: 20px 24px;
            border-radius: 0 var(--border-radius-md) var(--border-radius-md) 0;
            margin: 30px 0;
            font-style: italic;
            color: var(--text-secondary);
        }

        .related-section {
            margin-top: 80px;
            position: relative;
            z-index: 1;
        }

        .related-title {
            font-size: 2rem;
            margin-bottom: 30px;
            font-family: var(--font-heading);
            font-weight: 700;
            text-align: left;
            color: #0f172a;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .related-card {
            border-radius: var(--border-radius-md);
            border: 1px solid var(--border-glass);
            overflow: hidden;
            transition: transform var(--transition-fast), border-color var(--transition-fast);
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--bg-glass);
            backdrop-filter: blur(12px);
        }

        .related-card:hover {
            transform: translateY(-5px);
            border-color: var(--border-glass-hover);
            box-shadow: 0 10px 25px var(--color-glow);
        }

        .related-card-img-wrapper {
            height: 160px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, #eef2ff 0%, #f8fafc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            flex-direction: column;
        }

        .related-card-img {
            max-height: 100%;
            width: auto;
            object-fit: contain;
            transition: transform var(--transition-normal);
        }

        .related-card:hover .related-card-img {
            transform: scale(1.08);
        }

        .related-card-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .related-card-category {
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--color-accent);
            margin-bottom: 8px;
        }

        .related-card-title {
            font-size: 1.15rem;
            line-height: 1.35;
            font-weight: 700;
            margin-bottom: 12px;
            flex-grow: 1;
            font-family: var(--font-heading);
        }

        .related-card-title a {
            color: #0f172a;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .related-card-title a:hover {
            color: var(--color-accent);
        }

        .related-card-link {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--color-accent);
            display: inline-flex;
            align-items: center;
            gap: 4px;
            margin-top: auto;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .related-card-link:hover {
            color: var(--color-accent-secondary);
            gap: 8px;
        }

        .blog-detail-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid var(--border-glass);
            z-index: 1;
            position: relative;
        }

        .btn-back {
            background: transparent;
            color: var(--text-primary);
            border: 1px solid var(--border-glass);
            padding: 10px 24px;
            border-radius: var(--border-radius-sm);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all var(--transition-fast);
            text-decoration: none;
            cursor: pointer;
        }

        .btn-back:hover {
            background: var(--bg-glass-hover);
            border-color: var(--color-accent);
            box-shadow: 0 0 15px var(--color-glow);
        }

        .share-widget {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .share-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-weight: 500;
        }

        .share-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid var(--border-glass);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            transition: all var(--transition-fast);
            background: transparent;
            text-decoration: none;
            cursor: pointer;
        }

        .share-btn:hover {
            color: var(--text-primary);
            border-color: var(--color-accent);
            background: var(--bg-glass-hover);
            box-shadow: 0 0 10px var(--color-glow);
            transform: translateY(-2px);
        }

        .reading-progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            z-index: 9999;
            width: 0%;
            transition: width 0.1s ease;
            box-shadow: 0 2px 10px rgba(37, 99, 235, 0.3);
        }

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
                justify-content: flex-start;
            }
        }

        @media (max-width: 600px) {
            .blog-detail-wrapper {
                padding: 30px 0 60px 0;
            }

            .blog-detail-container {
                padding: 16px;
            }

            .blog-detail-title {
                font-size: 1.5rem;
            }

            .related-grid {
                grid-template-columns: 1fr;
            }

            .blog-detail-content {
                font-size: 1rem;
            }
        }
    </style>

    <!-- Reading Progress Bar -->
    <div class="reading-progress-bar" id="reading-progress"></div>

    <div class="blog-detail-wrapper">
        <div class="container">
            <article class="blog-detail-container card-glass">
                <!-- Header Row -->
                <div class="blog-detail-header">
                    <div class="blog-detail-layout">
                        <div>
                            <!-- Category Badge & Meta Info -->
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

                            <p style="font-size: 1.15rem; color: var(--text-secondary); line-height: 1.6;">
                                {{ $post->excerpt }}
                            </p>
                        </div>

                        <!-- Thumbnail -->
                        <div class="blog-visual-card">
                            <!-- <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}" class="blog-visual-img" onerror="this.src='{{ asset('images/default-blog.png') }}';"> -->
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="blog-detail-content">
                    {!! $post->content !!}
                </div>

                <!-- Footer -->
                <div class="blog-detail-footer">
                    <a href="/blog" class="btn-back">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        Back to Blog
                    </a>

                    <div class="share-widget">
                        <span class="share-label">Share Article:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                            target="_blank" class="share-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                            target="_blank" class="share-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                </path>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}"
                            target="_blank" class="share-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                </path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Related Posts -->
            @if(isset($relatedPosts) && $relatedPosts->count() > 0)
                <div class="related-section">
                    <h3 class="related-title">📚 Related Articles</h3>
                    <div class="related-grid">
                        @foreach($relatedPosts as $rel)
                            <div class="related-card card-glass">
                                <div class="related-card-img-wrapper">
                                    {{-- <img src="{{ asset($rel->thumbnail) }}" alt="{{ $rel->title }}" class="related-card-img"
                                        onerror="this.style.display='none';"> --}}
                                    <div style="font-size: 40px; opacity: 0.3;">📄</div>
                                    <div
                                        style="font-weight: 600; color: #64748b; text-align: center; margin-top: 5px; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">
                                        {{ ucfirst(str_replace('_', ' ', $rel->category)) }}
                                    </div>
                                </div>
                                <div class="related-card-body">
                                    <span class="related-card-category">{{ ucfirst(str_replace('_', ' ', $rel->category)) }}</span>
                                    <h4 class="related-card-title">
                                        <a href="/blog/{{ $rel->slug }}">{{ $rel->title }}</a>
                                    </h4>
                                    <a href="/blog/{{ $rel->slug }}" class="related-card-link">
                                        Read Post
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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
        window.addEventListener('scroll', function () {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
            document.getElementById('reading-progress').style.width = scrolled + '%';
        });
    </script>
@endsection