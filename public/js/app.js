document.addEventListener('DOMContentLoaded', () => {
    // ==========================================================================
    // THEME SWITCHER (DARK / LIGHT MODE)
    // ==========================================================================
    const themeToggleBtn = document.getElementById('theme-toggle');
    const body = document.body;
    
    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    if (savedTheme === 'light') {
        body.classList.remove('dark-theme');
        body.classList.add('light-theme');
    } else if (savedTheme === 'dark') {
        body.classList.remove('light-theme');
        body.classList.add('dark-theme');
    } else if (!systemPrefersDark) {
        body.classList.remove('dark-theme');
        body.classList.add('light-theme');
    }

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            if (body.classList.contains('dark-theme')) {
                body.classList.remove('dark-theme');
                body.classList.add('light-theme');
                localStorage.setItem('theme', 'light');
            } else {
                body.classList.remove('light-theme');
                body.classList.add('dark-theme');
                localStorage.setItem('theme', 'dark');
            }
        });
    }

    // ==========================================================================
    // HEADER SCROLL EFFECT
    // ==========================================================================
    const header = document.getElementById('main-header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header-scrolled');
        } else {
            header.classList.remove('header-scrolled');
        }
    });

    // ==========================================================================
    // MOBILE NAVIGATION MENU
    // ==========================================================================
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const navMenu = document.getElementById('nav-menu');
    
    if (mobileMenuBtn && navMenu) {
        const menuOpenIcon = mobileMenuBtn.querySelector('.menu-open-icon');
        const menuCloseIcon = mobileMenuBtn.querySelector('.menu-close-icon');
        
        function toggleMobileMenu() {
            navMenu.classList.toggle('active');
            const isActive = navMenu.classList.contains('active');
            
            if (isActive) {
                if (menuOpenIcon) menuOpenIcon.style.display = 'none';
                if (menuCloseIcon) menuCloseIcon.style.display = 'block';
                body.style.overflow = 'hidden';
            } else {
                if (menuOpenIcon) menuOpenIcon.style.display = 'block';
                if (menuCloseIcon) menuCloseIcon.style.display = 'none';
                body.style.overflow = '';
            }
        }
        
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }

    // ==========================================================================
    // HERO STATS COUNTER ANIMATION
    // ==========================================================================
    const statNumbers = document.querySelectorAll('.stat-number');
    
    function animateCounters() {
        statNumbers.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-target'), 10);
            const duration = 2000;
            const stepTime = 30;
            const totalSteps = duration / stepTime;
            const increment = target / totalSteps;
            
            let current = 0;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    stat.textContent = target;
                    clearInterval(timer);
                } else {
                    stat.textContent = Math.floor(current);
                }
            }, stepTime);
        });
    }
    
    if (statNumbers.length > 0) {
        animateCounters();
    }

    // ==========================================================================
    // TESTIMONIALS SLIDER
    // ==========================================================================
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    let currentSlide = 0;
    let autoSlideInterval;
    
    function showSlide(index) {
        if (slides.length === 0) return;
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        currentSlide = (index + slides.length) % slides.length;
        
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }
    
    function nextSlide() {
        showSlide(currentSlide + 1);
    }
    
    function prevSlide() {
        showSlide(currentSlide - 1);
    }
    
    function startAutoSlide() {
        if (slides.length === 0) return;
        autoSlideInterval = setInterval(nextSlide, 6000);
    }
    
    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
    
    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        });
        
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        });
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                stopAutoSlide();
                startAutoSlide();
            });
        });
        
        startAutoSlide();
    }

    // ==========================================================================
    // BLOG FILTER & SEARCH SYSTEM
    // ==========================================================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const blogCards = document.querySelectorAll('.blog-card');
    const searchInput = document.getElementById('blog-search');
    const searchBtn = document.getElementById('search-btn');
    
    let activeCategory = 'all';
    let searchQuery = '';
    
    function filterBlogArticles() {
        blogCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            const cardTitle = card.querySelector('h3').textContent.toLowerCase();
            
            const matchesCategory = (activeCategory === 'all' || cardCategory === activeCategory);
            const matchesSearch = (searchQuery === '' || cardTitle.includes(searchQuery));
            
            card.style.display = 'none';
            card.style.opacity = '0';
            card.style.transform = 'scale(0.95)';
            
            if (matchesCategory && matchesSearch) {
                card.style.display = 'flex';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                }, 50);
            }
        });
    }
    
    if (filterButtons.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                activeCategory = btn.getAttribute('data-filter');
                filterBlogArticles();
            });
        });
    }
    
    if (searchInput) {
        searchInput.addEventListener('input', () => {
            searchQuery = searchInput.value.toLowerCase().trim();
            filterBlogArticles();
        });
    }
    
    if (searchBtn && searchInput) {
        searchBtn.addEventListener('click', () => {
            searchQuery = searchInput.value.toLowerCase().trim();
            filterBlogArticles();
        });
    }

    // ==========================================================================
    // CONTACT FORM VALIDATION & AJAX SUBMISSION (LARAVEL INTEGRATED)
    // ==========================================================================
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        const formFields = contactForm.querySelectorAll('input, select, textarea');
        const successView = document.getElementById('success-view');
        const submitBtn = document.getElementById('submit-btn');
        const submitText = submitBtn.querySelector('span');
        const spinner = submitBtn.querySelector('.spinner');
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        function validateField(field) {
            const group = field.closest('.form-group');
            if (!group) return true;
            let isValid = true;
            
            if (field.hasAttribute('required')) {
                if (field.value.trim() === '') {
                    isValid = false;
                }
            }
            
            if (isValid && field.type === 'email') {
                isValid = emailPattern.test(field.value.trim());
            }
            
            if (isValid) {
                group.classList.remove('error');
            } else {
                group.classList.add('error');
            }
            
            return isValid;
        }
        
        formFields.forEach(field => {
            field.addEventListener('input', () => { validateField(field); });
            field.addEventListener('change', () => { validateField(field); });
        });
        
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            let isFormValid = true;
            formFields.forEach(field => {
                if (!validateField(field)) {
                    isFormValid = false;
                }
            });
            
            if (isFormValid) {
                submitBtn.disabled = true;
                if (submitText) submitText.style.display = 'none';
                if (spinner) spinner.style.display = 'inline-block';
                
                // Fetch dynamic form fields
                const formData = new FormData(contactForm);
                const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
                const csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute('content') : '';

                fetch(contactForm.getAttribute('action'), {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => { throw err; });
                    }
                    return response.json();
                })
                .then(data => {
                    submitBtn.disabled = false;
                    if (submitText) submitText.style.display = 'inline';
                    if (spinner) spinner.style.display = 'none';
                    
                    if (data.success) {
                        contactForm.style.display = 'none';
                        if (successView) {
                            successView.style.display = 'block';
                            successView.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                        }
                    }
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    if (submitText) submitText.style.display = 'inline';
                    if (spinner) spinner.style.display = 'none';
                    console.error('Submission error:', error);
                    
                    // Render validation error states if returned from Laravel validator
                    if (error.errors) {
                        for (const [key, messages] of Object.entries(error.errors)) {
                            const field = contactForm.querySelector(`[name="${key}"]`);
                            if (field) {
                                const group = field.closest('.form-group');
                                if (group) {
                                    group.classList.add('error');
                                    const errMsg = group.querySelector('.error-msg');
                                    if (errMsg) errMsg.textContent = messages[0];
                                }
                            }
                        }
                    } else {
                        alert('Something went wrong. Please check your connection and try again.');
                    }
                });
            }
        });
        
        const resetFormBtn = document.getElementById('reset-form-btn');
        if (resetFormBtn) {
            resetFormBtn.addEventListener('click', () => {
                contactForm.reset();
                formFields.forEach(field => {
                    const group = field.closest('.form-group');
                    if (group) group.classList.remove('error');
                });
                if (successView) successView.style.display = 'none';
                contactForm.style.display = 'block';
            });
        }
    }
});
