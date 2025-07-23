// Enhanced mobile menu toggle and page functionality
document.addEventListener('DOMContentLoaded', function() {
    // Scroll progress indicator
    const scrollIndicator = document.getElementById('scroll-indicator');
    window.addEventListener('scroll', function() {
        const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
        scrollIndicator.style.transform = `scaleX(${scrollPercent / 100})`;
    });

    // Scroll to top button
    const scrollToTopBtn = document.getElementById('scroll-to-top');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.remove('opacity-0', 'invisible');
            scrollToTopBtn.classList.add('opacity-100', 'visible');
        } else {
            scrollToTopBtn.classList.add('opacity-0', 'invisible');
            scrollToTopBtn.classList.remove('opacity-100', 'visible');
        }
    });

    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Enhanced notification system
    function showNotification(message, type = 'success') {
        const toast = document.getElementById('notification-toast');
        const toastMessage = document.getElementById('toast-message');
        const toastIcon = toast.querySelector('svg');

        toastMessage.textContent = message;

        // Change icon and color based on type
        if (type === 'success') {
            toastIcon.setAttribute('class', 'w-5 h-5 text-green-500');
            toast.className = toast.className.replace(/bg-\w+-100/, 'bg-green-100');
        } else if (type === 'error') {
            toastIcon.setAttribute('class', 'w-5 h-5 text-red-500');
            toast.className = toast.className.replace(/bg-\w+-100/, 'bg-red-100');
        }

        toast.style.transform = 'translateX(0)';

        setTimeout(() => {
            toast.style.transform = 'translateX(100%)';
        }, 3000);
    }

    // Close toast button
    document.getElementById('close-toast').addEventListener('click', function() {
        document.getElementById('notification-toast').style.transform = 'translateX(100%)';
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    // Enhanced mobile navigation with touch gestures
    let touchStartX = 0;
    let touchEndX = 0;

    document.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    });

    document.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleGesture();
    });

    function handleGesture() {
        const mobileMenu = document.getElementById('mobile-menu');
        if (touchEndX < touchStartX - 50 && !mobileMenu.classList.contains('hidden')) {
            // Swipe left to close menu
            mobileMenu.classList.add('hidden');
        }
        if (touchEndX > touchStartX + 50 && mobileMenu.classList.contains('hidden')) {
            // Swipe right to open menu (when near edge)
            if (touchStartX < 50) {
                mobileMenu.classList.remove('hidden');
            }
        }
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header scroll effect
    let lastScrollTop = 0;
    const header = document.querySelector('nav');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolling down
            header.style.transform = 'translateY(-100%)';
        } else {
            // Scrolling up
            header.style.transform = 'translateY(0)';
        }

        lastScrollTop = scrollTop;

        // Update active navigation
        updateActiveNavigation();
    });

    // Active navigation functionality
    function updateActiveNavigation() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');
        const scrollPos = window.scrollY + 100; // Offset for header height

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                // Remove active class from all nav links
                navLinks.forEach(link => {
                    link.classList.remove('active-nav');
                    link.classList.add('text-gray-900');
                    link.classList.remove('text-medical-teal', 'font-semibold', 'border-b-2', 'border-medical-teal');
                });

                // Add active class to current section's nav link
                const activeLinks = document.querySelectorAll(`[data-section="${sectionId}"]`);
                activeLinks.forEach(link => {
                    link.classList.add('active-nav');
                    link.classList.remove('text-gray-900');
                    link.classList.add('text-medical-teal', 'font-semibold', 'border-b-2', 'border-medical-teal');
                });
            }
        });
    }

    // Initialize active navigation on page load
    updateActiveNavigation();

    // Enhanced scroll animations with Intersection Observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('service-card')) {
                    // Stagger animation for service cards
                    const cards = document.querySelectorAll('.service-card');
                    const index = Array.from(cards).indexOf(entry.target);
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 150);
                } else {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.service-card, #services .bg-white, #equipe .group, #about .space-y-6 > *, .grid .group, #realisations .group').forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(50px)';
        element.style.transition = `opacity 0.8s ease ${index * 0.1}s, transform 0.8s ease ${index * 0.1}s`;
        observer.observe(element);
    });

    // Enhanced service card interactions
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) scale(1.02)';
            this.querySelector('svg').style.transform = 'rotate(5deg) scale(1.1)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.querySelector('svg').style.transform = 'rotate(0deg) scale(1)';
        });
    });

    // Specialized service card interactions
    document.querySelectorAll('.specialized-service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
            const icon = this.querySelector('.w-16, .w-12');
            if (icon) {
                icon.style.transform = 'scale(1.1) rotate(3deg)';
            }
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            const icon = this.querySelector('.w-16, .w-12');
            if (icon) {
                icon.style.transform = 'scale(1) rotate(0deg)';
            }
        });
    });

    // Enhanced team member interactions with staggered animations
    document.querySelectorAll('#equipe .group').forEach((member, index) => {
        member.style.animationDelay = `${index * 0.2}s`;

        member.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-15px)';
            this.querySelector('.w-32').style.transform = 'scale(1.1) rotate(5deg)';
        });

        member.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.querySelector('.w-32').style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // CTA button interactions
    document.querySelectorAll('button').forEach(button => {
        if (!button.id || (button.id !== 'scroll-to-top' && button.id !== 'close-toast')) {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05) translateY(-2px)';
                this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.2)';
            });

            button.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) translateY(0)';
                this.style.boxShadow = '';
            });
        }
    });

    // Add typing effect to hero title
    function typeWriter(element, text, speed = 100) {
        element.innerHTML = '';
        let i = 0;

        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }

        type();
    }

    // Initialize typing effect after a delay
    setTimeout(() => {
        const heroTitle = document.querySelector('#accueil h2');
        if (heroTitle) {
            const originalText = heroTitle.innerHTML;
            typeWriter(heroTitle, originalText.replace(/<[^>]*>/g, ''), 50);
        }
    }, 1500);

    // Enhanced parallax effects for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const hero = document.querySelector('#accueil');
        const heroContent = hero.querySelector('.max-w-7xl');
        const floatingElements = hero.querySelectorAll('.absolute > div');

        if (hero && scrolled < hero.offsetHeight) {
            heroContent.style.transform = `translateY(${scrolled * 0.1}px)`;

            floatingElements.forEach((element, index) => {
                const speed = (index + 1) * 0.15;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        }
    });

    // Lazy loading for images
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.classList.remove('loading-shimmer');
                    observer.unobserve(img);
                }
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
        img.classList.add('loading-shimmer');
        imageObserver.observe(img);
    });

    // Performance optimization: Debounced scroll handler
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    const debouncedScrollHandler = debounce(() => {
        updateActiveNavigation();
    }, 10);

    window.addEventListener('scroll', debouncedScrollHandler);

    // Form handling
    const contactForm = document.querySelector('#contact form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Basic form validation
            const inputs = this.querySelectorAll('input[required], textarea[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('border-red-500');
                    input.classList.remove('border-white/30');
                } else {
                    input.classList.remove('border-red-500');
                    input.classList.add('border-white/30');
                }
            });

            if (!isValid) {
                showNotification('Veuillez remplir tous les champs requis', 'error');
                return;
            }

            // Show loading state
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            button.innerHTML = '<div class="flex items-center justify-center"><div class="animate-spin rounded-full h-5 w-5 border-b-2 border-white mr-2"></div>Envoi en cours...</div>';
            button.disabled = true;

            // Simulate form submission
            setTimeout(() => {
                showNotification('Message envoyé avec succès! Nous vous répondrons bientôt.', 'success');
                button.innerHTML = originalText;
                button.disabled = false;
                this.reset();
            }, 2000);
        });
    }

    // Surgical Interventions Carousel
    const carousel = document.getElementById('surgical-carousel');
    const slides = carousel.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-dot');
    const prevBtn = document.getElementById('prev-slide');
    const nextBtn = document.getElementById('next-slide');

    let currentSlide = 0;
    let carouselInterval;

    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
            slide.style.opacity = '0';
        });

        // Update dots
        dots.forEach(dot => dot.classList.remove('active'));

        // Show current slide
        slides[index].classList.add('active');
        slides[index].style.opacity = '1';
        dots[index].classList.add('active');

        currentSlide = index;
    }

    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }

    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }

    function startCarousel() {
        carouselInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
    }

    function stopCarousel() {
        clearInterval(carouselInterval);
    }

    // Initialize carousel
    showSlide(0);
    startCarousel();

    // Pause carousel on hover
    carousel.addEventListener('mouseenter', stopCarousel);
    carousel.addEventListener('mouseleave', startCarousel);

    // Navigation buttons
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            stopCarousel();
            prevSlide();
            startCarousel();
        });

        nextBtn.addEventListener('click', () => {
            stopCarousel();
            nextSlide();
            startCarousel();
        });
    }

    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopCarousel();
            showSlide(index);
            startCarousel();
        });
    });

    // Hero Background Slideshow
    const heroBgCarousel = document.getElementById('hero-bg-carousel');
    const heroBgSlides = heroBgCarousel.querySelectorAll('.hero-bg-slide');

    let currentHeroBgSlide = 0;
    // let heroBgInterval; // Removed unused variable

    function showHeroBgSlide(index) {
        // Hide all slides
        heroBgSlides.forEach((slide, i) => {
            slide.classList.remove('active');
            slide.style.opacity = '0';

            // Pause video if it's not the active slide
            const video = slide.querySelector('video');
            if (video && i !== index) {
                video.pause();
            }
        });

        // Show current slide
        heroBgSlides[index].classList.add('active');
        heroBgSlides[index].style.opacity = '1';

        // Play video if current slide contains video
        const currentVideo = heroBgSlides[index].querySelector('video');
        if (currentVideo) {
            currentVideo.play().catch(() => {
                console.log('Video autoplay prevented or video not available, continuing slideshow...');
                // Continue to next slide if video fails
                setTimeout(() => {
                    nextHeroBgSlide();
                }, 1000);
            });
        }

        currentHeroBgSlide = index;
    }

    function nextHeroBgSlide() {
        const next = (currentHeroBgSlide + 1) % heroBgSlides.length;
        showHeroBgSlide(next);
    }

    function startHeroBgCarousel() {
        heroBgInterval = setInterval(nextHeroBgSlide, 5000); // Change slide every 5 seconds
    }

    // Initialize hero background carousel
    if (heroBgCarousel && heroBgSlides.length > 0) {
        showHeroBgSlide(0);
        startHeroBgCarousel();

        // Handle video ended event to move to next slide
        heroBgSlides.forEach(slide => {
            const video = slide.querySelector('video');
            if (video) {
                video.addEventListener('ended', () => {
                    // Move to next slide when video ends
                    nextHeroBgSlide();
                });

                video.addEventListener('error', () => {
                    console.log('Video error in background slideshow, skipping...');
                    // Skip to next slide on video error
                    setTimeout(() => {
                        nextHeroBgSlide();
                    }, 500);
                });
            }
        });
    }

    // Gallery functionality
    const galleryItems = document.querySelectorAll('.gallery-item');
    const galleryFilters = document.querySelectorAll('.gallery-filter');
    const galleryModal = document.getElementById('gallery-modal');
    const modalImage = document.getElementById('modal-image');
    const modalTitle = document.getElementById('modal-title');
    const modalDescription = document.getElementById('modal-description');
    const closeModalBtn = document.getElementById('close-modal');
    const prevModalBtn = document.getElementById('prev-modal');
    const nextModalBtn = document.getElementById('next-modal');

    let currentModalIndex = 0;
    let filteredItems = Array.from(galleryItems);

    // Filter functionality
    galleryFilters.forEach(filter => {
        filter.addEventListener('click', () => {
            const filterValue = filter.dataset.filter;

            // Update filter buttons
            galleryFilters.forEach(f => {
                f.classList.remove('active', 'bg-medical-teal', 'text-white');
                f.classList.add('bg-gray-200', 'text-gray-700');
            });
            filter.classList.remove('bg-gray-200', 'text-gray-700');
            filter.classList.add('active', 'bg-medical-teal', 'text-white');

            // Filter gallery items
            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';

                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });

            // Update filtered items for modal navigation
            if (filterValue === 'all') {
                filteredItems = Array.from(galleryItems);
            } else {
                filteredItems = Array.from(galleryItems).filter(item =>
                    item.classList.contains(filterValue)
                );
            }
        });
    });

    // Modal functionality
    function openModal(index) {
        const item = filteredItems[index];
        if (!item) return;

        const imageSrc = item.dataset.image;
        const title = item.dataset.title;
        const description = item.dataset.description;

        modalImage.src = imageSrc;
        modalTitle.textContent = title;
        modalDescription.textContent = description;

        currentModalIndex = index;

        galleryModal.classList.remove('opacity-0', 'invisible');
        galleryModal.querySelector('.relative').style.transform = 'scale(1)';
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        galleryModal.classList.add('opacity-0', 'invisible');
        galleryModal.querySelector('.relative').style.transform = 'scale(0.95)';
        document.body.style.overflow = '';
    }

    function nextModalImage() {
        const nextIndex = (currentModalIndex + 1) % filteredItems.length;
        openModal(nextIndex);
    }

    function prevModalImage() {
        const prevIndex = (currentModalIndex - 1 + filteredItems.length) % filteredItems.length;
        openModal(prevIndex);
    }

    // Gallery item click handlers
    galleryItems.forEach((item) => {
        item.addEventListener('click', () => {
            const itemIndex = filteredItems.indexOf(item);
            if (itemIndex !== -1) {
                openModal(itemIndex);
            }
        });
    });

    // Modal controls
    closeModalBtn.addEventListener('click', closeModal);
    nextModalBtn.addEventListener('click', nextModalImage);
    prevModalBtn.addEventListener('click', prevModalImage);

    // Close modal on background click
    galleryModal.addEventListener('click', (e) => {
        if (e.target === galleryModal) {
            closeModal();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (galleryModal.classList.contains('opacity-0')) return;

        switch(e.key) {
            case 'Escape':
                closeModal();
                break;
            case 'ArrowRight':
                nextModalImage();
                break;
            case 'ArrowLeft':
                prevModalImage();
                break;
        }
    });

    // Initialize gallery items with transition styles
    galleryItems.forEach(item => {
        item.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    });

    // Video Advertisement Controls
    const promoVideo = document.getElementById('promo-video');
    const videoOverlay = document.getElementById('video-overlay');
    const playBtn = document.getElementById('play-btn');
    const playIcon = document.getElementById('play-icon');
    const pauseIcon = document.getElementById('pause-icon');
    const volumeBtn = document.getElementById('volume-btn');
    const volumeOnIcon = document.getElementById('volume-on');
    const volumeOffIcon = document.getElementById('volume-off');
    const progressBar = document.getElementById('progress-bar');
    const currentTimeSpan = document.getElementById('current-time');
    const durationSpan = document.getElementById('duration');
    const videoDurationSpan = document.getElementById('video-duration');

    let isPlaying = false;
    let isMuted = false;

    if (promoVideo) {
        // Format time function
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = Math.floor(seconds % 60);
            return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
        }

        // Play/Pause functionality
        function togglePlayPause() {
            if (isPlaying) {
                promoVideo.pause();
                isPlaying = false;
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
                videoOverlay.classList.remove('opacity-0');
            } else {
                promoVideo.play().then(() => {
                    isPlaying = true;
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                    // Hide overlay after 3 seconds when playing
                    setTimeout(() => {
                        if (isPlaying) {
                            videoOverlay.classList.add('opacity-0');
                        }
                    }, 3000);
                }).catch((e) => {
                    console.log('Video play failed:', e);
                    showNotification('Video non disponible pour le moment', 'error');
                });
            }
        }

        // Volume control
        function toggleMute() {
            if (isMuted) {
                promoVideo.muted = false;
                isMuted = false;
                volumeOnIcon.classList.remove('hidden');
                volumeOffIcon.classList.add('hidden');
            } else {
                promoVideo.muted = true;
                isMuted = true;
                volumeOnIcon.classList.add('hidden');
                volumeOffIcon.classList.remove('hidden');
            }
        }

        // Update progress bar and time display
        function updateProgress() {
            if (promoVideo.duration) {
                const progress = (promoVideo.currentTime / promoVideo.duration) * 100;
                progressBar.style.width = progress + '%';

                if (currentTimeSpan) {
                    currentTimeSpan.textContent = formatTime(promoVideo.currentTime);
                }
            }
        }

        // Update duration display
        function updateDuration() {
            if (promoVideo.duration) {
                const formattedDuration = formatTime(promoVideo.duration);
                if (durationSpan) {
                    durationSpan.textContent = formattedDuration;
                }
                if (videoDurationSpan) {
                    videoDurationSpan.textContent = formattedDuration;
                }
            }
        }

        // Seek functionality
        function seek(e) {
            const rect = e.currentTarget.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const width = rect.width;
            const seekTime = (clickX / width) * promoVideo.duration;
            promoVideo.currentTime = seekTime;
        }

        // Event listeners
        if (playBtn) playBtn.addEventListener('click', togglePlayPause);
        if (volumeBtn) volumeBtn.addEventListener('click', toggleMute);
        promoVideo.addEventListener('click', togglePlayPause);
        promoVideo.addEventListener('timeupdate', updateProgress);
        promoVideo.addEventListener('loadedmetadata', updateDuration);

        // Progress bar click for seeking
        const progressBarContainer = progressBar?.parentElement;
        if (progressBarContainer) {
            progressBarContainer.addEventListener('click', seek);
        }

        // Show overlay on mouse move
        promoVideo.addEventListener('mousemove', () => {
            if (videoOverlay) {
                videoOverlay.classList.remove('opacity-0');
                clearTimeout(window.overlayTimeout);
                if (isPlaying) {
                    window.overlayTimeout = setTimeout(() => {
                        videoOverlay.classList.add('opacity-0');
                    }, 3000);
                }
            }
        });

        // Video ended
        promoVideo.addEventListener('ended', () => {
            isPlaying = false;
            if (playIcon) playIcon.classList.remove('hidden');
            if (pauseIcon) pauseIcon.classList.add('hidden');
            if (videoOverlay) videoOverlay.classList.remove('opacity-0');
            if (progressBar) progressBar.style.width = '0%';
        });

        // Video error handling
        promoVideo.addEventListener('error', (e) => {
            console.log('Video error:', e);
            // Hide video section or show fallback image
            const videoSection = promoVideo.closest('section');
            if (videoSection) {
                const fallbackMessage = document.createElement('div');
                fallbackMessage.className = 'text-center p-8 bg-gray-100 rounded-lg';
                fallbackMessage.innerHTML = `
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 3a2 2 0 00-2 2v4a2 2 0 002 2h4a2 2 0 002-2v-4a2 2 0 00-2-2h-4zm0 2h8v4h-8V5z"/>
                    </svg>
                    <p class="text-gray-600">Vidéo temporairement indisponible</p>
                `;
                promoVideo.parentElement.appendChild(fallbackMessage);
                promoVideo.style.display = 'none';
            }
        });

        // Initialize muted state
        promoVideo.muted = false;
        isMuted = false;
        if (volumeOnIcon) volumeOnIcon.classList.remove('hidden');
        if (volumeOffIcon) volumeOffIcon.classList.add('hidden');
    }

    // Partners Section Animation
    const partnersSection = document.getElementById('partenaires');
    if (partnersSection) {
        const partnerCards = partnersSection.querySelectorAll('.partner-card');

        // Animate partner cards on scroll
        const partnerObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0) scale(1)';
                    }, index * 100); // @tweakable stagger animation delay for partner cards
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Initialize partner cards
        partnerCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px) scale(0.9)';
            card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
            partnerObserver.observe(card);
        });

        // Enhanced hover effects for partner cards
        partnerCards.forEach(card => {
            const logo = card.querySelector('.partner-logo-placeholder');
            // const tooltip = card.querySelector('.partner-info'); // Removed unused variable

            card.addEventListener('mouseenter', function() {
                // @tweakable partner card hover animation intensity
                this.style.transform = 'translateY(-12px) rotate(2deg) scale(1.08)';
                if (logo) {
                    logo.style.transform = 'rotate(-5deg) scale(1.1)';
                }
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotate(0deg) scale(1)';
                if (logo) {
                    logo.style.transform = 'rotate(0deg) scale(1)';
                }
            });

            // Add click event for potential future functionality
            card.addEventListener('click', function() {
                const partnerName = this.querySelector('.partner-info span')?.textContent;
                if (partnerName) {
                    showNotification(`En savoir plus sur ${partnerName} - Fonctionnalité à venir`, 'info');
                }
            });
        });

        // Partnership benefits animation
        const benefitItems = partnersSection.querySelectorAll('.partnership-benefit');
        benefitItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = `opacity 0.6s ease ${0.5 + index * 0.1}s, transform 0.6s ease ${0.5 + index * 0.1}s`;

            const benefitObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            benefitObserver.observe(item);
        });
    }

    // Function to add new partner (for future use)
    function addPartner(logoSrc, name, /*description,*/ color = '#6366F1') {
        const partnersGrid = document.querySelector('.partners-grid');
        if (partnersGrid) {
            const partnerCard = document.createElement('div');
            partnerCard.className = 'partner-card group bg-white rounded-2xl p-6 medical-shadow hover-lift border border-gray-100 flex items-center justify-center transition-all duration-300';

            partnerCard.innerHTML = `
                <div class="partner-logo-container w-24 h-24 flex items-center justify-center">
                    ${logoSrc ?
                        `<img src="${logoSrc}" alt="${name}" class="w-full h-full object-contain rounded-xl group-hover:scale-110 transition-transform duration-300">` :
                        `<div class="partner-logo-placeholder bg-gradient-to-br rounded-xl w-full h-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="background: linear-gradient(135deg, ${color}, ${color}dd);">
                            <i class="fas fa-building text-white text-2xl"></i>
                        </div>`
                    }
                </div>
                <div class="partner-info absolute -bottom-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="bg-white rounded-lg px-3 py-1 shadow-lg border">
                        <span class="text-xs font-medium text-gray-700">${name}</span>
                    </div>
                </div>
            `;

            partnersGrid.appendChild(partnerCard);

            // @tweakable new partner card initial animation
            partnerCard.style.opacity = '0';
            partnerCard.style.transform = 'scale(0.8)';
            setTimeout(() => {
                partnerCard.style.opacity = '1';
                partnerCard.style.transform = 'scale(1)';
                partnerCard.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            }, 100);
        }
    }

    // Expose function globally for potential external use
    window.addPartner = addPartner;
});
