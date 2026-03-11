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
});
