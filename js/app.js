document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenuCloseBtn = document.querySelector('.mobile-menu-close');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenuBtn && mobileMenu && mobileMenuCloseBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('active');
        });

        mobileMenuCloseBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });

        // Close when clicking outside link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });
    }

    // 2. Navbar Sticky Styling
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 4px 6px -1px rgb(0 0 0 / 0.1)';
                navbar.style.padding = '0.5rem 0';
            } else {
                navbar.style.boxShadow = '0 1px 2px 0 rgb(0 0 0 / 0.05)';
                navbar.style.padding = '1rem 0';
            }
        });
    }

    // 3. Scroll Animations (Intersection Observer)
    const fadeUpElements = document.querySelectorAll('.fade-up');
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Run once
            }
        });
    }, observerOptions);

    fadeUpElements.forEach(el => {
        observer.observe(el);
    });

    // 4. Testimonials Slider (Basic implementation for Homepage)
    const testimonials = document.querySelectorAll('.testimonial-slide');
    if (testimonials.length > 0) {
        let currentSlide = 0;
        
        // Hide all except first
        testimonials.forEach((slide, index) => {
            if (index !== 0) slide.style.display = 'none';
        });

        // Simple interval to switch slides
        setInterval(() => {
            testimonials[currentSlide].style.display = 'none';
            currentSlide = (currentSlide + 1) % testimonials.length;
            testimonials[currentSlide].style.display = 'block';
            
            // Add slight fade in effect
            testimonials[currentSlide].style.opacity = '0';
            testimonials[currentSlide].style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                testimonials[currentSlide].style.opacity = '1';
            }, 50);

        }, 5000); // Change every 5 seconds
    }

    // 5. Lightbox — click any image to open full size
    // Create the lightbox DOM
    const lightbox = document.createElement('div');
    lightbox.id = 'lightbox';
    lightbox.innerHTML = `
        <div id="lightbox-backdrop">
            <button id="lightbox-close" aria-label="Close image">&times;</button>
            <img id="lightbox-img" src="" alt="Full size image">
        </div>
    `;
    document.body.appendChild(lightbox);

    // Inject lightbox styles
    const lbStyle = document.createElement('style');
    lbStyle.textContent = `
        #lightbox {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.92);
            backdrop-filter: blur(6px);
            align-items: center;
            justify-content: center;
            animation: lbFadeIn 0.25s ease;
        }
        #lightbox.open { display: flex; }
        @keyframes lbFadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        #lightbox-backdrop {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 95vw;
            max-height: 95vh;
        }
        #lightbox-img {
            max-width: 90vw;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 0.75rem;
            box-shadow: 0 25px 60px rgba(0,0,0,0.7);
            animation: lbZoomIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        @keyframes lbZoomIn {
            from { transform: scale(0.85); opacity: 0; }
            to   { transform: scale(1);    opacity: 1; }
        }
        #lightbox-close {
            position: fixed;
            top: 1.25rem;
            right: 1.5rem;
            background: rgba(255,255,255,0.15);
            border: none;
            color: white;
            font-size: 2.25rem;
            line-height: 1;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
            z-index: 10000;
        }
        #lightbox-close:hover { background: rgba(255,255,255,0.3); }
        .lightbox-trigger {
            cursor: zoom-in;
            transition: opacity 0.2s;
        }
        .lightbox-trigger:hover { opacity: 0.88; }
    `;
    document.head.appendChild(lbStyle);

    const lbImg = document.getElementById('lightbox-img');

    function openLightbox(src, alt) {
        lbImg.src = src;
        lbImg.alt = alt || 'Image';
        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('open');
        document.body.style.overflow = '';
        lbImg.src = '';
    }

    // Attach to all images except navbar logo / tiny icons
    document.querySelectorAll('img').forEach(img => {
        // Skip very small images (icons etc.)
        if (img.closest('.logo') || img.closest('nav')) return;
        img.classList.add('lightbox-trigger');
        img.addEventListener('click', () => openLightbox(img.src, img.alt));
    });

    // Close handlers
    document.getElementById('lightbox-close').addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', e => {
        if (e.target === lightbox) closeLightbox();
    });
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeLightbox();
    });
});
